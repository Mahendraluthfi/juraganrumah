<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upgrade extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_login_agen() == false)
	    {	     
	        redirect('agen/login');
	    }
	    $this->load->model('Mprofilagen');
	}

	public function index()
	{		
		$cek = $this->db->get_where('agen', array('id_agen' => $this->session->userdata('id_agen')))->row();		
		$data['row'] = $cek;
		$url = base_url('agen/link/'.$cek->id_agen);
		$data['url'] = file_get_contents('http://tinyurl.com/api-create.php?url='."$url");		
		// $data['url'] = base_url('agen/link/'.$cek->id_agen);	
		$premium = $this->db->get_where('agen_premium', array('id_agen' => $this->session->userdata('id_agen')));
		$row = $premium->row();
		if (empty($premium->num_rows())) {
			$data['status']	 = '<div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-account-remove"></i></h1>
                                <h6 class="text-white">Status Anda : Agen Free</h6>
                                <a href="'.base_url('agen/upgrade/checkout').'" class="btn btn-success">Dapatkan Premium</a>
                            </div>
                        </div>';	
            $data['invoice_no'] = '';                        
		}elseif($row->status == "PROSES"){
			$data['status'] = '<div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-account-convert"></i></h1>
                                <h6 class="text-white">Status Anda : Validasi Pembayaran</h6>
                                 <button type="button" class="btn btn-secondary margin-5" onclick="invoice(\''.$row->id_invoice.'\')"><i class="fas fa-file-alt"></i> Invoice</button>
                                 <button type="button" class="btn btn-success margin-5" data-toggle="modal" data-target="#Modal1"><i class="fas fa-upload"></i> Upload Bukti Transfer</button>                                                                
                            </div>
                        </div>';
            $data['invoice_no'] = $row->id_invoice;
		}elseif($row->status == "SUBMIT"){
			$data['status'] = '<div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-account-convert"></i></h1>
                                <h6 class="text-white">Status Anda : Menunggu Proses Aktivasi</h6>
                                <button type="button" class="btn btn-secondary margin-5" onclick="invoice(\''.$row->id_invoice.'\')"><i class="fas fa-file-alt"></i> Invoice</button>                           
                            </div>
                        </div>';
            $data['invoice_no'] = '';
		}elseif($row->status == "AKTIF"){
			$data['status'] = '<div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-account-convert"></i></h1>
                                <h5 class="text-white">Status Anda : Agen Premium</h5>
                                 <button type="button" class="btn btn-default">Aktif hingga '.date('d M Y', strtotime($row->date_expired)).'</button>
                            </div>
                        </div>';
            $data['invoice_no'] = '';
		}

		$data['content'] = 'agen/upgrade';
		$this->load->view('agen/index', $data);
	}

	public function checkout()
	{
		$cek = $this->Mprofilagen->show($this->session->userdata('id_agen'))->row();		
		$data['row'] = $cek;
		$data['inv'] = $this->session->userdata('inv');
		$data['content'] = 'agen/checkout_premium';
		$this->load->view('agen/index', $data);	
	}

	public function acak($long)
	{
		$char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$string = '';
		for ($i=0; $i < $long; $i++) { 			
			$pos = rand(0, strlen($char)-1);
			$string .= $char{$pos};
		}
		return $string;
	}

	public function payment_submit()
	{
		$id_premium = $this->acak(4);
		$expired = date('Y-m-d H:i:s', strtotime('+1 years'));
		$post = $this->input->post();
		$data = array(
			'id_premium' => 'AP-'.$id_premium,
			'id_agen' => $this->session->userdata('id_agen'), 
			'id_invoice' => $post['id_invoice'],
			'nominal' => '500000',
			'kode' => $post['kode'],
			'total' => $post['total'],
			'date_start' => date('Y-m-d H:i:s'),
			'date_expired' => $expired,
			'status' => 'PROSES'
		);
		$this->db->insert('agen_premium', $data);
		redirect('agen/upgrade','refresh');
	}

	public function submit_tf()
	{
		$nmfile = 'IMG-'.date('dHis'); 		
		$config['upload_path']          = './assets/backend/foto/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['max_width']            = 1900;
        $config['max_height']           = 1200;
        $config['file_name'] 			= $nmfile;         

        $this->load->library('upload', $config);

        if (!empty($_FILES['foto']['name'])) {
	        if ( ! $this->upload->do_upload('foto')){
	            $error = array('error' => $this->upload->display_errors());
	            //$this->load->view('upload_form', $error);
	            // echo $error['error'];
	            $this->session->set_flashdata('error', '
	            	$(document).ready(function(){
	            		toastr.error("'.$error['error'].'", "Gagal Upload File!");
	            		});
	            	');
	            redirect('agen/upgrade','refresh');
	        }else{
	            $data = $this->upload->data();
	            $tmpname1 = $data['file_name'];

	            $this->db->where('id_agen', $this->session->userdata('id_agen'));
	            $this->db->update('agen', array(
	            	'nama_bank' => $this->input->post('namabank'),
	            	'no_rekening' => $this->input->post('norek'),
	            	'atas_nama' => $this->input->post('atasnama'),
	            ));

	            $this->db->insert('bukti_premium', array(
	            	'id_invoice' => $this->input->post('noinvoice'),
	            	'foto' => $tmpname1
	            ));
	        	
	        	$this->db->where('id_invoice', $this->input->post('noinvoice'));
	        	$this->db->update('agen_premium', array('status' => 'SUBMIT'));

	        	redirect('agen/upgrade','refresh');
	        }
	    }	    
	}

	public function get_inv($id)
	{
		$data = $this->Mprofilagen->get_inv($id)->row();
		echo json_encode($data);
	}
}

/* End of file Upgrade.php */
/* Location: ./application/controllers/agen/Upgrade.php */
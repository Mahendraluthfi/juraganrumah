<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promosi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_login_mitra() == false)
	    {	     
	        redirect('mitra/login');
	    }
	    $cek = $this->db->get_where('mitra', array('id_mitra' => $this->session->userdata('id_mitra')))->row();
	    if ($cek->status_akun == "TRIAL") {
	    	$this->session->set_flashdata('error', '
	            	$(document).ready(function(){
	            		toastr.error("Anda harus Upgrade ke Mitra Pro untuk menggunakan layanan Promosi", "Maaf !");
	            		});
	            	');
	            redirect('mitra/upgrade','refresh');
	    }
	    if ($this->session->userdata('status_akun') == "EXPIRED") {
	    	 $this->session->set_flashdata('error', '
	            	$(document).ready(function(){
	            		toastr.error("Silahkan Uprade Menjadi Mitra Developer Pro", "Status Expired");
	            		});
	            	');
	            redirect('mitra/upgrade','refresh');
	    }
	     if ($this->session->userdata('confirm') == "YES") {	    	
	    	 $this->session->set_flashdata('error', '
	            	$(document).ready(function(){
	            		toastr.error("Silahkan Lakukan Konfirmasi Pembayaran", "Akses ditolak");
	            		});
	            	');
	            redirect('mitra/transaksi','refresh');
	    }
	}

	public function index()
	{	
		$data['get'] = $this->db->get_where('promosi_mitra', array('id_mitra' => $this->session->userdata('id_mitra')))->result();
		$data['content'] = 'mitra/promosi';
		$this->load->view('mitra/index', $data);
	}

	public function submit()
	{
		$nmfile = 'IMG-'.date('dHis'); 		
		$config['upload_path']          = './assets/backend/fotomitra/';
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
	            redirect('mitra/promosi','refresh');
	        }else{
	            $data = $this->upload->data();
	            $tmpname1 = $data['file_name'];	            

				$data = array(
					'date_post' => date('Y-m-d'),
					'id_mitra' => $this->session->userdata('id_mitra'),
					'nama_iklan' => $this->input->post('nama'),					
					'file' => $tmpname1					
				);

				$this->db->insert('promosi_mitra', $data);

	        	redirect('mitra/promosi','refresh');
	        }
	    }
	}

	public function submit_edit()
	{
		$nmfile = 'IMG-'.date('dHis'); 		
		$config['upload_path']          = './assets/backend/fotomitra/';
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
	            redirect('mitra/promosi','refresh');
	        }else{
	            $data = $this->upload->data();
	            $tmpname1 = $data['file_name'];	            

				$data = array(					
					'nama_iklan' => $this->input->post('nama'),					
					'file' => $tmpname1					
				);

				$this->db->where('id', $this->input->post('id'));
				$this->db->update('promosi_mitra', $data);

	        	redirect('mitra/promosi','refresh');
	        }
	    }else{
	    	$data = array(					
					'nama_iklan' => $this->input->post('nama'),										
				);

				$this->db->where('id', $this->input->post('id'));
				$this->db->update('promosi_mitra', $data);

	        	redirect('mitra/promosi','refresh');
	    }
	}

	public function delete($id,$foto)
	{
		$target = './assets/backend/fotomitra/'.$foto;
		if (file_exists($target)) {
			unlink($target);
		}

		$this->db->where('id', $id);
		$this->db->delete('promosi_mitra');

		redirect('mitra/promosi','refresh');
	}

	public function get($id)
	{
		$data = $this->db->get_where('promosi_mitra', array('id' => $id))->row();
		echo json_encode($data);
	}

}

/* End of file Promosi.php */
/* Location: ./application/controllers/mitra/Promosi.php */
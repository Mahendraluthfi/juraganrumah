<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_login_mitra() == false)
	    {	     
	        redirect('mitra/login');
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
	    
	    $this->load->model('Martikel');

	}

	public function index()
	{
		$data['get'] = $this->Martikel->get_list_mitra($this->session->userdata('id_mitra'))->result();		
		$data['content'] = 'mitra/artikel';
		$this->load->view('mitra/index', $data);
	}

	public function add()
	{
		$data['content'] = 'mitra/artikel_add';
		$this->load->view('mitra/index', $data);
	}

	public function edit($id)
	{
		$data['get'] = $this->db->get_where('artikel', array('id_artikel' => $id))->row();
		$data['content'] = 'mitra/artikel_edit';
		$this->load->view('mitra/index', $data);
	}

	public function get($id)
	{
		$data = $this->db->get_where('artikel', array('id_artikel' => $id))->row();
		echo json_encode($data);
	}

	public function submit()
	{
		$get = $this->db->get_where('mitra', array('id_mitra' => $this->session->userdata('id_mitra')))->row();
		$nmfile = 'IMG-'.date('dHis'); 		
		$config['upload_path']          = './assets/backend/fotoartikel/';
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
	            redirect('mitra/artikel','refresh');
	        }else{
	            $data = $this->upload->data();
	            $tmpname1 = $data['file_name'];	            

				$data = array(
					'datetime' => date('Y-m-d H:i:s'),
					'id_mitra' => $this->session->userdata('id_mitra'),
					'judul' => $this->input->post('judul'),
					'isi' => $this->input->post('isi'),					
					'foto' => $tmpname1,
					'author' => $get->nama_perusahaan
				);

				$this->db->insert('artikel', $data);

	        	redirect('mitra/artikel','refresh');
	        }
	    }else{
	    	$data = array(
					'datetime' => date('Y-m-d H:i:s'),
					'judul' => $this->input->post('judul'),
					'isi' => $this->input->post('isi'),										
					'author' => 'Admin'
				);

				$this->db->insert('artikel', $data);

	        	redirect('mitra/artikel','refresh');
	    }	    
	    		// print_r($data);
	}

	public function submit_edit()
	{
		$nmfile = 'IMG-'.date('dHis'); 		
		$config['upload_path']          = './assets/backend/fotoartikel/';
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
	            redirect('mitra/artikel','refresh');
	        }else{
	            $data = $this->upload->data();
	            $tmpname1 = $data['file_name'];	            

				$data = array(					
					'judul' => $this->input->post('judul'),
					'isi' => $this->input->post('isi'),					
					'foto' => $tmpname1,					
				);

				$this->db->where('id_artikel', $this->input->post('isi'));
				$this->db->update('artikel', $data);
				// $this->db->insert('artikel', $data);

	        	redirect('mitra/artikel','refresh');
	        }
	    }else{
	    	$data = array(					
					'judul' => $this->input->post('judul'),
					'isi' => $this->input->post('isi'),															
				);

	    		$this->db->where('id_artikel', $this->input->post('id'));
				$this->db->update('artikel', $data);
				// $this->db->insert('artikel', $data);

	        	redirect('mitra/artikel','refresh');
	    }	    
	}

	public function hapus($id)
	{
		$this->db->where('id_artikel', $id);
		$this->db->delete('artikel');

		redirect('mitra/artikel','refresh');
	}
}

/* End of file Artikel.php */
/* Location: ./application/controllers/admin/Artikel.php */
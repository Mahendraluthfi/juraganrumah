<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_login_official() == false)
	    {	     
	        redirect('admin/login');
	    }
	    $this->load->model('Martikel');
	}

	public function index()
	{

		$data['get'] = $this->Martikel->get_list_admin()->result();
		$data['content'] = 'admin/artikel';
		$this->load->view('admin/index', $data);
	}

	public function add()
	{
		$data['content'] = 'admin/artikel_add';
		$this->load->view('admin/index', $data);
	}

	public function edit($id)
	{
		$data['get'] = $this->db->get_where('artikel', array('id_artikel' => $id))->row();
		$data['content'] = 'admin/artikel_edit';
		$this->load->view('admin/index', $data);
	}

	public function get($id)
	{
		$data = $this->db->get_where('artikel', array('id_artikel' => $id))->row();
		echo json_encode($data);
	}

	public function submit()
	{
		$nmfile = 'IMG-'.date('dHis'); 		
		$config['upload_path']          = './assets/backend/fotoartikel/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['max_width']            = 1900;
        $config['max_height']           = 1200;
        $config['encrypt_name']         = true;                           

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
	            redirect('admin/artikel','refresh');
	        }else{
	            $data = $this->upload->data();
	            $tmpname1 = $data['file_name'];	            

				$data = array(
					'datetime' => date('Y-m-d H:i:s'),
					'judul' => $this->input->post('judul'),
					'isi' => $this->input->post('isi'),					
					'foto' => $this->upload->file_name,
					'author' => 'Admin'
				);

				$this->db->insert('artikel', $data);

	        	redirect('admin/artikel','refresh');
	        }
	    }else{
	    	$data = array(
					'datetime' => date('Y-m-d H:i:s'),
					'judul' => $this->input->post('judul'),
					'isi' => $this->input->post('isi'),										
					'author' => 'Admin'
				);

				$this->db->insert('artikel', $data);

	        	redirect('admin/artikel','refresh');
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
        $config['encrypt_name']         = true;             

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
	            redirect('admin/artikel','refresh');
	        }else{
	            $data = $this->upload->data();	            

				$data = array(					
					'judul' => $this->input->post('judul'),
					'isi' => $this->input->post('isi'),					
					'foto' => $this->upload->file_name					
				);

				$this->db->where('id_artikel', $this->input->post('id'));
				$this->db->update('artikel', $data);
				// $this->db->insert('artikel', $data);

	        	redirect('admin/artikel','refresh');
	        }
	    }else{
	    	$data = array(					
					'judul' => $this->input->post('judul'),
					'isi' => $this->input->post('isi'),										
					
				);

	    		$this->db->where('id_artikel', $this->input->post('id'));
				$this->db->update('artikel', $data);
				// $this->db->insert('artikel', $data);

	        	redirect('admin/artikel','refresh');
	    }	    
	}

	public function hapus($id)
	{
		$get = $this->db->get_where('artikel', array('id_artikel' => $id))->row();

		$target = './assets/backend/fotoartikel/'.$get->foto;
		if (file_exists($target)) {
			unlink($target);
		}

		$this->db->where('id_artikel', $id);
		$this->db->delete('artikel');

		redirect('admin/artikel','refresh');
	}
}

/* End of file Artikel.php */
/* Location: ./application/controllers/admin/Artikel.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_login_mitra() == false)
	    {	     
	        redirect('mitra/login');
	    }	    
	}

	public function index()
	{
		$data['row'] = $this->db->get_where('mitra', array('id_mitra' => $this->session->userdata('id_mitra')))->row();
		$data['transaksi'] = $this->db->get_where('mitra_transaksi', array('id_mitra' => $this->session->userdata('id_mitra')))->result(); 
		$data['content'] = 'mitra/transaksi';
		$this->load->view('mitra/index', $data);		
	}

	public function submit_tf()
	{		
		$config['upload_path']          = './assets/backend/foto/';
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
	            redirect('mitra/transaksi','refresh');
	        }else{
	            $data = $this->upload->data();	            	           

	            $this->db->where('id_inv', $this->input->post('inv'));
	            $this->db->update('mitra_transaksi', array('status' => 'SUBMIT'));

	            $this->db->insert('bukti_premium', array(
	            	'id_invoice' => $this->input->post('inv'),
	            	'foto' => $data['file_name']
	            ));

	            $this->db->where('id_mitra', $this->session->userdata('id_mitra'));
	            $this->db->update('mitra', array(
	            	'nama_bank' => $this->input->post('namabank'),
	            	'no_rekening' => $this->input->post('norek'),
	            	'atas_nama' => $this->input->post('atasnama'),
	            ));

	        	redirect('mitra/transaksi','refresh');
	        }
	    }	    
	}
	
	public function get($id)
		{
			$this->load->model('Mproduk_mitra');
			$data = $this->Mproduk_mitra->get_transaksi($id)->row();
			echo json_encode($data);
		}	

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/mitra/Transaksi.php */
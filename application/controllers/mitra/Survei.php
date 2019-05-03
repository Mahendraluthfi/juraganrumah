<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survei extends CI_Controller {

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

	}

	public function index()
	{
		$this->db->select('*');
		$this->db->from('survei');
		$this->db->join('buyer', 'buyer.id_buyer = survei.id_buyer');
		$this->db->join('produk', 'produk.id_produk = survei.id_produk');
		$this->db->where('produk.id_mitra', $this->session->userdata('id_mitra'));
		$db = $this->db->get();
		$data['get'] = $db->result();
		$data['content'] = 'mitra/survei';
		$this->load->view('mitra/index', $data);
	}

}

/* End of file Survei.php */
/* Location: ./application/controllers/mitra/Survei.php */
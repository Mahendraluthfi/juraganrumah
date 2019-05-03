<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

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
	    
	    $this->load->model('Mpenjualan_mitra');
	    $this->load->model('Mpenjualan');

	}

	public function index()
	{
		$data['get']= $this->Mpenjualan_mitra->get_all($this->session->userdata('id_mitra'))->result();
		$data['content'] = 'mitra/penjualan';
		$this->load->view('mitra/index', $data);
		// print_r($cek);
	}

	public function get_transaksi($id)
	{
		$data = $this->Mpenjualan->get_transaksi($id)->result();
		echo json_encode($data);
	}

	public function get_detail($id)
	{
		$data = $this->Mpenjualan->get_detail($id)->row();
		echo json_encode($data);	
	}

}

/* End of file Penjualan.php */
/* Location: ./application/controllers/mitra/Penjualan.php */
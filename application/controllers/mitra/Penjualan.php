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
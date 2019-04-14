<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_login_official() == false)
	    {	     
	        redirect('admin/login');
	    }
	    $this->load->model('Mpenjualan');
	}

	public function index()
	{
		$data['get_data'] = $this->Mpenjualan->get()->result();
		$data['content'] = 'admin/penjualan';
		$this->load->view('admin/index', $data);
	}

	public function closing()
	{
		echo $this->input->post('id_transaksi');
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

	public function get_produkdetail($id)
	{
		$data = $this->Mpenjualan->get_produkdetail($id)->row();
		echo json_encode($data);
	}

	public function get_hargadeal($id)
	{
		$data = $this->Mpenjualan->get_hargadeal($id)->row();
		echo json_encode($data);
	}

}

/* End of file Penjualan.php */
/* Location: ./application/controllers/admin/Penjualan.php */
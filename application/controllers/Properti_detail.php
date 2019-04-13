<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Properti_detail extends CI_Controller {
	function __construct(){
        parent::__construct();
        /*if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
		}*/
		$this->load->model('Login_buyer');
		$this->load->model('M_buyer_produk');
    }
	public function index()
	{
		$data['produk_detail_foto'] = $this->M_buyer_produk->tampil_data_detail_produk_foto()->result();
		$data['produk_detail'] = $this->M_buyer_produk->tampil_data_detail_produk()->result();
		$data['produk'] = $this->M_buyer_produk->tampil_data_produk()->result();
		$data['content'] = 'properti_detail';
		$this->load->view('home', $data);
	}
}

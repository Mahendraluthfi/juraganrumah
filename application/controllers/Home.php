<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Login_buyer');
		$this->load->model('M_buyer_produk');
        /*if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }*/
    }
	public function index()
	{
		$data['prov'] = $this->db->get('prov')->result();
		$data['produk'] = $this->M_buyer_produk->tampil_data_produk()->result();
		$data['content'] = 'beranda';
		$this->load->view('home', $data);
	}
	public function get_kabkot()
	{
		$id = $this->input->post('id');
		$data = $this->db->get_where('kabkot', array('id_prov' => $id))->result();
		echo json_encode($data);
	}

	public function get_kec()
	{
		$id = $this->input->post('id');
		$data = $this->db->get_where('kec', array('id_kabkot' => $id))->result();
		echo json_encode($data);
	}
}

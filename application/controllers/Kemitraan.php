<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kemitraan extends CI_Controller {
	function __construct(){
        parent::__construct();
        /*if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }*/
    }

	public function index()
	{
		$this->load->model('M_blog');
		$this->load->model('Martikel');
		$data['prov'] = $this->db->get('prov')->result();
		$data['newest'] = $this->M_blog->get()->result();
		$data['newest_produk'] = $this->Martikel->get()->result();
		$data['content'] = 'kemitraan';
		$this->load->view('home', $data);
	}

	public function form_register()
	{
		$this->load->model('M_blog');
		$this->load->model('Martikel');
		$data['prov'] = $this->db->get('prov')->result();
		$data['newest'] = $this->M_blog->get()->result();
		$data['newest_produk'] = $this->Martikel->get()->result();
		$data['prov'] = $this->db->get('prov')->result();
		$data['content'] = 'register_mitra';
		$this->load->view('home', $data);
	}

	public function form_register_pro()
	{
		$this->load->model('M_blog');
		$this->load->model('Martikel');
		$data['prov'] = $this->db->get('prov')->result();
		$data['newest'] = $this->M_blog->get()->result();
		$data['newest_produk'] = $this->Martikel->get()->result();
		$data['prov'] = $this->db->get('prov')->result();
		$data['content'] = 'register_mitra_pro';
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


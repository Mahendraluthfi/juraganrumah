<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kemitraan extends CI_Controller {
	function __construct(){
        parent::__construct();
    }
	public function index()
	{
		$this->load->model('M_blog');
		$this->load->model('Martikel');
		$this->load->model('Login_buyer');
		$data['foto_buyer'] = $this->Login_buyer->profil_buyer()->result();
		$data['prov'] = $this->db->get('prov')->result();
		$data['newest'] = $this->db->query("SELECT * FROM artikel ORDER BY id_artikel desc LIMIT 3")->result();
		//$data['newest'] = $this->M_blog->get()->result();
		$data['newest_produk'] = $this->Martikel->get()->result();
		$data['content'] = 'kemitraan';
		$this->load->view('home', $data);
	}
}


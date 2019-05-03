<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Eror404 extends CI_Controller {

	function __construct(){
        parent::__construct();
    }
	public function index()
	{
		$this->load->model('M_blog');
		$this->load->model('Martikel');
		$data['prov'] = $this->db->get('prov')->result();
		$data['newest'] = $this->M_blog->get()->result();
		$data['newest_produk'] = $this->Martikel->get()->result();
		$data['content'] = 'eror404';
		$this->load->view('home', $data);
	}
}



?>



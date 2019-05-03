<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sukses_page extends CI_Controller {
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
		if ((!$this->session->userdata('janji_survei')) == (!$this->session->userdata('ses_shop')))
		{
			redirect('Eror404');
		}
		$data['content'] = 'sukses_page';
		$this->load->view('home', $data);
	}
}



?>


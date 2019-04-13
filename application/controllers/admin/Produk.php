<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_login_official() == false)
	    {	     
	        redirect('admin/login');
	    }
	    
	}

	public function index()
	{
		$data['content'] = 'admin/produk';
		$this->load->view('admin/index', $data);
	}

}

/* End of file Produk.php */
/* Location: ./application/controllers/admin/Produk.php */
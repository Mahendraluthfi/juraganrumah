<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistik extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_login_agen() == false)
	    {	     
	        redirect('agen/login');
	    }
	}

	public function index()
	{
		$data['content'] = 'agen/statistik';
		$this->load->view('agen/index', $data);		
	}

}

/* End of file Statistik.php */
/* Location: ./application/controllers/agen/Statistik.php */
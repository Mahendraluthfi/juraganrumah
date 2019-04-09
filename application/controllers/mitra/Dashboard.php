<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_login_mitra() == false)
	    {	     
	        redirect('mitra/login');
	    }
	}

	public function index()
	{
		$data['content'] = 'mitra/dashboard';
		$this->load->view('mitra/index', $data);
	}

	
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/agen/Dashboard.php */
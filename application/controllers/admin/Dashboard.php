<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$data['content'] = 'admin/dashboard';
		$this->load->view('admin/index', $data);
	}

	
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/agen/Dashboard.php */
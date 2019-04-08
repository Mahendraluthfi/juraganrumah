<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komisi extends CI_Controller {

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
		
	}

}

/* End of file Komisi.php */
/* Location: ./application/controllers/agen/Komisi.php */
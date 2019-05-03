<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer extends CI_Controller {

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
		$data['get'] = $this->db->get_where('buyer', array('id_agen' => $this->session->userdata('id_agen')))->result();
		$data['content'] = 'agen/buyer';
		$this->load->view('agen/index', $data);
	}

}

/* End of file Buyer.php */
/* Location: ./application/controllers/agen/Buyer.php */
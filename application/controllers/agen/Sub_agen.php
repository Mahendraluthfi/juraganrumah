<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_agen extends CI_Controller {

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
		$this->db->select('*');
		$this->db->from('agen');
		$this->db->join('agen_premium', 'agen.id_agen = agen_premium.id_agen', 'left');
		$this->db->where('agen.sub_agen', $this->session->userdata('id_agen'));
		$db = $this->db->get();

		$data['get'] = $db->result();
		$data['content'] = 'agen/sub_agen';
		$this->load->view('agen/index', $data);	
	}

}

/* End of file Sub_agen.php */
/* Location: ./application/controllers/agen/Sub_agen.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poin extends CI_Controller {

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
		$data['agen'] = $this->db->get_where('agen', array('id_agen' => $this->session->userdata('id_agen')))->row();
		$data['row'] = $this->db->get_where('poin_agen', array('id_agen' => $this->session->userdata('id_agen')))->result();
		$data['content'] = 'agen/poin';
		$this->load->view('agen/index', $data);
	}

	public function tes()
	{
		$this->db->query("UPDATE agen SET poin = poin + '5' WHERE id_agen='".$this->session->userdata('id_agen')."'");
	}
}

/* End of file Poin.php */
/* Location: ./application/controllers/agen/Poin.php */
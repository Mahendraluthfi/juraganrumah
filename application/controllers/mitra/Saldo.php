<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saldo extends CI_Controller {

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
		$data['row'] = $this->db->get_where('jurnal_mitra',array('id_mitra' => $this->session->userdata('id_mitra')))->result();
		$data['mitra'] = $this->db->get_where('mitra', array('id_mitra' => $this->session->userdata('id_mitra')))->row();
		$data['content'] = 'mitra/saldo';
		$this->load->view('mitra/index', $data);
	}

}

/* End of file Saldo.php */
/* Location: ./application/controllers/mitra/Saldo.php */
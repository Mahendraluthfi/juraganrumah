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
		$data['row'] = $this->db->get_where('jurnal_komisi',array('id_agen' => $this->session->userdata('id_agen')))->result();
		$data['agen'] = $this->db->get_where('agen', array('id_agen' => $this->session->userdata('id_agen')))->row();
		$data['content'] = 'agen/komisi';
		$this->load->view('agen/index', $data);
	}

	public function pull()
	{
		$data = array(
			'id_agen' => $this->session->userdata('id_agen'),
			'date' => date('Y-m-d'),
			'nominal' => $this->input->post('nominal'),
			'type' => 'OUT',
			'deskripsi' => 'Penarikan Saldo'
		);
		$this->db->insert('jurnal_komisi', $data);
		redirect('agen/komisi','refresh');
	}

}

/* End of file Komisi.php */
/* Location: ./application/controllers/agen/Komisi.php */
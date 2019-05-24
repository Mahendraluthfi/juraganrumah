<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agen extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_login_official() == false)
	    {	     
	        redirect('admin/login');
	    }	    
	    $this->load->model('Mprofilagen');
	}

	public function index()
	{
		$data['get'] = $this->db->get('agen')->result();
		$data['content'] = 'admin/agen';
		$this->load->view('admin/index', $data);
	}

	public function get($id)
	{
		$data = $this->Mprofilagen->show($id)->row();		
		echo json_encode($data);
	}

	public function get_premium($id)
	{
		$data = $this->db->get_where('agen_premium', array('id_agen' => $id))->row();
		echo json_encode($data);
	}

}

/* End of file Agen.php */
/* Location: ./application/controllers/admin/Agen.php */
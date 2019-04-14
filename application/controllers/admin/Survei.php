<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survei extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_login_official() == false)
	    {	     
	        redirect('admin/login');
	    }
	    $this->load->model('Msurvei_admin');
	}


	public function index()
	{
		$data['survei'] = $this->Msurvei_admin->get()->result();
		$data['content'] = 'admin/survei';
		$this->load->view('admin/index', $data);
	}


	public function get_survei($id)
	{
		$data = $this->Msurvei_admin->get_survei($id)->row();
		echo json_encode($data);
	}
}

/* End of file Survei.php */
/* Location: ./application/controllers/admin/Survei.php */
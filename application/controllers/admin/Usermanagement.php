<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermanagement extends CI_Controller {

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
		$data['content'] = 'admin/user';
		$data['get'] = $this->db->get('user')->result();
		$this->load->view('admin/index', $data);
	}

	public function add()
	{
		$data['modul'] = $this->db->get('modul')->result();
		$data['content'] = 'admin/user_add';		
		$this->load->view('admin/index', $data);
	}

	public function submit()
	{
		$username = $this->input->post('username');
		$pass = $this->input->post('pass');
		$pass1 = $this->input->post('pass1');		
		$cb = $this->input->post('cb');
		if ($this->db->get_where('user', array('user_name' => $username))->num_rows() > 0) {
			$this->session->set_flashdata('error', '
	        	$(document).ready(function(){
	        		toastr.error("Username sudah digunakan", "Maaf");
	        		});
	        	');
	        redirect('admin/usermanagement/add','refresh');			
		}elseif($pass !== $pass1){
			$this->session->set_flashdata('error', '
	        	$(document).ready(function(){
	        		toastr.error("Password tidak sama", "Maaf");
	        		});
	        	');
	        redirect('admin/usermanagement/add','refresh');			
		}else{
			$this->db->insert('user', array(
				'user_name' => $username,
				'password' => sha1($pass),
				'level' => 'SUBADMIN'
			));
			$get_id = $this->db->get_where('user', array('user_name' => $username))->row();
			foreach ($cb as $key => $value) {				
				$this->db->insert('privilage', array(
					'user_id' => $get_id->id_user,
					'modul_id' => $key
				));
			}			
			$cek = $this->db->get_where('privilage', array('user_id' => $get_id->id_user))->result();
			foreach ($cek as $key) {
				$get = $this->db->get_where('modul', array('id' => $key->modul_id))->row();
				if ($get->ktg > 0) {
					if ($this->db->get_where('privilage', array('user_id' => $get_id->id_user, 'modul_id' => $get->ktg))->num_rows() > 0) {			
					}else{
						$this->db->insert('privilage', array(
							'user_id' => $get_id->id_user,
							'modul_id' => $get->ktg
						));					
					}
				}
			}
		}
		redirect('admin/usermanagement','refresh');	
	}

	public function cek()
	{
		// print_r($cek);
	}
}

/* End of file Usermanagement.php */
/* Location: ./application/controllers/admin/Usermanagement.php */
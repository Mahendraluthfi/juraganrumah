<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
 	    if($this->auth->is_login_official() == false){          
        	$this->load->view('admin/login');
        }else{
            redirect('admin/dashboard','refresh');
        }		
	}

	public function submit()
	{
		$user_name = $this->input->post('user_name');
        $password = sha1($this->input->post('pass'));        
        $cek = $this->db->get_where('user',array('user_name' => $user_name, 'password' => $password));
        if (empty($this->db->get_where('user', array('user_name' => $user_name))->num_rows())) {
        	$this->session->set_flashdata('msg','
                <span class="login100-form-title p-b-20">
						user_name anda tidak ditemukan !
					</span>');       
            redirect('agen');
        }elseif(!empty($cek->num_rows())) {
           
            $get = $cek->result();
            foreach ($get as $key) {     
                $ses_admin = array(
                    'id_user' => $key->id_user,
                    'user_name' => $key->user_name,                
                    'level' => $key->level                                    
                );
            }         
            $this->session->set_userdata($ses_admin);            
            redirect('admin/dashboard','refresh');
        }else{     
            $this->session->set_flashdata('msg','
                <span class="login100-form-title p-b-20">
						Password anda salah !
					</span>
                ');       
            redirect('official');
        }
	}

	public function logout()
	{
		session_destroy();
		redirect('official','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/agen/Login.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
 	    if($this->auth->is_login_agen() == false){          
        	$this->load->view('agen/login');
        }else{
            redirect('agen/dashboard','refresh');
        }		
	}

	public function submit()
	{
		$username = $this->input->post('username');
        $password = sha1($this->input->post('pass'));
        $input = array(
            'user' => $username,
            'password' => $password
        );
        $cek = $this->db->get_where('agen',array('username' => $username, 'password' => $password));
        if (empty($this->db->get_where('agen', array('username' => $username))->num_rows())) {
        	$this->session->set_flashdata('msg','
                <span class="login100-form-title p-b-20">
						Username anda tidak ditemukan !
					</span>');       
            redirect('agen');
        }elseif(!empty($cek->num_rows())) {
           
            $get = $cek->result();
            foreach ($get as $key) {
            /*    $id = $key->id_akses
                $user = $key->username
                $level = $key->level
            */
                $ses_admin = array(
                    'id_agen' => $key->id_agen,
                    'username_agen' => $key->username,                
                    'inv' => date('mdis')
                );
            }         
            $this->session->set_userdata($ses_admin);            
            redirect('agen/dashboard','refresh');
        }else{     
            $this->session->set_flashdata('msg','
                <span class="login100-form-title p-b-20">
						Password anda salah !
					</span>
                ');       
            redirect('agen');
        }
	}

	public function logout()
	{
		session_destroy();
		redirect('agen','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/agen/Login.php */
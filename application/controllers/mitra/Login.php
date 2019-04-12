<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
 	    if($this->auth->is_login_mitra() == false){          
        	$this->load->view('mitra/login');
        }else{
            redirect('mitra/dashboard','refresh');
        }		
	}

	public function submit()
	{
		$email = $this->input->post('email');
        $password = sha1($this->input->post('pass'));        
        $cek = $this->db->get_where('mitra',array('email' => $email, 'password' => $password));
        if (empty($this->db->get_where('mitra', array('email' => $email))->num_rows())) {
        	$this->session->set_flashdata('msg','
                <span class="login100-form-title p-b-20">
						Email anda tidak ditemukan !
					</span>');       
            redirect('mitra');
        }elseif(!empty($cek->num_rows())) {
           
            $get = $cek->result();
            foreach ($get as $key) {
            /*    $id = $key->id_akses
                $user = $key->username
                $level = $key->level
            */
                $ses_admin = array(
                    'id_mitra' => $key->id_mitra,
                    'email_mitra' => $key->email,   
                    'inv' => date('mdis')
                );
            }         
            $this->session->set_userdata($ses_admin);            
            redirect('mitra/dashboard','refresh');
        }else{     
            $this->session->set_flashdata('msg','
                <span class="login100-form-title p-b-20">
						Password anda salah !
					</span>
                ');       
            redirect('mitra');
        }
	}

	public function logout()
	{
		session_destroy();
		redirect('mitra','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/mitra/Login.php */
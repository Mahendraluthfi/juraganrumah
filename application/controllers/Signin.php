<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('Login_buyer');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }
	public function index()
	{
		$data['content'] = 'signin';
		$this->load->view('home', $data);
    }
    function auth(){
        $email=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
        $password=password_verify($this->input->post('password',TRUE),ENT_QUOTES);
        $cek=$this->Login_buyer->auth_cek($email,$password);
            if($cek->num_rows() > 0){ //jika login buyer
                $data=$cek->row_array();
                    if($data){ //Akses buyer
						$this->session->set_userdata('ses_id',$data['id_buyer']);
                        $this->session->set_userdata('ses_pass',$data['password']);
                        $this->session->set_userdata('ses_email',$data['email_buyer']);
                        $this->session->set_userdata('ses_nama',$data['nama_buyer']);
                        redirect('Home');
                    }
			}else{ 
                    $this->session->set_flashdata('msg', 'Koreksi lagi password dan email anda..');
                    redirect('Signin');
            }
        }
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('Home');
        redirect($url);
    }
}

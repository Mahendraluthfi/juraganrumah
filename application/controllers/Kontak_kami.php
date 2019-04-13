<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_kami extends CI_Controller {
	function __construct(){
        parent::__construct();
        /*if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }*/
    }
	public function index()
	{
		$data['content'] = 'kontak_kami';
		$this->load->view('home', $data);
	}
}

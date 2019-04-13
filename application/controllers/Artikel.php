<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
	function __construct(){
        parent::__construct();
        /*if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }*/
    }
	public function index()
	{
		$data['content'] = 'artikel';
		$this->load->view('home', $data);
	}
}
?>
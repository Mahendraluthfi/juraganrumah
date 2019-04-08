<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upgrade extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_login_agen() == false)
	    {	     
	        redirect('agen/login');
	    }
	    $this->load->model('Mprofilagen');
	}

	public function index()
	{		
		$cek = $this->Mprofilagen->show($this->session->userdata('id_agen'))->row();		
		$data['row'] = $cek;
		// $data['url'] = file_get_contents('http://tinyurl.com/api-create.php?url='.'http://juraganrumah.net/');		
		$data['content'] = 'agen/upgrade';
		$this->load->view('agen/index', $data);
	}

	public function checkout()
	{
		$cek = $this->Mprofilagen->show($this->session->userdata('id_agen'))->row();		
		$data['row'] = $cek;
		$data['inv'] = $this->session->userdata('inv');
		$data['content'] = 'agen/checkout_premium';
		$this->load->view('agen/index', $data);	
	}

	public function acak($long)
	{
		$char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$string = '';
		for ($i=0; $i < $long; $i++) { 			
			$pos = rand(0, strlen($char)-1);
			$string .= $char{$pos};
		}
		return $string;
	}

	public function payment_submit()
	{
		$id_premium = $this->acak(4);
		$expired = date('Y-m-d', strtotime('+1 years'));
		$post = $this->input->post();
		$data = array(
			'id_premium' => 'AP-'.$id_premium,
			'id_agen' => $this->session->userdata('id_agen'), 
			'id_invoice' => $post['id_invoice'],
			'nominal' => '500000',
			'kode' => $post['kode'],
			'total' => $post['total'],
			'date_start' => date('Y-m-d'),
			'date_expired' => $expired,
			'status' => 'PROSES'
		);
		$this->db->insert('agen_premium', $data);
		redirect('agen/upgrade','refresh');
	}

}

/* End of file Upgrade.php */
/* Location: ./application/controllers/agen/Upgrade.php */
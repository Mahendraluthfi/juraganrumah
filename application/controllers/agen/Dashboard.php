<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_login_agen() == false)
	    {	     
	        redirect('agen/login');
	    }
	}

	public function index()
	{
		$url = base_url('agen/link/'.$this->session->userdata('id_agen'));
		$premium = $this->db->get_where('agen_premium', array('id_agen' => $this->session->userdata('id_agen')));
		$arrayprem = $premium->row();
		if (empty($premium->num_rows())) {
			$data['content_premium'] = '<h3>Agen Free</h3>            
            <a href="'.base_url('agen/upgrade').'" class="btn btn-primary">Beralih ke Premium</a>';
		}elseif($arrayprem->status == "PROSES"){
			$data['content_premium'] = '
              <h3>Proses Pembayaran</h3>            
            <a href="'.base_url('agen/upgrade').'" class="btn btn-default">Cek Disini</a>	';
		}elseif($arrayprem->status == "SUBMIT"){
			$data['content_premium'] = '
              <h3>Proses Aktivasi</h3>            
            <a href="'.base_url('agen/upgrade').'" class="btn btn-default">Cek Disini</a>	';
		}elseif($arrayprem->status == "AKTIF"){
			$data['content_premium'] = '
              <h3>Agen Premium</h3>            
            <p>Berlaku hingga '.date('d M Y', strtotime($arrayprem->date_expired)).'</p>';
		}

		$data['url'] = file_get_contents('http://tinyurl.com/api-create.php?url='."$url");
		$data['agen'] = $this->db->get_where('agen', array('id_agen' => $this->session->userdata('id_agen')))->row();		
		$data['content'] = 'agen/dashboard';
		$this->load->view('agen/index', $data);
	}

	
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/agen/Dashboard.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistik extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_login_mitra() == false)
	    {	     
	        redirect('mitra/login');
	    }
	    if ($this->session->userdata('status_akun') == "EXPIRED") {
	    	 $this->session->set_flashdata('error', '
	            	$(document).ready(function(){
	            		toastr.error("Silahkan Uprade Menjadi Mitra Developer Pro", "Status Expired");
	            		});
	            	');
	            redirect('mitra/upgrade','refresh');
	    }
	     if ($this->session->userdata('confirm') == "YES") {	    	
	    	 $this->session->set_flashdata('error', '
	            	$(document).ready(function(){
	            		toastr.error("Silahkan Lakukan Konfirmasi Pembayaran", "Akses ditolak");
	            		});
	            	');
	            redirect('mitra/transaksi','refresh');
	    }
	}

	public function index()
	{
		$data['landing'] = $this->db->get_where('stats_landingpage', array('id_mitra' => $this->session->userdata('id_mitra')))->row();
		$data['wa'] = $this->db->get_where('stats_landingpage_wa', array('id_mitra' => $this->session->userdata('id_mitra')))->row();
		$data['telepon'] = $this->db->get_where('stats_landingpage_telepon', array('id_mitra' => $this->session->userdata('id_mitra')))->row();
		$data['sms'] = $this->db->get_where('stats_landingpage_sms', array('id_mitra' => $this->session->userdata('id_mitra')))->row();
		$data['content'] = 'mitra/statistik';
		$this->load->view('mitra/index', $data);
	}

}

/* End of file Statistik.php */
/* Location: ./application/controllers/mitra/Statistik.php */
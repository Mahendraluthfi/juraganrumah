<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_login_mitra() == false)
	    {	     
	        redirect('mitra/login');
	    }
	}

	public function index()
	{
		$this->db->from('artikel');
		$this->db->where('id_mitra', $this->session->userdata('id_mitra'));
		$this->db->order_by('id_artikel', 'desc');
		$this->db->limit(3);		
		$db_artikel = $this->db->get();

		$this->db->from('produk');
		$this->db->where('id_mitra', $this->session->userdata('id_mitra'));
		$this->db->join('foto_produk', 'produk.id_produk = foto_produk.id_produk','left');
		$this->db->group_by('produk.id_produk');
		$this->db->order_by('produk.id', 'desc');
		$this->db->limit(3);		
		$db_post = $this->db->get();		

		$data['landing'] = $this->db->get_where('stats_landingpage', array('id_mitra' => $this->session->userdata('id_mitra')))->row();
		$data['wa'] = $this->db->get_where('stats_landingpage_wa', array('id_mitra' => $this->session->userdata('id_mitra')))->row();
		$data['telepon'] = $this->db->get_where('stats_landingpage_telepon', array('id_mitra' => $this->session->userdata('id_mitra')))->row();
		$data['sms'] = $this->db->get_where('stats_landingpage_sms', array('id_mitra' => $this->session->userdata('id_mitra')))->row();
		$data['mitra'] = $this->db->get_where('mitra', array('id_mitra' => $this->session->userdata('id_mitra')))->row();
		$data['project'] = $this->db->get_where('project', array('id_mitra' => $this->session->userdata('id_mitra')))->num_rows();		
		$data['properti'] = $this->db->get_where('produk', array('id_mitra' => $this->session->userdata('id_mitra')))->num_rows();		
		$data['last_artikel'] = $db_artikel->result();
		$data['last_post'] = $db_post->result();
		$data['content'] = 'mitra/dashboard';
		$this->load->view('mitra/index', $data);
	}

	
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/agen/Dashboard.php */
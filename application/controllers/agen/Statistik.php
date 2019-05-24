<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistik extends CI_Controller {

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
		$this->db->select('*');
		$this->db->from('stats_agen_posts');
		$this->db->join('produk', 'produk.id_produk = stats_agen_posts.id_produk');
		$this->db->where('stats_agen_posts.id_agen', $this->session->userdata('id_agen'));
		$db = $this->db->get();
		$data['get'] = $db->result();
		$data['category'] = $this->db->get_where('stats_agen_category', array('id_agen' => $this->session->userdata('id_agen')))->row();
		$data['wa'] = $this->db->get_where('stats_agen_wa', array('id_agen' => $this->session->userdata('id_agen')))->row();
		$data['telepon'] = $this->db->get_where('stats_agen_telepon', array('id_agen' => $this->session->userdata('id_agen')))->row();
		$data['sms'] = $this->db->get_where('stats_agen_sms', array('id_agen' => $this->session->userdata('id_agen')))->row();
		$data['content'] = 'agen/statistik';
		$this->load->view('agen/index', $data);		
	}

}

/* End of file Statistik.php */
/* Location: ./application/controllers/agen/Statistik.php */
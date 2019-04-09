<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_login_mitra() == false)
	    {	     
	        redirect('mitra/login');
	    }
	    $this->load->model('Mproduk_mitra');
	}

	public function index()
	{
		// $data['produk'] = 
		$data['content'] = 'mitra/produk';
		$this->load->view('mitra/index', $data);
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

	public function add()
	{
		// $this->load->library('googlemaps');
		// $this->googlemaps->initialize();
		// $data['map'] = $this->googlemaps->create_map();
		$data['kode'] = "JP-".date('m').$this->acak(5);
		$data['ktg'] = $this->db->get_where('category_produk', array('status' => '1'))->result();
		$data['prov'] = $this->db->get('prov')->result();				
		$data['title'] = "Tambah Produk Baru";
		$data['content'] = 'mitra/produk_add';
		$this->load->view('mitra/index', $data);
	}

	public function cek()
	{
		echo get_cookie('user_agen');
	}

	public function submit()
	{
		$post = $this->input->post();

		$data = array(
			'id_produk' => $post['kode_produk'],
			'id_mitra' => $this->session->userdata('id_mitra'),
			'id_category_produk' => $post['ktg'],
			'nama_produk' => $post['nama_produk'],
			'alamat' => $post['alamat'],
			'luas_tanah' => $post['luas_tanah'],
			'luas_bangunan' => $post['luas_bangunan'],
			'harga' => $post['harga'],
			'unit' => $post['unit'],
			'jumlah_kamar_tidur' => $post['kamar_tidur'],
			'jumlah_kamar_mandi' => $post['kamar_mandi'],
			'watt_listrik' => $post['listrik'],
			'jumlah_tingkat' => $post['jumlah_lantai'],
			'hook_pojok' => $post['hook'],
			'furnished' => $post['furnished'],
			'jenis_air' => $post['jenis_air'],
			'hadap' => $post['hadap'],
			'carport' => $post['carport'],
			'description' => $post['deskripsi'],
			'provinsi' => $post['prov'],
			'kabupaten' => $post['kabkot'],
			'kecamatan' => $post['kec']
		);

		$this->db->insert('produk', $data);
		redirect('mitra/produk','refresh');
	}

	public function get_kabkot()
	{
		$id = $this->input->post('id');
		$data = $this->db->get_where('kabkot', array('id_prov' => $id))->result();
		echo json_encode($data);
	}

	public function get_kec()
	{
		$id = $this->input->post('id');
		$data = $this->db->get_where('kec', array('id_kabkot' => $id))->result();
		echo json_encode($data);
	}
}

/* End of file Produk.php */
/* Location: ./application/controllers/mitra/Produk.php */
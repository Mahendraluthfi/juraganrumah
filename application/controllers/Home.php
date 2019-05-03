<?php



defined('BASEPATH') OR exit('No direct script access allowed');







class Home extends CI_Controller {



	function __construct(){

		parent::__construct();

		$this->load->model('Login_buyer');

		$this->load->model('M_buyer_produk');

        /*if ($this->session->userdata('ses_email') != true){

        	redirect('index.php/login');

        }*/

    }



	public function index()

	{
		

		$this->load->model('M_blog');

		$data['newest'] = $this->db->query("SELECT * FROM artikel ORDER BY id_artikel desc LIMIT 3")->result();

		$data['prov'] = $this->db->get('prov')->result();

		$data['produk'] = $this->M_buyer_produk->tampil_data_produk_terbaik()->result();

		$data['produk1'] = $this->M_buyer_produk->tampil_data_produk_rumah_beranda()->result();

		$data['produk2'] = $this->M_buyer_produk->tampil_data_produk_rumah_subsidi_beranda()->result();

		$data['produk3'] = $this->M_buyer_produk->tampil_data_produk_kost_beranda()->result();

		$data['produk4'] = $this->M_buyer_produk->tampil_data_produk_apartement_beranda()->result();

		$data['produk5'] = $this->M_buyer_produk->tampil_data_produk_kavling_beranda()->result();

		$data['produk6'] = $this->M_buyer_produk->tampil_data_produk_ruko_beranda()->result();

		$data['content'] = 'beranda';

		$this->load->view('home', $data);

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




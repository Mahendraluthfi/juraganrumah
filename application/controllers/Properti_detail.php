<?php



defined('BASEPATH') OR exit('No direct script access allowed');



class Properti_detail extends CI_Controller {

	function __construct(){

        parent::__construct();

        /*if ($this->session->userdata('ses_email') != true){

        	redirect('index.php/login');

		}*/

		$this->load->model('Login_buyer');

		$this->load->model('M_buyer_produk');

    }



	public function index()

	{

		if (empty(get_cookie('user_agen'))) {
			$data['agen'] = '';
		}else{
			$data['agen'] = "%26agen%3D".get_cookie('user_agen');	
			$cek = $this->db->get_where('stats_agen_posts', array('id_agen' => get_cookie('user_agen'), 'id_produk' => $this->input->get('id_produk')));
			if (empty($cek->num_rows())) {
				$this->db->insert('stats_agen_posts', array(
					'id_agen' => get_cookie('user_agen'),
					'id_produk' => $this->input->get('id_produk'),
					'count' => 1
				));
			}else{
				$get = $cek->row();
				$this->db->query("UPDATE stats_agen_posts SET count = count + 1 WHERE id = '$get->id'");
			}		
		}
		
		if (!empty($this->input->get('agen'))) {			
			$cookie=array(
			'name' => 'user_agen',
			'value' => $this->input->get('agen'),
			'expire' => 2592000,
			'domain' => '',
			'path' => '/',
			'prefix' => '',
			'secure' => FALSE
			);
			set_cookie($cookie);
		}

		$this->load->model('M_blog');
		$this->load->model('Martikel');
		$this->load->model('Login_buyer');
		$data['foto_buyer'] = $this->Login_buyer->profil_buyer()->result();
		$data['prov'] = $this->db->get('prov')->result();
		$data['newest'] = $this->db->query("SELECT * FROM artikel ORDER BY id_artikel desc LIMIT 3")->result();
		//$data['newest'] = $this->M_blog->get()->result();
		$data['newest_produk'] = $this->Martikel->get()->result();
		$data['meta_detail_foto'] = $this->M_buyer_produk->meta_produk_detail_foto()->result();
		$data['produk_detail_foto'] = $this->M_buyer_produk->tampil_data_detail_produk_foto()->result();
		$data['produk_detail'] = $this->M_buyer_produk->tampil_data_detail_produk()->result();
		$data['produk'] = $this->M_buyer_produk->tampil_data_produk()->result();
		$data['content'] = 'properti_detail';
		$this->load->view('home', $data);

	}

	public function index_penawaran_terbaik()

	{

		$this->load->model('M_blog');

		$this->load->model('Martikel');

		$this->load->model('Login_buyer');

		$data['foto_buyer'] = $this->Login_buyer->profil_buyer()->result();

		$data['prov'] = $this->db->get('prov')->result();

		$data['newest'] = $this->db->query("SELECT * FROM artikel ORDER BY id_artikel desc LIMIT 3")->result();

		//$data['newest'] = $this->M_blog->get()->result();

		$data['newest_produk'] = $this->Martikel->get()->result();

		$data['produk_detail_foto'] = $this->M_buyer_produk->tampil_data_detail_produk_foto()->result();

		$data['produk_detail'] = $this->M_buyer_produk->tampil_data_detail_produk()->result();

		$data['produk'] = $this->M_buyer_produk->tampil_data_produk_terbaik()->result();

		$data['content'] = 'properti_detail';

		$this->load->view('home', $data);

	}

}




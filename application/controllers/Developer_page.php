<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Developer_page extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('M_mitra_page_data');
        $this->load->library('pagination');
    } 

		public function index($offset=0)
	{
			$this->load->model('M_blog');
			$this->load->model('Martikel');
			$this->load->model('Login_buyer');
			$data['foto_buyer'] = $this->Login_buyer->profil_buyer()->result();
			//konfigurasi pagination
	        $config['base_url'] = base_url()."Developer_page/index"; //site url
	        $config['total_rows'] = $this->db->get_where('produk', array('id_mitra' => $this->input->get('data')))->num_rows(); //total row
	        $config['per_page'] = 3;  //show record per halaman
	        $config["uri_segment"] = 3;  // uri parameter
	        $choice = $config["total_rows"] / $config["per_page"];
	        $config["num_links"] = floor($choice);
	 
	        // Membuat Style pagination untuk BootStrap v4
	        $config['first_link']       = 'First';
	        $config['last_link']        = 'Last';
	        $config['next_link']        = 'Next';
	        $config['prev_link']        = 'Prev';
	        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	        $config['full_tag_close']   = '</ul></nav></div>';
	        $config['num_tag_open']     = '<li><span class="page-link">';
	        $config['num_tag_close']    = '</span></li>';
	        $config['cur_tag_open']     = '<li class="active"><span class="page-link">';
	        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	        $config['next_tag_open']    = '<li><span class="page-link">';
	        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	        $config['prev_tag_open']    = '<li><span class="page-link">';
	        $config['prev_tagl_close']  = '</span>Next</li>';
	        $config['first_tag_open']   = '<li><span class="page-link">';
	        $config['first_tagl_close'] = '</span></li>';
	        $config['last_tag_open']    = '<li><span class="page-link">';
	        $config['last_tagl_close']  = '</span></li>';
 
	        $this->pagination->initialize($config);
	        // $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['offset'] = $offset;
	       	$id = $this->input->get('data');
	        $data['produk'] = $this->M_mitra_page_data->produk($config["per_page"], $offset)->result();
			$data['newest'] = $this->db->query("SELECT * FROM artikel ORDER BY id_artikel desc LIMIT 3")->result();
			$data['newest_mitra'] = $this->db->query("SELECT * FROM artikel WHERE id_mitra='$id' ORDER BY id_artikel desc LIMIT 3")->result();
			//$data['newest'] = $this->M_blog->get()->result();
			$data['newest_produk'] = $this->Martikel->get()->result();
			$data['pagination'] = $this->pagination->create_links();
			$data['profil'] = $this->M_mitra_page_data->profil_mitra()->result();
			$data['profil_poi'] = $this->M_mitra_page_data->profil_mitra_poi()->result();
			$data['promo'] = $this->M_mitra_page_data->promo()->result();
			$data['harga'] = $this->M_mitra_page_data->mulai_harga()->result();
			$data['content'] = 'mitra_developer_page';
			$this->load->view('home', $data);
		}
}

?>


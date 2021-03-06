<?php



defined('BASEPATH') OR exit('No direct script access allowed');



class Properti_apartement extends CI_Controller {

	function __construct(){

        parent::__construct();

        /*if ($this->session->userdata('ses_email') != true){

        	redirect('index.php/login');

        }*/

        $this->load->library('pagination');

        $this->load->model('M_buyer_produk');

    }



	public function index($offset=0)

	{
		if (!empty(get_cookie('user_agen'))) {
			$cek = $this->db->get_where('stats_agen_category', array('id_agen' => get_cookie('user_agen')));
			if (empty($cek->num_rows())) {
				$this->db->insert('stats_agen_category', array(
					'id_agen' => get_cookie('user_agen'),
					'apartment' => 1					
				));
			}else{
				$get = $cek->row();
				$this->db->query("UPDATE stats_agen_category SET apartment = apartment + 1 WHERE id = '$get->id_agen'");
			}	
		}

		if($this->input->post('search_beranda')){

			$this->load->model('M_blog');

			$this->load->model('Martikel');

			$this->load->model('Login_buyer');

			$data['foto_buyer'] = $this->Login_buyer->profil_buyer()->result();

			//konfigurasi pagination

	        $config['base_url'] = base_url()."properti/index"; //site url

	        $config['total_rows'] = $this->db->count_all('produk'); //total row

	        $config['per_page'] = 6;  //show record per halaman

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

	       

	        $data['produk'] = $this->M_buyer_produk->tampil_data_produk_pencarian_beranda($config["per_page"], $offset)->result();;

	        $data['prov'] = $this->db->get('prov')->result();

			$data['newest'] = $this->db->query("SELECT * FROM artikel ORDER BY id_artikel desc LIMIT 3")->result();

			//$data['newest'] = $this->M_blog->get()->result();

			$data['newest_produk'] = $this->Martikel->get()->result();

			$data['produk_detail'] = $this->M_buyer_produk->tampil_data_detail_produk()->result();

			$data['pagination'] = $this->pagination->create_links();

			$data['content'] = 'properti_apartement';

			$this->load->view('home', $data);

		}else{

			$this->load->model('M_blog');

			$this->load->model('Martikel');

			$this->load->model('Login_buyer');

			$data['foto_buyer'] = $this->Login_buyer->profil_buyer()->result();

			//konfigurasi pagination

	        $config['base_url'] = base_url()."properti_apartement/index"; //site url

	        $config['total_rows'] = $this->db->count_all('produk'); //total row

	        $config['per_page'] = 6;  //show record per halaman

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

	       

	        $data['produk'] = $this->M_buyer_produk->tampil_data_produk_apartement($config["per_page"], $offset)->result();;

	        $data['prov'] = $this->db->get('prov')->result();

			$data['newest'] = $this->db->query("SELECT * FROM artikel ORDER BY id_artikel desc LIMIT 3")->result();

			//$data['newest'] = $this->M_blog->get()->result();

			$data['newest_produk'] = $this->Martikel->get()->result();

			$data['produk_detail'] = $this->M_buyer_produk->tampil_data_detail_produk()->result();

			$data['pagination'] = $this->pagination->create_links();

			$data['content'] = 'properti_apartement';

			$this->load->view('home', $data);

		}

	}

}




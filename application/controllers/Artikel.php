<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	function __construct(){
        parent::__construct();
        /*if ($this->session->userdata('ses_email') != true){

        	redirect('index.php/login');
        }*/
		$this->load->model('M_blog');
		$this->load->model('Martikel');
    }

	public function index($offset=0)
	{


		$jml = $this->db->get('artikel');
		$config['base_url'] = base_url().'artikel/index';
		$config['total_rows'] = $jml->num_rows();
		$config['per_page'] = 3;
		$config['uri_segment'] = 3;		
		$choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

		$config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';        
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
		
		$this->pagination->initialize($config);
		$data['offset'] = $offset;
		$data['halaman'] = $this->pagination->create_links();
		
		$this->db->get('artikel',$config['per_page'], $offset);
		$this->db->from('artikel');
		$this->db->order_by('id_artikel', 'desc');
		$db = $this->db->get();

		$data['get'] = $db->result();

		// $data['artikel'] = 
		$data['newest'] = $this->M_blog->get()->result();
		$data['newest_produk'] = $this->Martikel->get()->result();
		$data['content'] = 'artikel';
		$this->load->view('home', $data);

	}

	public function view($id)
	{
		$asc = $this->db->query("SELECT MIN(id_artikel) as min FROM artikel")->row();
		$desc = $this->db->query("SELECT MAX(id_artikel) as max FROM artikel")->row();
		$data['get'] = $this->db->get_where('artikel', array('id_artikel' => $id))->row();
		if ($asc->min == $id) {
			$min = "";
		}else{
			$pre = $id - 1;
			$min = "<a href='".base_url('artikel/view/').$pre."' class='btn btn-default btn-border'>  Artikel Sebelumnya</a>";
		}

		if ($desc->max == $id) {
			$max = "";
		}else{
			$next = $id + 1;
			$max = "<a href='".base_url('artikel/view/').$next."' class='btn btn-default btn-border'>  Artikel Sebelumnya</a>";
		}

		$data['next'] = $max;
		$data['previous'] = $min;
		$data['newest'] = $this->M_blog->get()->result();		
		$data['newest_produk'] = $this->Martikel->get()->result();
		$data['content'] = 'artikel_view';
		$this->load->view('home', $data);		
	}

}

?>
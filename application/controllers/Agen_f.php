<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agen extends CI_Controller {
	function __construct(){
        parent::__construct();
        /*if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
        }*/
        $this->load->model('M_buyer_produk');
    }
	public function index()
	{
		$data['produk'] = $this->M_buyer_produk->tampil_data_produk()->result();
		$data['content'] = 'agen';
		$this->load->view('home', $data);
	}
	/*public function form_register()
	{
		$data['prov'] = $this->db->get('prov')->result();
		$data['content'] = 'register_mitra';
		$this->load->view('home', $data);
	}
	public function form_register_pro()
	{
		$data['prov'] = $this->db->get('prov')->result();
		$data['content'] = 'register_mitra_pro';
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
	}*/
}

?>

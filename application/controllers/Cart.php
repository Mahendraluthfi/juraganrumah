<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('M_buyer_produk');
        $this->load->helper(array('form', 'url','cookie'));
		$this->load->library('form_validation');
    }

	public function index()
	{
		$this->load->model('M_blog');
		$this->load->model('Martikel');
		$this->load->model('Login_buyer');
		$data['foto_buyer'] = $this->Login_buyer->profil_buyer()->result();
		$data['prov'] = $this->db->get('prov')->result();
		//$data['newest'] = $this->M_blog->get()->result();
		$data['newest'] = $this->db->query("SELECT * FROM artikel ORDER BY id_artikel desc LIMIT 3")->result();
		$data['newest_produk'] = $this->Martikel->get()->result();
		$data['produk'] = $this->M_buyer_produk->tampil_data_produk_cart()->result();
		$data['content'] = 'cart';
		$this->load->view('home', $data);
	}
	public function janji_survei_view()
	{
		$this->load->model('M_blog');
		$this->load->model('Martikel');
		$this->load->model('Login_buyer');
		$data['foto_buyer'] = $this->Login_buyer->profil_buyer()->result();
		$data['prov'] = $this->db->get('prov')->result();
		//$data['newest'] = $this->M_blog->get()->result();
		$data['newest'] = $this->db->query("SELECT * FROM artikel ORDER BY id_artikel desc LIMIT 3")->result();
		$data['newest_produk'] = $this->Martikel->get()->result();
		$data['produk'] = $this->M_buyer_produk->tampil_data_produk_cart()->result();
		$data['content'] = 'janji_survei';
		$this->load->view('home', $data);
	}



	public function checkout()
	{
		if (!$this->session->userdata('ses_shop')) 
		{
			redirect('set404');
		}
        $data['produk'] = $this->M_buyer_produk->tampil_data_produk_checkout()->result();
		$this->load->view('checkout_properti', $data);
	}



	public function save_cart_detail_transaksi()
    {
		$email_buyer = $this->session->userdata('ses_email');
        if ($email_buyer)
				{
					$id_produk	= $this->input->post('id_produk');
					$id_transaksi	= $this->input->post('id_transaksi');
					$total_prize	= $this->input->post('total_prize');
					$data = array(
						'id_produk'     => $id_produk,
						'id_transaksi'    => $id_transaksi,
						'harga'        => $total_prize,
						'jml_unit'        => 1,
						'total'        => $total_prize
					);
						$this->M_buyer_produk->adding($data,'detail_transaksi');
					}
	}

	public function save_cart_transaksi()
    {
		$email_buyer = $this->session->userdata('ses_email');
        if ($email_buyer)
				{
					$id_buyer       = $this->session->userdata('ses_id');
					$id_agen        = $this->session->userdata('ses_agen');
					$id_transaksi	= $this->input->post('id_transaksi');
					$total_prize	= $this->input->post('total_prize');
					$tipe_bayar	    = $this->input->post('tipe_bayar');
					$data = array(
						'id_buyer'      => $id_buyer,
						'id_agen'    	=> $id_agen,
						'id_transaksi'  => $id_transaksi,
						'total_prize'   => $total_prize,
						'tipe_bayar'    => $tipe_bayar,
						'status'        => 'PROSES',
						'date'        	=> date('Y-m-d')
					);
						$this->M_buyer_produk->adding($data,'transaksi');
						$this->save_cart_detail_transaksi();
						$this->delete($this->session->userdata('id'));
						$this->session->set_flashdata("sukses","Anda akan segera dihubungi oleh pihak kami , untuk Tindak Lanjut Pembelian Properti dari Juragan Rumah.");
						$this->session->unset_userdata('id');
						redirect('Sukses_page');
				}
				else
				{ 
					redirect('Eror404');
				}
	}

	

	public function shopping_cart()
    {
		$email_buyer = $this->session->userdata('ses_email');
        if ($email_buyer)
				{
					$id_buyer = $this->session->userdata('ses_id');
					$id_produk	= $this->input->get('id_produk');
					$harga	= $this->input->get('harga');
					$type	= $this->input->get('data');
					$data = array(
						'id_buyer'          => $id_buyer,
						'id_produk'         => $id_produk,
						'harga'             => $harga,
						'type_pembayaran'   => $type
					);
						$this->M_buyer_produk->adding($data,'shopping_cart');
						$this->session->set_userdata('ses_shop','1');
						$this->session->set_flashdata("sukses","Silahkan Cek Keranjang Properti Anda <br> <a href=". base_url('cart')." class='btn btn-default'>Keranjang Belanja</a> ");
						redirect('Sukses_page');
					}
	}



	public function janji_survei()
    {
					$id_buyer = $this->session->userdata('ses_id');
					$id_agen = $this->session->userdata('ses_agen');
					$id_produk	= $this->input->post('id_produk');
					$tgl_survei       = $this->input->post('tgl_survei');
					$jam_survei       = $this->input->post('jam_survei');
					$data = array(
						'id_buyer'     => $id_buyer,
						'id_agen'     => $id_agen,
						'id_produk'    => $id_produk,
						'date'         => $tgl_survei,
						'time'         => $jam_survei
					);

						$this->M_buyer_produk->adding($data,'survei');
						$this->session->set_flashdata("sukses","Anda akan segera dihubungi oleh pihak kami , untuk janji survei <br>Silahkan Cek Janji Survei <br> <a href=". base_url('cart/janji_survei_view')." class='btn btn-default'>Janji Survei</a>");
						$this->session->set_userdata('janji_survei','1');
						redirect('Sukses_page');

	}


	public function delete($id)
	{
		$this->db->where('id_shop', $id);
		$this->db->delete('shopping_cart');

		redirect('cart','refresh');
	}
}

?>




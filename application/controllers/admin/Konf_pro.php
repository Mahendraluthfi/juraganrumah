<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konf_pro extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_login_official() == false)
	    {	     
	        redirect('admin/login');
	    }
	    $this->load->model('Mkonfirmasi');
	}

	public function index()
	{
		$data['row'] = $this->Mkonfirmasi->get_pro()->result();		
		$data['content'] = 'admin/konf_pro';
		$this->load->view('admin/index', $data);		
	}

	public function get_inv_mitra($id)
	{
		$data = $this->Mkonfirmasi->get_inv_mitra($id)->row();
		echo json_encode($data);
	}

	public function get_mitra($id)
	{
		$data = $this->Mkonfirmasi->get_mitra($id)->row();
		echo json_encode($data);
	}

	public function submit_tf()
	{
		$cek = $this->db->get_where('mitra_transaksi', array('id_inv' => $this->input->post('noinvoice')))->row();
		$get_mitra = $this->db->get_where('mitra', array('id_mitra' => $cek->id_mitra))->row();
		$data = array(
			'id_mitra' => $cek->id_mitra,
			'date' => date('Y-m-d'),
			'nominal' => $this->input->post('kode'),
			'type' => 'IN',
			'deskripsi' => 'Cashback pembayaran Mitra Developer Pro JuraganRumah',
			'status' => '1'

		);
		$this->db->insert('jurnal_mitra', $data);

		$decode_saldo = base64_decode($get_mitra->saldo);
		$sub = $decode_saldo + $this->input->post('kode');
		$encode_saldo = base64_encode($sub);		

		$expired = date('Y-m-d', strtotime('+1 years'));		

		$this->db->where('id_mitra', $cek->id_mitra);
		$this->db->update('mitra', array(
			'status_akun' => 'PRO', 
			'cek_bayar' => '1', 
			'expired_premium' => $expired, 
			'saldo' => $encode_saldo
		));

		$this->db->where('id_inv', $this->input->post('noinvoice'));
		$this->db->update('mitra_transaksi', array('status' => 'BERHASIL'));

		$this->session->set_flashdata('error', '
	            	$(document).ready(function(){
	            		toastr.succes("Mitra telah menjadi Mitra Pro", "Berhasil");
	            		});
	            	');
        redirect('admin/konf_pro','refresh');
	}

}

/* End of file Konf_pro.php */
/* Location: ./application/controllers/admin/Konf_pro.php */
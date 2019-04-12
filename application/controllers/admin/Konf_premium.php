<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konf_premium extends CI_Controller {

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
		$data['row'] = $this->Mkonfirmasi->get_premium()->result();
		$data['content'] = 'admin/konf_premium';
		$this->load->view('admin/index', $data);		
	}

	public function get_inv($id)
	{
		$data = $this->Mkonfirmasi->get_inv($id)->row();
		echo json_encode($data);
	}

	public function get_agen($id)
	{
		$data = $this->Mkonfirmasi->get_agen($id)->row();
		echo json_encode($data);
	}

	public function submit_tf()
	{
		$cek = $this->db->get_where('agen_premium', array('id_invoice' => $this->input->post('noinvoice')))->row();
		$get_agen = $this->db->get_where('agen', array('id_agen' => $cek->id_agen))->row();
		$data = array(
			'id_agen' => $cek->id_agen,
			'date' => date('Y-m-d'),
			'nominal' => $this->input->post('kode'),
			'type' => 'IN',
			'deskripsi' => 'Cashback pembayaran agen premium JuraganRumah',
			'status' => '1'

		);
		$this->db->insert('jurnal_komisi', $data);

		$decode_balance = base64_decode($get_agen->balance);
		$sub = $decode_balance + $this->input->post('kode');
		$encode_balance = base64_encode($sub);

		$this->db->where('id_agen', $cek->id_agen);
		$this->db->update('agen', array('balance' => $encode_balance));

		$this->db->where('id_invoice', $this->input->post('noinvoice'));
		$this->db->update('agen_premium', array('status' => 'AKTIF'));

		 $this->session->set_flashdata('error', '
	            	$(document).ready(function(){
	            		toastr.succes("Agen telah menjadi Agen Premium", "Berhasil");
	            		});
	            	');
        redirect('admin/konf_premium','refresh');
	}

	
}

/* End of file Konf_premium.php */
/* Location: ./application/controllers/admin/Konf_premium.php */
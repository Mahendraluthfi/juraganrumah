<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_login_official() == false)
	    {	     
	        redirect('admin/login');
	    }
	    $this->load->model('Mpenjualan');
	}

	public function index()
	{
		$data['get_data'] = $this->Mpenjualan->get()->result();
		$data['content'] = 'admin/penjualan';
		$this->load->view('admin/index', $data);
	}

	public function closing()
	{
		$id = $this->input->post('id_transaksi');

		$row_transaksi = $this->db->get_where('transaksi', array('id_transaksi' => $id))->row();

		foreach ($this->db->get_where('detail_transaksi', array('id_transaksi' => $id))->result() as $main) {
			$get_persen = $this->Mpenjualan->get_persen($main->id_produk)->row();
			$komisi_agen = (($get_persen->komisi / 100) * $get_persen->total) * 0.6;

			//for agen
			$get_agen = $this->db->get_where('agen', array('id_agen' => $row_transaksi->id_agen))->row();
			$data = array(
				'id_agen' => $row_transaksi->id_agen,
				'date' => date('Y-m-d'),
				'nominal' => $komisi_agen,
				'type' => 'IN',
				'deskripsi' => 'Komisi penjualan Property '.$get_persen->nama_produk,
				'status' => '1'
			);
			$this->db->insert('jurnal_komisi', $data);

			$decode_balance = base64_decode($get_agen->balance);
			$sub = $decode_balance + $komisi_agen;
			$encode_balance = base64_encode($sub);

			$this->db->where('id_agen', $row_transaksi->id_agen);
			$this->db->update('agen', array('balance' => $encode_balance));
			//
			//for mitra
			$komisi_mitra = $get_persen->total - (($get_persen->komisi / 100) * $get_persen->total);
			$get_mitra = $this->db->get_where('mitra', array('id_mitra' => $row_transaksi->id_mitra))->row();			
			$data2 = array(
			'id_mitra' => $get_persen->id_mitra,
			'date' => date('Y-m-d'),
			'nominal' => $komisi_mitra,
			'type' => 'IN',
			'deskripsi' => 'Penjualan Property '.$get_persen->nama_produk,
			'status' => '1'

			);
			$this->db->insert('jurnal_mitra', $data2);

			$decode_saldo2 = base64_decode($get_mitra->saldo);
			$sub2 = $decode_saldo2 + $komisi_mitra;
			$encode_saldo2 = base64_encode($sub2);	

			$this->db->where('id_mitra', $get_persen->id_mitra);
			$this->db->update('mitra', array('saldo' => $encode_saldo2));
			//
			$this->db->query("UPDATE produk SET unit = unit - '$main->jml_unit' WHERE id_produk = '$main->id_produk'");
		}

		$this->session->set_flashdata('error', '
	            	$(document).ready(function(){
	            		toastr.succes("Transaksi telah berhasil divalidasi", "Berhasil");
	            		});
	            	');
		$this->db->where('id_transaksi', $id);
		$this->db->update('transaksi', array('status' => 'CLOSING'));
		redirect('admin/penjualan','refresh');;

	}

	public function post_deal()
	{
		$id_detail = $this->input->post('id_detail');
		$deal = $this->input->post('deal');
		$detail = $this->db->get_where('detail_transaksi', array('id_detail_transaksi' => $id_detail))->row();
		$transaksi = $this->db->get_where('transaksi', array('id_transaksi' => $detail->id_transaksi))->row();

		$min = $this->db->query("UPDATE transaksi SET total_prize = total_prize - '$detail->total' WHERE id_transaksi = '$transaksi->id_transaksi'");
		$min = $this->db->query("UPDATE transaksi SET total_prize = total_prize + '$deal' WHERE id_transaksi = '$transaksi->id_transaksi'");

		$this->db->where('id_detail_transaksi', $id_detail);
		$this->db->update('detail_transaksi', array('total' => $deal));

		$this->session->set_flashdata('error', '
	            	$(document).ready(function(){
	            		toastr.succes("Harga Deal berhasil diedit", "Berhasil");
	            		});
	            	');

		redirect('admin/penjualan','refresh');
	}

	public function get_transaksi($id)
	{
		$data = $this->Mpenjualan->get_transaksi($id)->result();
		echo json_encode($data);
	}

	public function get_detail($id)
	{
		$data = $this->Mpenjualan->get_detail($id)->row();
		echo json_encode($data);	
	}

	public function get_produkdetail($id)
	{
		$data = $this->Mpenjualan->get_produkdetail($id)->row();
		echo json_encode($data);
	}

	public function get_hargadeal($id)
	{
		$data = $this->Mpenjualan->get_hargadeal($id)->row();
		echo json_encode($data);
	}

	public function get_komisi($id)
	{
		$transaksi = $this->db->get_where('transaksi', array('id_transaksi' => $id))->row();
		$get = $this->db->get_where('detail_transaksi', array('id_transaksi' => $id))->row();
		$get_produk = $this->db->get_where('produk', array('id_produk' => $get->id_produk))->row();
		$get_mitra = $this->db->get_where('mitra', array('id_mitra' => $get_produk->id_mitra))->row();
		$komisi_agen = (($get_mitra->komisi / 100) * $transaksi->total_prize) * 0.6;
		$komisi_manajemen = (($get_mitra->komisi / 100) * $transaksi->total_prize) * 0.25;
		$komisi_promosi = (($get_mitra->komisi / 100) * $transaksi->total_prize) * 0.15;

		$data = array(
			'komisi_agen' => $komisi_agen,
			'komisi_manajemen' => $komisi_manajemen,
			'komisi_promosi' => $komisi_promosi
		);

		echo json_encode($data);
	}
}

/* End of file Penjualan.php */
/* Location: ./application/controllers/admin/Penjualan.php */
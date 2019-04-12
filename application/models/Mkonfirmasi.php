<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkonfirmasi extends CI_Model {

	public function get_premium()
		{
			$this->db->from('agen_premium');
			$this->db->join('agen', 'agen.id_agen = agen_premium.id_agen');
			$db = $this->db->get();
			return $db;
		}	

	public function get_inv($id)
	{
		$this->db->from('agen_premium');
		$this->db->join('agen', 'agen.id_agen = agen_premium.id_agen');
		$this->db->where('id_invoice', $id);
		$db = $this->db->get();
		return $db;
	}

	public function get_inv_mitra($id)
	{
		$this->db->from('mitra_transaksi');
		$this->db->join('mitra', 'mitra.id_mitra = mitra_transaksi.id_mitra');
		$this->db->where('id_inv', $id);
		$db = $this->db->get();
		return $db;
	}

	public function get_agen($id)
	{
		$this->db->from('agen_premium');
		$this->db->join('bukti_premium', 'bukti_premium.id_invoice = agen_premium.id_invoice');
		$this->db->join('agen', 'agen.id_agen = agen_premium.id_agen');
		$this->db->where('agen_premium.id_invoice', $id);
		$db = $this->db->get();
		return $db;
	}

	public function get_mitra($id)
	{
		$this->db->from('mitra_transaksi');
		$this->db->join('bukti_premium', 'bukti_premium.id_invoice = mitra_transaksi.id_inv');
		$this->db->join('mitra', 'mitra.id_mitra = mitra_transaksi.id_mitra');
		$this->db->where('mitra_transaksi.id_inv', $id);
		$db = $this->db->get();
		return $db;
	}

	public function get_pro()
	{
		$this->db->select('*, mitra_transaksi.status as sts');
		$this->db->from('mitra_transaksi');
		$this->db->join('mitra', 'mitra.id_mitra = mitra_transaksi.id_mitra');
		$db = $this->db->get();
		return $db;
	}
}

/* End of file Mkonfirmasi.php */
/* Location: ./application/models/Mkonfirmasi.php */
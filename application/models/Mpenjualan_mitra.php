<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpenjualan_mitra extends CI_Model {

	public function get_all($id)
		{
			$this->db->select('*, transaksi.status as sts');
			$this->db->from('transaksi');
			$this->db->join('detail_transaksi', 'detail_transaksi.id_transaksi = transaksi.id_transaksi');
			$this->db->join('produk', 'produk.id_produk = detail_transaksi.id_produk');
			$this->db->where('produk.id_mitra', $id);
			$this->db->group_by('transaksi.id_transaksi');
			$db = $this->db->get();
			return $db;
		}	

}

/* End of file Mpenjualan_mitra.php */
/* Location: ./application/models/Mpenjualan_mitra.php */
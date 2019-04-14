<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpenjualan extends CI_Model {

	public function get()
	{
		$this->db->select('transaksi.*, detail_transaksi.*, buyer.nama_buyer, produk.nama_produk, mitra.nama_perusahaan');
		$this->db->from('transaksi');		
		$this->db->join('buyer', 'transaksi.id_buyer = buyer.id_buyer');
		$this->db->join('detail_transaksi', 'transaksi.id_transaksi = detail_transaksi.id_transaksi');
		$this->db->join('produk', 'produk.id_produk = detail_transaksi.id_produk');
		$this->db->join('mitra', 'produk.id_mitra = mitra.id_mitra', 'left');
		$db = $this->db->get();
		return $db;
	}	

	public function get_transaksi($id)
	{
		$this->db->select('*, detail_transaksi.harga as hrg');		
		$this->db->from('detail_transaksi');
		$this->db->join('transaksi', 'transaksi.id_transaksi = detail_transaksi.id_transaksi');
		$this->db->join('produk', 'produk.id_produk = detail_transaksi.id_produk');
		$this->db->join('mitra', 'produk.id_mitra = mitra.id_mitra', 'left');
		$this->db->where('detail_transaksi.id_transaksi', $id);
		$db = $this->db->get();
		return $db;
	}

	public function get_detail($id)
	{
		$this->db->select('*, transaksi.status as sts');
		$this->db->from('transaksi');
		$this->db->join('buyer', 'transaksi.id_buyer = buyer.id_buyer');
		$this->db->where('transaksi.id_transaksi', $id);
		$db = $this->db->get();
		return $db;
	}

	public function get_produkdetail($id)
	{
		
		$this->db->from('produk');
		$this->db->join('category_produk', 'category_produk.id_category_produk = produk.id_category_produk');
		$this->db->join('prov', 'prov.id_prov = produk.provinsi');
		$this->db->join('kabkot', 'kabkot.id_kabkot = produk.kabupaten');
		$this->db->join('kec', 'kec.id_kec = produk.kecamatan');
		$this->db->join('project', 'project.id_project = produk.id_project', 'left');			
		$this->db->where('produk.id_produk', $id);
		$db = $this->db->get();
		return $db;
	}

	public function get_hargadeal($id)
	{
		$this->db->from('detail_transaksi');
		$this->db->join('produk', 'produk.id_produk = detail_transaksi.id_produk');
		$this->db->where('id_detail_transaksi', $id);
		$db = $this->db->get();
		return $db;
	}

}

/* End of file Mpenjualan.php */
/* Location: ./application/models/Mpenjualan.php */
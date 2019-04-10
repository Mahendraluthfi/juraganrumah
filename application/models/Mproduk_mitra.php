<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mproduk_mitra extends CI_Model {

	public function get_all()
		{
			$this->db->select('*');
			$this->db->from('produk');
			$this->db->join('category_produk', 'category_produk.id_category_produk = produk.id_category_produk');
			$this->db->where('id_mitra', $this->session->userdata('id_mitra'));
			$db = $this->db->get();
			return $db;
		}	

		public function get_foto($id)
		{
			$this->db->select('*');
			$this->db->from('foto_produk');
			$this->db->join('produk', 'produk.id_produk = foto_produk.id_produk');
			$this->db->where('foto_produk.id_produk', $id);
			$db = $this->db->get();
			return $db;
		}

		public function get_id($id)
		{
			$this->db->select('*');
			$this->db->from('produk');
			$this->db->join('category_produk', 'category_produk.id_category_produk = produk.id_category_produk');
			$this->db->join('prov', 'prov.id_prov = produk.provinsi');
			$this->db->join('kabkot', 'kabkot.id_kabkot = produk.kabupaten');
			$this->db->join('kec', 'kec.id_kec = produk.kecamatan');
			$this->db->where('produk.id_produk', $id);
			$db = $this->db->get();
			return $db;
		}

}

/* End of file Mproduk_mitra.php */
/* Location: ./application/models/Mproduk_mitra.php */
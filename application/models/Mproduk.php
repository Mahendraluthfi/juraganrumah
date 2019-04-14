<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mproduk extends CI_Model {

	public function get_all()
		{			
			$this->db->select('*');
			$this->db->from('produk');
			$this->db->join('category_produk', 'category_produk.id_category_produk = produk.id_category_produk');			
			$this->db->where('id_mitra', 0);
			$this->db->where('id_project', 0);			
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

/* End of file Mproduk.php */
/* Location: ./application/models/Mproduk.php */
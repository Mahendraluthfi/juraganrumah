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

	public function agen_list($limit,$offset)
	{
		$this->db->select('produk.*, mitra.nama_perusahaan, foto_produk.file, 
			CASE
				WHEN produk.id_mitra = 0 AND produk.harga_promo = 0 then (produk.harga * 0.025) * 0.6
				WHEN produk.id_mitra = 0 AND produk.harga_promo > 0 then (produk.harga_promo * 0.025) * 0.6				
			    WHEN produk.id_mitra > 0 AND produk.harga_promo = 0 then ((mitra.komisi * produk.harga) / 100) * 0.6
			    WHEN produk.id_mitra > 0 AND produk.harga_promo > 0 then ((mitra.komisi * produk.harga_promo) / 100) * 0.6
			    END AS komisi
			');
		$this->db->from('produk');
		$this->db->join('mitra', 'mitra.id_mitra = produk.id_mitra', 'left');
		$this->db->join('foto_produk', 'foto_produk.id_produk = produk.id_produk');
		$this->db->group_by('produk.id_produk');
		$this->db->order_by('produk.id_produk', 'desc');
		$this->db->limit($limit, $offset);
		$db = $this->db->get();
		return $db;
	}
}

/* End of file Mproduk.php */
/* Location: ./application/models/Mproduk.php */
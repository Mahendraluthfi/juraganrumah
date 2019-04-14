<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msurvei_admin extends CI_Model {

	public function get()
		{
			$this->db->from('survei');
			$this->db->join('buyer', 'buyer.id_buyer = survei.id_buyer');
			$this->db->join('produk', 'produk.id_produk = survei.id_produk');
			$db = $this->db->get();
			return $db;
		}	

	public function get_survei($id)
	{
		$this->db->from('survei');
			$this->db->join('buyer', 'buyer.id_buyer = survei.id_buyer');
			$this->db->join('produk', 'produk.id_produk = survei.id_produk');
			$this->db->join('prov', 'produk.provinsi = prov.id_prov');
			$this->db->join('kabkot', 'produk.kabupaten = kabkot.id_kabkot');
			$this->db->join('kec', 'produk.kecamatan = kec.id_kec');
			$this->db->where('survei.id_survei', $id);
			$db = $this->db->get();
			return $db;
	}
}

/* End of file Msurvei_admin.php */
/* Location: ./application/models/Msurvei_admin.php */
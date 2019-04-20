<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Martikel extends CI_Model {

	public function get()
		{
			$this->db->from('produk');
			$this->db->join('foto_produk', 'foto_produk.id_produk = produk.id_produk');
			$this->db->group_by('produk.id_produk');
			$this->db->order_by('produk.id_produk', 'desc');
			$this->db->limit(4);
			$db = $this->db->get();
			return $db;
		}	

	public function get_list_admin()
	{
		$this->db->from('artikel');
		$this->db->join('mitra', 'mitra.id_mitra = artikel.id_mitra', 'left');
		$this->db->order_by('id_artikel', 'desc');
		$db = $this->db->get();
		return $db;
	}

	public function get_list_mitra($id)
	{
		$this->db->from('artikel');
		$this->db->join('mitra', 'mitra.id_mitra = artikel.id_mitra', 'left');
		$this->db->where('artikel.id_mitra', $id);
		$this->db->order_by('id_artikel', 'desc');
		$db = $this->db->get();
		return $db;
	}
}

/* End of file Martikel.php */
/* Location: ./application/models/Martikel.php */
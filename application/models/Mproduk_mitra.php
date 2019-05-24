<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mproduk_mitra extends CI_Model {

	public function get_all()
		{
			$this->db->select('*');
			$this->db->from('produk');
			$this->db->join('category_produk', 'category_produk.id_category_produk = produk.id_category_produk');
			$this->db->join('project', 'project.id_project = produk.id_project');
			$this->db->where('produk.id_mitra', $this->session->userdata('id_mitra'));
			$db = $this->db->get();
			return $db;
		}	

	public function get_all_owner()
		{
			$this->db->select('*');
			$this->db->from('produk');
			$this->db->join('category_produk', 'category_produk.id_category_produk = produk.id_category_produk');
			// $this->db->join('project', 'project.id_project = produk.id_project');
			$this->db->where('produk.id_freelance', $this->session->userdata('id_freelance'));
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
			$this->db->join('project', 'project.id_project = produk.id_project');			
			$this->db->where('produk.id_produk', $id);
			$db = $this->db->get();
			return $db;
		}

		public function get_id_owner($id)
		{
			$this->db->select('*');
			$this->db->from('produk');
			$this->db->join('category_produk', 'category_produk.id_category_produk = produk.id_category_produk');
			$this->db->join('prov', 'prov.id_prov = produk.provinsi');
			$this->db->join('kabkot', 'kabkot.id_kabkot = produk.kabupaten');
			$this->db->join('kec', 'kec.id_kec = produk.kecamatan');
			// $this->db->join('project', 'project.id_project = produk.id_project');			
			$this->db->where('produk.id_produk', $id);
			$db = $this->db->get();
			return $db;
		}

		public function get_project($id)
		{
			$this->db->select('*');
			$this->db->from('project');
			$this->db->join('prov', 'prov.id_prov = project.prov');
			$this->db->join('kabkot', 'kabkot.id_kabkot = project.kabkot');
			$this->db->join('kec', 'kec.id_kec = project.kec');
			$this->db->where('id_project', $id);
			$db = $this->db->get();
			return $db;
		}	

		public function get_transaksi($id)
		{
			$this->db->select('*');
			$this->db->from('mitra_transaksi');
			$this->db->join('mitra', 'mitra.id_mitra = mitra_transaksi.id_mitra');
			$this->db->where('mitra_transaksi.id_inv', $id);
			$db = $this->db->get();
			return $db;
		}

		public function cek_proses($id)
		{
			$this->db->from('mitra_transaksi');
			$this->db->where('id_mitra', $id);
			$this->db->where('status !=', "BERHASIL");
			$db = $this->db->get();
			return $db;
		}
}

/* End of file Mproduk_mitra.php */
/* Location: ./application/models/Mproduk_mitra.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mitra_page_data extends CI_Model {

	public function produk($limit, $start, $id_mitra)
		{
		
			$this->db->select('*');
            $this->db->join('produk', 'produk.id_mitra = mitra.id_mitra');
            $this->db->join('project', 'project.id_mitra = mitra.id_mitra');
            $this->db->join('foto_produk', 'foto_produk.id_produk = produk.id_produk');
			$this->db->group_by('produk.id_produk');
			$this->db->where('produk.id_mitra', $id_mitra);
			$this->db->order_by('produk.id','DESC');
			$db = $this->db->get('mitra', $limit, $start);
			return $db;
		}	

		public function mulai_harga($id_mitra)
		{
			// $id_mitra = $this->input->get('data');
			$this->db->select('*');
			$this->db->from('produk');
			$this->db->group_by('produk.id_mitra');
			$this->db->where('produk.id_mitra', $id_mitra);
			$this->db->order_by('produk.harga','ASC');
			$db = $this->db->get();
			return $db;
		}	

		public function profil_mitra($id_mitra)
		{
			// $id_mitra = $this->input->get('data');
			$this->db->select('*');
			$this->db->from('mitra');
			$this->db->group_by('mitra.id_mitra');
			$this->db->where('mitra.id_mitra', $id_mitra);
			$db = $this->db->get();
			return $db;
		}	
		public function profil_mitra_poi($id_mitra)
		{
			// $id_mitra = $this->input->get('data');
			$this->db->select('*');
			$this->db->from('mitra');
            $this->db->join('produk', 'produk.id_mitra = mitra.id_mitra');
            $this->db->join('project', 'project.id_mitra = mitra.id_mitra');
            $this->db->join('project_poi', 'project_poi.id_project = project.id_project');
			$this->db->group_by('produk.id_produk');
			$this->db->where('mitra.id_mitra', $id_mitra);
			$this->db->order_by('produk.id','DESC');
			$db = $this->db->get();
			return $db;
		}
		public function promo($id_mitra)
		{
			// $id_mitra = $this->input->get('data');
			$this->db->select('*');
			$this->db->from('mitra');
            $this->db->join('promosi_mitra', 'promosi_mitra.id_mitra = mitra.id_mitra');
			$this->db->where('promosi_mitra.id_mitra', $id_mitra);
			$this->db->order_by('promosi_mitra.id','DESC');
			$db = $this->db->get();
			return $db;
		}	

}
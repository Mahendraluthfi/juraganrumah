<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mprofilagen extends CI_Model {

	public function show($id)
		{
			$this->db->select('*');
			$this->db->from('agen');
			$this->db->join('prov', 'prov.id_prov = agen.provinsi','left');
			$this->db->where('id_agen', $id);
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
	
}

/* End of file Mprofilagen.php */
/* Location: ./application/models/Mprofilagen.php */
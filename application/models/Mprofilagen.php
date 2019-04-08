<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mprofilagen extends CI_Model {

	public function show($id)
		{
			$this->db->select('*');
			$this->db->from('agen');
			$this->db->join('prov', 'prov.id_prov = agen.provinsi');
			$this->db->where('id_agen', $id);
			$db = $this->db->get();
			return $db;
		}	

}

/* End of file Mprofilagen.php */
/* Location: ./application/models/Mprofilagen.php */
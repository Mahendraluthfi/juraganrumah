<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_blog extends CI_Model {

	public function get()
		{
			$this->db->from('blog');
			$this->db->order_by('blog.id_blog', 'desc');
			$this->db->limit(3);
			$db = $this->db->get();
			return $db;
		}	

}

/* End of file Martikel.php */
/* Location: ./application/models/Martikel.php */
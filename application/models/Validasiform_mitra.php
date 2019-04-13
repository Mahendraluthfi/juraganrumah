<?php
    class Validasiform_mitra extends CI_Model{

		 public function email($email)
		 {
		  $query = $this->db->get_where('mitra', array('email' => $email));
		  if($query->num_rows()>0){
		   return true;
		  }
		  else {
		   return false;
		  }
		 }
		
    }
?>
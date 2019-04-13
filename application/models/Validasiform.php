<?php
    class Validasiform extends CI_Model{

		 public function email($email)
		 {
		  $query = $this->db->get_where('buyer', array('email_buyer' => $email));
		  if($query->num_rows()>0){
		   return true;
		  }
		  else {
		   return false;
		  }
		 }
		
    }
?>
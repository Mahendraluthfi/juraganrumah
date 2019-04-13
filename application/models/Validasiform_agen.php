<?php
    class Validasiform_agen extends CI_Model{

		 public function email($email)
		 {
		  $query = $this->db->get_where('agen', array('email' => $email));
		  if($query->num_rows()>0){
		   return true;
		  }
		  else {
		   return false;
		  }
		 }
		  public function username($username)
		 {
		  $query = $this->db->get_where('agen', array('username' => $username));
		  if($query->num_rows()>0){
		   return true;
		  }
		  else {
		   return false;
		  }
		 }
		
    }
?>
<?php



class Login_buyer extends CI_Model{

    //cek email dan password admin

	function auth_cek($email,$password){

        $query = $this->db->get_where('buyer', array('email_buyer' => $email, 'password' => $password));

        return $query;

    }

    function auth_buyer($email,$password){

        $query = $this->db->get_where('buyer', array( 'email_buyer' => $email, 'password' => $password));

        return $query;

    }
    function profil_buyer(){
    	$buyer =  $this->session->userdata('ses_id');
    	$this->db->select('*');
        $this->db->from('buyer');
		$this->db->where('buyer.id_buyer ', $buyer);
		$db = $this->db->get();
		return $db;
    }

}



?>
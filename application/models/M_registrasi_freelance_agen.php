



<?php

class M_registrasi_freelance_agen extends CI_Model{

  function adding($data,$table)

  {

    $this->db->insert($table,$data);

  }

  public function freelance_agen()

  {

    $limit = 1; 

    $this->db->select('*');

    $this->db->from('freelance_agen');

    $this->db->where('email',$this->session->userdata('ses_email'));

    $this->db->limit($limit);

    $db = $this->db->get();

    return $db;

   }

}



?>
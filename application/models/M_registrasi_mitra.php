
<?php

class M_registrasi_mitra extends CI_Model{
  function adding($data,$table)
  {
    $this->db->insert($table,$data);
  }
  public function mitra()
  {
    $limit = 1;
    $this->db->select('*');
    $this->db->from('mitra');
    $this->db->order_by('id_mitra','desc');
    $this->db->limit($limit);
    $db = $this->db->get();
    return $db;
   }
}

?>
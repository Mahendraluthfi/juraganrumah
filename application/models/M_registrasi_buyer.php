
<?php

class M_registrasi_buyer extends CI_Model{
  function adding($data,$table)
  {
    $this->db->insert($table,$data);
  }
}

?>
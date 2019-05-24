<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stats extends CI_Controller {

	public function index()
	{
		
	}

	public function tel_mitra($id)
	{
		$cek_stats = $this->db->get_where('stats_landingpage_telepon', array('id_mitra' => $id))->num_rows();

        if($cek_stats > 0){
        	$this->db->query("UPDATE stats_landingpage_telepon SET count = count + 1 WHERE id_mitra = '".$id."'");
        }else{
        	$this->db->insert('stats_landingpage_telepon', array('id_mitra' => $id, 'count' => 1));
        }

        echo json_encode(array('STATUS' => TRUE));
	}

	public function sms_mitra($id)
	{
		$cek_stats = $this->db->get_where('stats_landingpage_sms', array('id_mitra' => $id))->num_rows();

        if($cek_stats > 0){
        	$this->db->query("UPDATE stats_landingpage_sms SET count = count + 1 WHERE id_mitra = '".$id."'");
        }else{
        	$this->db->insert('stats_landingpage_sms', array('id_mitra' => $id, 'count' => 1));
        }

        echo json_encode(array('STATUS' => TRUE));
	}

	public function wa_mitra($id)
	{
		$cek_stats = $this->db->get_where('stats_landingpage_wa', array('id_mitra' => $id))->num_rows();

        if($cek_stats > 0){
        	$this->db->query("UPDATE stats_landingpage_wa SET count = count + 1 WHERE id_mitra = '".$id."'");
        }else{
        	$this->db->insert('stats_landingpage_wa', array('id_mitra' => $id, 'count' => 1));
        }

        echo json_encode(array('STATUS' => TRUE));
	}

     public function tel_agen($id)
     {     
        $cek = $this->db->get_where('stats_agen_telepon', array('id_agen' => get_cookie('user_agen')))->num_rows();     
        if(!empty($cek)){
          $this->db->query("UPDATE stats_agen_telepon SET count = count + 1 WHERE id_agen = '".get_cookie('user_agen')."'");
        }else{
          $this->db->insert('stats_agen_telepon', array('id_agen' => get_cookie('user_agen'), 'count' => 1));
        }
        $this->db->query("UPDATE stats_agen_posts SET telepon = telepon + 1 WHERE id_produk='$id' AND id_agen = '".get_cookie('user_agen')."'");
        echo json_encode(array('STATUS' => TRUE));
     }

     public function sms_agen($id)
     {       
        $cek = $this->db->get_where('stats_agen_sms', array('id_agen' => get_cookie('user_agen')))->num_rows();                  
        if(!empty($cek)){
          $this->db->query("UPDATE stats_agen_sms SET count = count + 1 WHERE id_agen = '".get_cookie('user_agen')."'");
        }else{
          $this->db->insert('stats_agen_sms', array('id_agen' => get_cookie('user_agen'), 'count' => 1));
        }
        $this->db->query("UPDATE stats_agen_posts SET sms = sms + 1 WHERE id_produk='$id' AND id_agen = '".get_cookie('user_agen')."'");          
        echo json_encode(array('STATUS' => TRUE));
     }

     public function wa_agen($id)
     {          
        $cek = $this->db->get_where('stats_agen_wa', array('id_agen' => get_cookie('user_agen')))->num_rows();             
        if(!empty($cek)){
          $this->db->query("UPDATE stats_agen_wa SET count = count + 1 WHERE id_agen = '".get_cookie('user_agen')."'");
        }else{
          $this->db->insert('stats_agen_wa', array('id_agen' => get_cookie('user_agen'), 'count' => 1));
        }
        $this->db->query("UPDATE stats_agen_posts SET wa = wa + 1 WHERE id_produk='$id' AND id_agen = '".get_cookie('user_agen')."'");          
        echo json_encode(array('STATUS' => TRUE));
     }

}

/* End of file Stats.php */
/* Location: ./application/controllers/Stats.php */
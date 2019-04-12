<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth
{
	var $ci = NULL;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	function is_login_agen(){
      if($this->ci->session->userdata('id_agen') == '' && $this->ci->session->userdata('username_agen') == ''){
         return false;
      }
      return true;
   }

   function is_login_mitra(){
      if($this->ci->session->userdata('id_mitra') == '' && $this->ci->session->userdata('email_mitra') == ''){
         return false;
      }
      return true;
   }

    function is_login_official(){
      if($this->ci->session->userdata('id_user') == '' && $this->ci->session->userdata('username') == '' && $this->ci->session->userdata('level') == ''){
         return false;
      }
      return true;
   }
   
   function restrict(){
      if($this->is_login_agen() == false){
         redirect(base_url());
      }
   }
   
  

}

/* End of file Auth.php */
/* Location: ./application/libraries/Auth.php */

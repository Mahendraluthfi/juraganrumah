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
   
   function restrict(){
      if($this->is_login_agen() == false){
         redirect(base_url());
      }
   }
   
  

}

/* End of file Auth.php */
/* Location: ./application/libraries/Auth.php */
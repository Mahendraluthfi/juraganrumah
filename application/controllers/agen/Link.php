<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Link extends CI_Controller {

	public function index()
	{
		
	}

	public function get($id='')
	{
		$cookie=array(
		'name' => 'user_agen',
		'value' => $id,
		'expire' => 2592000,
		'domain' => '',
		'path' => '/',
		'prefix' => '',
		'secure' => FALSE
		);
		set_cookie($cookie);
		redirect(base_url(),'refresh');
	}

}

/* End of file Link.php */
/* Location: ./application/controllers/agen/Link.php */
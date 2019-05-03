<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Phpmailer_lib
{
	protected $ci;


	public function __construct()
	{
        $this->ci =& get_instance();
        log_message('Debug', 'PHPMailer class is loaded.');
	}

	public function load()
	{
		require_once APPPATH.'third_party/PHPMailer/Exception.php';
        require_once APPPATH.'third_party/PHPMailer/PHPMailer.php';
        require_once APPPATH.'third_party/PHPMailer/SMTP.php';
        
        $mail = new PHPMailer;
        return $mail;
	}

	

}

/* End of file Phpmailer_lib.php */
/* Location: ./application/libraries/Phpmailer_lib.php */

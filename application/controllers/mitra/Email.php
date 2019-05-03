<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
	}

	public function index()
	{
		 
        $this->load->library('phpmailer_lib');
        $mail = $this->phpmailer_lib->load();
        
        $mail->isSMTP();
        $mail->Host     	= 'srv44.niagahoster.com';
        $mail->SMTPAuth 	= true;
        $mail->Username 	= 'it@juraganrumah.net';
        $mail->Password 	= 'p455w0rd';
       	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587; 
        
        $mail->setFrom('it@juraganrumah.net', 'juraganrumah');
        
        $mail->addAddress('201253077@std.umk.ac.id');
                
        $mail->Subject = 'Send Email via SMTP using PHPMailer in CodeIgniter';
               
        $mail->isHTML(true);
                
        $mailContent = "<h1>Send HTML Email using SMTP in CodeIgniter</h1>
            <p>This is a test email sending using SMTP mail server with PHPMailer.</p>";
        $mail->Body = $mailContent;
        
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Message has been sent';
        }
	}

}

/* End of file Email.php */
/* Location: ./application/controllers/mitra/Email.php */
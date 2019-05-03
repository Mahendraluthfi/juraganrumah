<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgotpassword extends CI_Controller {

	public function index()
	{
		$this->load->view('mitra/forgot');			
	}

	public function acak($long)
	{
		$char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$string = '';
		for ($i=0; $i < $long; $i++) { 			
			$pos = rand(0, strlen($char)-1);
			$string .= $char{$pos};
		}
		return $string;
	}

	public function submit()
	{
		$email = $this->input->post('email');        
        if (empty($this->db->get_where('mitra', array('email' => $email))->num_rows())) {
            $this->session->set_flashdata('msg','
                <span class="login100-form-title p-b-20">
                        Email anda tidak ditemukan !
                    </span>');       
            redirect('mitra/forgotpassword');
        }else{                  
	        
	        $token = md5($this->acak(10));

	        $this->db->where('email', $email);
	        $this->db->update('mitra', array('token' => $token));

	        $data['token'] = $token;
	        $message = $this->load->view('mitra/reset', $data, true);	        
	        
            $this->load->library('phpmailer_lib');
            $mail = $this->phpmailer_lib->load();
            
            $mail->isSMTP();
            $mail->Host         = 'smtp.gmail.com';
            $mail->SMTPAuth     = true;
            $mail->Username     = 'help.juraganrumah@gmail.com';
            $mail->Password     = 'ilodamnoke26';
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587; 
            
            $mail->setFrom('help.juraganrumah@gmail.com', 'Juragan Rumah');
            
            $mail->addAddress($email);
                    
            $mail->Subject = 'Reset Password Mitra Develoepr';
                   
            $mail->isHTML(true);
                                
            $mail->Body = $message;
            
            // Send email
            if(!$mail->send()){
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            }else{
                // echo 'Message has been sent';
    	        $this->session->set_flashdata('msg','
                    <span class="login100-form-title p-b-20">
                            Informasi Reset Password berhasil dikirim ke email anda.
                        </span>');       
                redirect('mitra/forgotpassword');
            }

	    }
	}
    
     public function reset($id)
     {
     	$db = $this->db->get('mitra', array('token' => $id));
     	if (empty($db->num_rows())) {
     		// echo "Ndak ada";
     		redirect('mitra','refresh');
     	}else{
     		// echo "ada";
     		$this->load->view('mitra/newpassword');
     	}
     }

     public function submit_new()
     {
     	$id = $this->input->post('id');
     	$pass = $this->input->post('pass');
     	$pass1 = $this->input->post('pass1');

     	if ($pass !== $pass1) {
     		 $this->session->set_flashdata('msg','
                <span class="login100-form-title p-b-20">
                        Password baru tidak sama !
                    </span>');   
     		redirect('mitra/forgotpassword/reset/'.$id,'refresh');
     	}else{
     		$this->db->where('token', $id);
     		$this->db->update('mitra', array(
     			'password' => sha1($pass)
     		));
     		$this->session->set_flashdata('msg','
                <span class="login100-form-title p-b-20">
                        Password berhasil direset, Silahkan Login
                    </span>');   
     		redirect('mitra','refresh');
     	}
     	// echo "$pass";
     }
}

/* End of file Forgotpassword.php */
/* Location: ./application/controllers/mitra/Forgotpassword.php */
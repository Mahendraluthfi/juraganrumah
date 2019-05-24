<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_buyer extends CI_Controller {
	function __construct(){
        parent::__construct();
        /*if ($this->session->userdata('ses_email') != true){

        	redirect('index.php/login');

		}*/
		$this->load->model('Validasiform_buyer');
		$this->load->model('M_registrasi_buyer');
        $this->load->helper(array('form', 'url','cookie'));
		$this->load->library('form_validation');
    }



	public function index()
	{
		$this->load->model('M_blog');
		$this->load->model('Martikel');
		$this->load->model('Login_buyer');
		$data['foto_buyer'] = $this->Login_buyer->profil_buyer()->result();
		$data['prov'] = $this->db->get('prov')->result();
		$data['newest'] = $this->db->query("SELECT * FROM artikel ORDER BY id_artikel desc LIMIT 3")->result();
		//$data['newest'] = $this->M_blog->get()->result();
		$data['newest_produk'] = $this->Martikel->get()->result();
		$data['content'] = 'register_buyer';
		$this->load->view('home', $data);
	}

	public function send_email($email,$pass)
	{
		
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
	                
	        $mail->Subject = 'Pendaftaran Buyer Juragan Rumah';
	               
	        $mail->isHTML(true);
	                            
	        $mailContent = "Selamat Datang di Juragan Rumah <br>
	        				Terima kasih <br>
							Pendaftaran Buyer Berhasil. Segera login ke Area Buyer dan lengkapi Profil Anda<p></p>

							Beranda Juragan Rumah : https://www.juraganrumah.net <br>
							Email : ".$email." <br>
							Password : ".$pass." <br>						
							<br>
							Salam sukses, <br>
							<br>
							Admin Juragan Rumah";
	        $mail->Body = $mailContent;
	        
	        // Send email
	        if(!$mail->send()){
	            echo 'Message could not be sent.';
	            echo 'Mailer Error: ' . $mail->ErrorInfo;
	        }else{
	            // echo 'Message has been sent';		       				
	        }
	}

    public function save()
    {
		if (!empty(get_cookie('user_agen'))) {
			$id_agen = get_cookie('user_agen');
		}else{
			$cek = $this->db->get_where('agen_premium', array('status' => 'AKTIF'))->num_rows();							
			if (!empty($cek)) {
				$get = $this->db->get('agen_premium')->result();
				$jml =  count($get) - 1;
				$indeks = rand(0,$jml);
				$id_agen =  $get[$indeks]->id_agen;				
			}else{
				$id_agen = 0;
			}
		}

		$nama_buyer      = $this->input->post('nama_buyer');
        if ($nama_buyer)
				{
					$nama_buyer	= $this->input->post('nama_buyer');
					$email_buyer	= $this->input->post('email_buyer');
					$pass       = $this->input->post('password');
					$password       = sha1($pass);
					$todayDate = date("Y-m-d");
					$now = strtotime(date("Y-m-d"));
					$date = date('Y-m-j', strtotime('+1 year', $now));
					
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
			        
			        $mail->addAddress($email_buyer);
			                
			        $mail->Subject = 'Pendaftaran Buyer Juragan Rumah';
			               
			        $mail->isHTML(true);
			                            
			        $mailContent = "Selamat Datang di Juragan Rumah <br>
			        				Terima kasih <br>
									Pendaftaran Buyer Berhasil. Segera login ke Area Buyer dan lengkapi Profil Anda<p></p>

									Beranda Juragan Rumah : https://www.juraganrumah.net <br>
									Email : ".$email_buyer." <br>
									Password : ".$pass." <br>						
									<br>
									Salam sukses, <br>
									<br>
									Admin Juragan Rumah";
			        $mail->Body = $mailContent;
			        
			        // Send email
			        if(!$mail->send()){
			            echo 'Message could not be sent.';
			            echo 'Mailer Error: ' . $mail->ErrorInfo;
			        }else{
			            // echo 'Message has been sent';		       				
						$data = array(
							'nama_buyer'       => $nama_buyer,
							'email_buyer'      => $email_buyer,
							'password'         => $password,
							'date_join'        => date('Y-m-d H:i:s'),
							'date_referral'    => date('Y-m-d'),
							'referral_expired' => $date,
							'id_agen'          => $id_agen
						);
							$this->M_registrasi_buyer->adding($data,'buyer');
							
							$this->session->set_flashdata("sukses","Register Telah Sukses.. Silahkan <a href='http://www.juraganrumah.net/signin' class='btn btn-link'>Signin</a>");
							redirect('register_buyer');
			        }

				}
				else
				{ 
					$this->session->set_flashdata("gagal","Register Gagal!, Silahkan Coba Lagi..");
					redirect('register_buyer');
				}
	}

	public function email_validasi()
		 {
		 	  $this->load->model('Validasiform');
			  if($this->Validasiform->email($_POST['email'])){
			   echo '<span style="color:red"><i class="fa fa-times" aria-hidden="true">
			   </i>Alamat  email telah digunakan</span>';
			  }
			  else {
				echo '<span style="color:green"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Alamat email siap di gunakan</span>';
			  }
		 }
}




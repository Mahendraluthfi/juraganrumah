<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_mitra extends CI_Controller {
	function __construct(){
        parent::__construct();
        /*if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
		}*/
		$this->load->model('Validasiform_mitra');
		$this->load->model('M_registrasi_mitra');
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
        $data['mitra'] = $this->M_registrasi_mitra->mitra()->result();
		$data['content'] = 'register_mitra';
		$this->load->view('home', $data);
	}

	public function eror404()
	{
		$this->load->model('M_blog');
		$this->load->model('Martikel');
		$this->load->model('Login_buyer');
		$data['foto_buyer'] = $this->Login_buyer->profil_buyer()->result();
		$data['prov'] = $this->db->get('prov')->result();
		$data['newest'] = $this->db->query("SELECT * FROM artikel ORDER BY id_artikel desc LIMIT 3")->result();
		//$data['newest'] = $this->M_blog->get()->result();
		$data['newest_produk'] = $this->Martikel->get()->result();
		$data['content'] = 'eror404';
		$this->load->view('home', $data);
	}

	public function indexpro()
	{
        $this->load->model('M_blog');
		$this->load->model('Martikel');
		$this->load->model('Login_buyer');
		$data['foto_buyer'] = $this->Login_buyer->profil_buyer()->result();
		$data['prov'] = $this->db->get('prov')->result();
		$data['newest'] = $this->db->query("SELECT * FROM artikel ORDER BY id_artikel desc LIMIT 3")->result();
		//$data['newest'] = $this->M_blog->get()->result();
		$data['newest_produk'] = $this->Martikel->get()->result();
        $data['mitra'] = $this->M_registrasi_mitra->mitra()->result();
		$data['content'] = 'register_mitra_pro';
		$this->load->view('home', $data);
	}

	public function checkoutpro()
	{
		 if($this->session->userdata('ses_email') != true){
        	redirect('register_mitra/eror404');
		}
		$data['mitra'] = $this->M_registrasi_mitra->mitra()->result();
		foreach($this->M_registrasi_mitra->mitra()->result() as $su){
			$data['kode'] = substr($su->telepon, -3);
			$data['nominal'] = 3500000;
			$data['total'] = 3500000 + substr($su->telepon, -3);
		}
		$this->load->view( 'checkoutpro', $data);
	}

	public function send_mail($id)
    {
    	$get_email = $this->db->get_where('mitra', array('id_mitra' => $id))->row();
    	$data['pt'] = $get_email->nama_perusahaan;
        $message = $this->load->view('mitra/welcome_email', $data, true);	        
	        
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
        
        $mail->addAddress($get_email->email);
                
        $mail->Subject = 'Pendaftaran Mitra Developer Juragan Rumah';
               
        $mail->isHTML(true);
                            
        $mail->Body = $message;
        
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            // echo 'Message has been sent';
	        // $this->session->set_flashdata('msg','
         //        <span class="login100-form-title p-b-20">
         //                Informasi Reset Password berhasil dikirim ke email anda.
         //            </span>');       
         //    redirect('mitra/forgotpassword');
        }
	}	

    public function project($id)
    {
					$id_mitra      = $this->input->get('id');
					$project       = $this->input->post('project');
					$provinsi      = $this->input->post('provinsi');
					$kabkot        = $this->input->post('kabkot');
					$kecamatan     = $this->input->post('kecamatan');
					$alamat        = $this->input->post('alamat');					
					$data = array(
						'id_mitra'       => $id,
						'nama_project'   => $project,
						'prov'           => $provinsi,
						'kabkot'         => $kabkot,
						'kec'            => $kecamatan,
						'alamat'         => $alamat
					);
						$this->M_registrasi_mitra->adding($data,'project');
	}

	
    public function save()
    {
		$nama_mitra      = $this->input->post('nama_mitra');
        if ($nama_mitra)
				{
					$nama_mitra	       = $this->input->post('nama_mitra');
					$nik_ktp	       = $this->input->post('nik_ktp');
					$nama_perusahaan   = $this->input->post('nama_perusahaan');
					$a = str_replace(" ","-", $nama_perusahaan);
					$b = str_replace(".", "-", $a);
					$username = strtolower($b);
					$profil	           = $this->input->post('profil');
					$email             = $this->input->post('email_mitra');
					$nomorwa           = $this->input->post('nomorwa');
					$project           = $this->input->post('project');
					$provinsi          = $this->input->post('provinsi');
					$kabkot            = $this->input->post('kabkot');
					$kecamatan         = $this->input->post('kecamatan');
					$alamat            = $this->input->post('alamat');
					$komisi            = $this->input->post('komisi');
					$ktp_gambar        = $this->input->post('ktp_gambar');
                    $logo_gambar       = $this->input->post('logo_gambar');
                    $pass              = $this->input->post('password');
					$password          = sha1($pass);
					$now               = strtotime(date("Y-m-d"));
					$date              = date('Y-m-j', strtotime('+14 day', $now));
					

					$data = array(
						'nama_mitra'         => $nama_mitra,
                        'nik_ktp'            => $nik_ktp,
                        'nama_perusahaan'    => $nama_perusahaan,
                        'username'    		 => $username,
                        'profil_perusahaan'  => $profil,
						'email'              => $email,
						'telepon'            => $nomorwa,						
						'komisi'             => $komisi,						
						'password'           => $password,
						'paket_project'    	 => '1',						
						'date_join'          => date('Y-m-d H:i:s'),
						'expired_trial'      => $date
					);
                        $this->M_registrasi_mitra->adding($data,'mitra');
                        $cek = $this->db->get_where('mitra', array('email' => $email))->row();
                        $id_mitra = $cek->id_mitra;
                        $this->send_mail($id_mitra);
						$this->project($id_mitra);

			      	$config['upload_path']          = './assets/backend/fotomitra/';       	
			        $config['allowed_types']        = 'gif|jpg|png|jpeg';
			        $config['max_size']             = 2048;
			        $config['max_width']            = 1900;
			        $config['max_height']           = 1200;
			        $config['encrypt_name']         = true;


			        $this->load->library('upload', $config);
					$fotoktp = $_FILES["fotoktp"]["name"];
					$fotologo = $_FILES["fotologo"]["name"];					

					if (!empty($fotoktp)) {
							$this->upload->do_upload('fotoktp');
			    			$image_upload = $this->upload->data();

			    			$this->db->where('id_mitra', $id_mitra);
			      			$this->db->update('mitra', array('file_ktp' => $this->upload->file_name));    			
					}

					if (!empty($fotologo)) {
							$this->upload->do_upload('fotologo');
			    			$image_upload = $this->upload->data();

			    			$this->db->where('id_mitra', $id_mitra);
			      			$this->db->update('mitra', array('file_logo' => $this->upload->file_name));    			
					}
						// $this->send_mail();
					$this->session->set_flashdata("sukses","Data Terkirim.<br> <a href='http://www.juraganrumah.net/mitra' class='btn btn-link'>Masuk Disini</a>");
						redirect('register_mitra');
				}
				else
				{ 
					$this->session->set_flashdata("gagal","Register Gagal!, Silahkan Coba Lagi..");
					redirect('register_mitra');
				}
	} 

	public function savepro()
    {
		$nama_mitra      = $this->input->post('nama_mitra');
        if ($nama_mitra)
				{
					$nama_mitra	       = $this->input->post('nama_mitra');
					$nik_ktp	       = $this->input->post('nik_ktp');
					$nama_perusahaan   = $this->input->post('nama_perusahaan');
					$a = str_replace(" ","-", $nama_perusahaan);
					$b = str_replace(".", "-", $a);
					$username = strtolower($b);
					$profil	           = $this->input->post('profil');
					$email             = $this->input->post('email_mitra');
					$nomorwa           = $this->input->post('nomorwa');
					$project           = $this->input->post('project');
					$provinsi          = $this->input->post('provinsi');
					$kabkot            = $this->input->post('kabkot');
					$kecamatan         = $this->input->post('kecamatan');
					$alamat            = $this->input->post('alamat');
					$komisi            = $this->input->post('komisi');					
					$ktp_gambar        = $this->input->post('ktp_gambar');
                    $logo_gambar       = $this->input->post('logo_gambar');
                    $pass              = $this->input->post('password');
					$password          = sha1($pass);
					$now               = strtotime(date("Y-m-d"));
					$date              = date('Y-m-d', strtotime('+14 day', $now));
					$date_pro          = date('Y-m-d', strtotime('+2 day', $now));
					$status_akun	   = 'PRO';
					$data = array(
						'nama_mitra'         => $nama_mitra,
                        'nik_ktp'            => $nik_ktp,
                        'nama_perusahaan'    => $nama_perusahaan,
                        'username'    		 => $username,                        
                        'profil_perusahaan'  => $profil,
						'email'              => $email,
						'telepon'            => $nomorwa,						
						'password'           => $password,
						'date_join'          => date('Y-m-d H:i:s'),
						'expired_trial'      => $date,
						'komisi'             => $komisi,						
						'expired_premium'    => $date_pro,
						'paket_project'    	 => '1',
						'status_akun'        => $status_akun
					);
                        $this->M_registrasi_mitra->adding($data,'mitra');
                        $cek = $this->db->get_where('mitra', array('email' => $email))->row();
                        $id_mitra = $cek->id_mitra;
                        $this->send_mail($email);                        
						$this->project($id_mitra);
						// $this->send_mail_pro();				
						$config['upload_path']          = './assets/backend/fotomitra/';       	
				        $config['allowed_types']        = 'gif|jpg|png|jpeg';
				        $config['max_size']             = 2048;
				        $config['max_width']            = 1900;
				        $config['max_height']           = 1200;
				        $config['encrypt_name']         = true;


				        $this->load->library('upload', $config);
						$fotoktp = $_FILES["fotoktp"]["name"];
						$fotologo = $_FILES["fotologo"]["name"];					

						if (!empty($fotoktp)) {
								$this->upload->do_upload('fotoktp');
				    			$image_upload = $this->upload->data();

				    			$this->db->where('id_mitra', $id_mitra);
				      			$this->db->update('mitra', array('file_ktp' => $this->upload->file_name));    			
						}

						if (!empty($fotologo)) {
								$this->upload->do_upload('fotologo');
				    			$image_upload = $this->upload->data();

				    			$this->db->where('id_mitra', $id_mitra);
				      			$this->db->update('mitra', array('file_logo' => $this->upload->file_name));    			
						}

						$this->session->set_userdata(array('ses_email' => $email));
						$this->session->set_flashdata("sukses","Data Terkirim.<br> <a href='http://www.juraganrumah.net/mitra' class='btn btn-link'>Masuk Disini</a>");
						redirect('register_mitra/checkoutpro');
				}
				else
				{ 
					$this->session->set_flashdata("gagal","Register Gagal!, Silahkan Coba Lagi..");
					redirect('');
				}
	}

	public function savepro_transaksi()
    {
		$id_mitra = $this->input->post('id_mitra');
        if ($id_mitra)
				{
					$id_mitra		   = $this->input->post('id_mitra');
					$id_inv		       = $this->input->post('id_inv');
					$date			   = $this->input->post('date');
					$deskripsi         = "Aktivasi Akun Pro Mitra Developer Juragan Rumah";
					$qty               = 1;
					$nominal           = $this->input->post('nominal');
					$kode	           = $this->input->post('kode');
					$total	           = $this->input->post('total');
					$status			   = 'PROSES';
					$data = array(
						'id_mitra'   => $id_mitra,
                        'id_inv'     => $id_inv,
                        'date'    	 => $date,
                        'deskripsi'  => $deskripsi,
						'qty'        => $qty,
						'nominal'    => $nominal,
						'kode'       => $kode,
						'total'      => $total,
						'status'     => $status
					);
                        $this->M_registrasi_mitra->adding($data,'mitra_transaksi');
						##$this->send_mail_pro();
                        $this->session->unset_userdata('ses_email');
						$this->session->set_flashdata("sukses","Data Terkirim.<br> Menunggu Konfirmasi Pengaktifan Akun");
						redirect('home');
				}
				else
				{ 
					$this->session->set_flashdata("gagal","Register Gagal!, Silahkan Coba Lagi..");
					redirect('register_mitra/checkoutpro');
				}
	}

	public function email_validasi()
		 {
			  if($this->Validasiform_mitra->email($_POST['email'])){
			   echo '<span style="color:red"><i class="fa fa-times" aria-hidden="true">
			   </i>Alamat  email telah digunakan</span>';
			  }
			  else {
				echo '<span style="color:green"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Alamat email siap di gunakan</span>';
			  }
		 }

	public function tes()
	{
		$this->load->view('mitra/welcome_email', TRUE);
	}
}

	
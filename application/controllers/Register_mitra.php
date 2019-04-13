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
        $data['prov'] = $this->db->get('prov')->result();
        $data['mitra'] = $this->M_registrasi_mitra->id_mitra()->result();
		$data['content'] = 'register_mitra';
		$this->load->view('home', $data);
	}
	public function indexpro()
	{
        $data['prov'] = $this->db->get('prov')->result();
        $data['mitra'] = $this->M_registrasi_mitra->mitra()->result();
		$data['content'] = 'register_mitra_pro';
		$this->load->view('home', $data);
	}
	public function checkoutpro()
	{
		$data['mitra'] = $this->M_registrasi_mitra->mitra()->result();
		foreach($this->M_registrasi_mitra->mitra()->result() as $su){
			$data['kode'] = substr($su->telepon, -3);
			$data['nominal'] = 3500000;
			$data['total'] = 3500000 + substr($su->telepon, -3);
		}
		$this->load->view( 'checkoutpro', $data);
	}
	
	public function send_mail()
    {
		
        $to             = $this->input->post('email_buyer');
		$subject        = "Konfirmasi Akun Mitra";

		$message = '<html><head>
        			<title>juraganrumah.net</title>
    			</head><body>';
		$message .= '<img src="assets/img/juragan_rumah_logo.png" nosend="1" border="0" width="300" height="148" alt="juraganrumah.net" title="juraganrumah.net"><h3>Terimakasih, Atas kepercayaanya karena telah memilih kami</h3>
				<h5>Mohon Tunggu Konfirmasi Pengaktifan Akun Anda, dan Akan dikirim Melalui Email Berikutnya..<br> Status Akun Anda <b>Trial</b></h5>
        			<table cellspacing="0" style="border: 2px dashed #FB4314; width: 300px; height: 200px;">';
		$message .= "$to";
		$message .= '</td>
           				</tr>
            				<tr>
                			<th>Login disini:</th><td><a href="http://beta.juraganrumah.net">beta.juraganrumah.net</a></td>
            				</tr>
        			</table>
    			</body>
       	             </html>';
		$message .= '</body></html>';
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: juraganrumah<juraganrumah.net>' . "\r\n";
        if(mail($to,$subject,$message,$headers)):
			$this->session->set_flashdata("notif",'Data Terkirim.<br> Menunggu Konfirmasi Pengaktivan Akun <br> Status Akun Anda <b>Trial</b>');
		else:
			$this->session->set_flashdata("notif",'Data Tidak Terkirim');
		endif;
		
	}
	
	public function send_mail_pro()
    {
		
        $to             = $this->input->post('email_buyer');
		$subject        = "Konfirmasi Akun Mitra";

		$message = '<html><head>
        			<title>juraganrumah.net</title>
    			</head><body>';
		$message .= '<img src="assets/img/juragan_rumah_logo.png" nosend="1" border="0" width="300" height="148" alt="juraganrumah.net" title="juraganrumah.net"><h3>Terimakasih, Atas kepercayaanya karena telah memilih kami</h3>
				<h5>Mohon Tunggu Konfirmasi Pengaktifan Akun Anda, dan Akan dikirim Melalui Email Berikutnya..<br> Anda memlilih Paket <b>Pro</b></h5> Status saat ini masih Trial, sampai Menunggu Konfirmasi Pembayaran Anda.
        			<table cellspacing="0" style="border: 2px dashed #FB4314; width: 300px; height: 200px;">';
		$message .= "$to";
		$message .= '</td>
           				</tr>
            				<tr>
                			<th>Login disini:</th><td><a href="http://beta.juraganrumah.net">beta.juraganrumah.net</a></td>
            				</tr>
        			</table>
    			</body>
       	             </html>';
		$message .= '</body></html>';
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: juraganrumah<juraganrumah.net>' . "\r\n";
        if(mail($to,$subject,$message,$headers)):
			$this->session->set_flashdata("notif",'Data Terkirim.<br> Menunggu Konfirmasi Pengaktivan Akun <br> Status Akun Anda <b>Trial</b>');
		else:
			$this->session->set_flashdata("notif",'Data Tidak Terkirim');
		endif;
		
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
					$profil	           = $this->input->post('profil');
					$email             = $this->input->post('email_mitra');
					$nomorwa           = $this->input->post('nomorwa');
					$project           = $this->input->post('project');
					$provinsi          = $this->input->post('provinsi');
					$kabkot            = $this->input->post('kabkot');
					$kecamatan         = $this->input->post('kecamatan');
					$alamat            = $this->input->post('alamat');
					$ktp_gambar        = $this->input->post('ktp_gambar');
                    $logo_gambar       = $this->input->post('logo_gambar');
                    $pass              = $this->input->post('password');
					$password          = password_hash("$pass", PASSWORD_DEFAULT);
					$now               = strtotime(date("Y-m-d"));
					$date              = date('Y-m-j', strtotime('+14 day', $now));
					
					$data = array(
						'nama_mitra'         => $nama_mitra,
                        'nik_ktp'            => $nik_ktp,
                        'nama_perusahaan'    => $nama_perusahaan,
                        'profil_perusahaan'  => $profil,
						'email'              => $email,
						'telepon'            => $nomorwa,
						'file_ktp'           => $ktp_gambar,
						'file_logo'          => $logo_gambar,
						'password'           => $password,
						'date_join'          => date('Y-m-d H:i:s'),
						'expired_trial'      => $date
					);
                        $this->M_registrasi_mitra->adding($data,'mitra');
                        $cek = $this->db->get_where('mitra', array('email' => $email))->row();
                        $id_mitra = $cek->id_mitra;
						$this->project($id_mitra);
						$this->send_mail();
						$this->session->set_flashdata("sukses","Data Terkirim.<br> Menunggu Konfirmasi Pengaktifan Akun");
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
					$profil	           = $this->input->post('profil');
					$email             = $this->input->post('email_mitra');
					$nomorwa           = $this->input->post('nomorwa');
					$project           = $this->input->post('project');
					$provinsi          = $this->input->post('provinsi');
					$kabkot            = $this->input->post('kabkot');
					$kecamatan         = $this->input->post('kecamatan');
					$alamat            = $this->input->post('alamat');
					$ktp_gambar        = $this->input->post('ktp_gambar');
                    $logo_gambar       = $this->input->post('logo_gambar');
                    $pass              = $this->input->post('password');
					$password          = password_hash("$pass", PASSWORD_DEFAULT);
					$now               = strtotime(date("Y-m-d"));
					$date              = date('Y-m-j', strtotime('+14 day', $now));
					$status_akun	   = 'PRO';
					
					$data = array(
						'nama_mitra'         => $nama_mitra,
                        'nik_ktp'            => $nik_ktp,
                        'nama_perusahaan'    => $nama_perusahaan,
                        'profil_perusahaan'  => $profil,
						'email'              => $email,
						'telepon'            => $nomorwa,
						'file_ktp'           => $ktp_gambar,
						'file_logo'          => $logo_gambar,
						'password'           => $password,
						'date_join'          => date('Y-m-d H:i:s'),
						'expired_trial'      => $date,
						'status_akun'        => $status_akun
					);
                        $this->M_registrasi_mitra->adding($data,'mitra');
                        $cek = $this->db->get_where('mitra', array('email' => $email))->row();
                        $id_mitra = $cek->id_mitra;
						$this->project($id_mitra);
						$this->send_mail_pro();
						$this->session->set_flashdata("sukses","Data Terkirim.<br> Menunggu Konfirmasi Pengaktifan Akun");
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
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_agen extends CI_Controller {
	function __construct(){
        parent::__construct();
        /*if ($this->session->userdata('ses_email') != true){
        	redirect('index.php/login');
		}*/
		$this->load->model('Validasiform_agen');
		$this->load->model('M_registrasi_agen');
        $this->load->helper(array('form', 'url','cookie'));
		$this->load->library('form_validation');
    }
	public function index()
	{
		$data['content'] = 'register_agen';
		$this->load->view('home', $data);
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

    public function save()
    {
		$nama_agen      = $this->input->post('nama_agen');
		$email       	= $this->input->post('email');
		$username       = $this->input->post('username');				
		$data = array(
			'nama_agen'     => $nama_agen,
			'email'   		=> $email,
			'username'      => $username
			);
		$this->M_registrasi_agen->adding($data,'agen');
		redirect('register_agen');
		
	}
	public function email_validasi()
		 {
			  if($this->Validasiform_agen->email($_POST['email'])){
			   echo '<span style="color:red"><i class="fa fa-times" aria-hidden="true">
			   </i>Alamat  email telah digunakan</span>';
			  }
			  else {
				echo '<span style="color:green"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Alamat email siap di gunakan</span>';
			  }
		 }
		 public function username_validasi()
		 {
			  if($this->Validasiform_agen->username($_POST['username'])){
			   echo '<span style="color:red"><i class="fa fa-times" aria-hidden="true">
			   </i>Alamat  username telah digunakan</span>';
			  }
			  else {
				echo '<span style="color:green"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Alamat username siap di gunakan</span>';
			  }
		 }
}

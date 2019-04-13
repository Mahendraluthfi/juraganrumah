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
		$data['content'] = 'register_buyer';
		$this->load->view('home', $data);
	}
	public function send_mail()
    {
		
        $to             = $this->input->post('email_buyer');
		$subject        = "Akun Anda Sudah Aktif";

		$message = '<html><head>
        			<title>juraganrumah.net</title>
    			</head><body>';
		$message .= '<img src="assets/img/juragan_rumah_logo.png" nosend="1" border="0" width="300" height="148" alt="juraganrumah.net" title="juraganrumah.net">
				<h3>Terimakasih, Atas kepercayaanya karena telah memilih kami</h3>
				<h5>Silahkan Login Melalui Link yang telah di berikan</h5>
        			<table cellspacing="0" style="border: 2px dashed #FB4314; width: 300px; height: 200px;">
            			 	<tr>
                			<th>Password:</th><td>';
		$message .= '</td>
            				</tr>
            				<tr style="background-color: #e0e0e0;">
                			<th>Email:</th><td>';
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
		
    }
	
    public function save()
    {
		$nama_buyer      = $this->input->post('nama_buyer');
        if ($nama_buyer)
				{
					$nama_buyer	= $this->input->post('nama_buyer');
					$email_buyer	= $this->input->post('email_buyer');
					$pass       = $this->input->post('password');
					$password       = password_hash("$pass", PASSWORD_DEFAULT);
					$todayDate = date("Y-m-d");
					$now = strtotime(date("Y-m-d"));
					$date = date('Y-m-j', strtotime('+1 year', $now));
					
					$data = array(
						'nama_buyer'       => $nama_buyer,
						'email_buyer'      => $email_buyer,
						'password'         => $password,
						'date_join'        => date('Y-m-d H:i:s'),
						'date_referral'    => date('Y-m-d'),
						'referral_expired' => $date,
						'id_agen'          => $this->input->cookie('user_agen')
					);
						$this->M_registrasi_buyer->adding($data,'buyer');
						$this->send_mail();
						$this->session->set_flashdata("sukses","Register Telah Sukses.. Silahkan Sign up");
						redirect('register_buyer');
				}
				else
				{ 
					$this->session->set_flashdata("gagal","Register Gagal!, Silahkan Coba Lagi..");
					redirect('register_buyer');
				}
	}
	public function email_validasi()
		 {
			  if($this->Validasiform->email($_POST['email'])){
			   echo '<span style="color:red"><i class="fa fa-times" aria-hidden="true">
			   </i>Alamat  email telah digunakan</span>';
			  }
			  else {
				echo '<span style="color:green"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Alamat email siap di gunakan</span>';
			  }
		 }
}

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

		$this->load->model('M_blog');

		$this->load->model('Martikel');

		$data['prov'] = $this->db->get('prov')->result();

		$data['newest'] = $this->M_blog->get()->result();
		$data['content'] = 'register_agen';

		$data['newest_produk'] = $this->Martikel->get()->result();

		$this->load->view('home', $data);

	}



	public function send_mail()

    {

       

	}



    public function save()

    {
		$nama_agen      = $this->input->post('nama_agen');
		$email       	= $this->input->post('email');
		$username       = $this->input->post('username');				
		$pass 			= date('Y-m-d').$username;
		$password 		= sha1($pass);
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
                
        $mail->Subject = 'Registrasi Agen Juragan Rumah';
               
        $mail->isHTML(true);
                
        $mailContent = "Terima kasih <br>
						Pendaftaran Berhasil. Segera login ke Area Agen untuk menyelesaikan pendaftaran <p></p>

						Area Agen: https://www.juraganrumah.net/agen <br>
						Username : ".$username." <br>
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
            //echo 'Message has been sent';
        }

		$data = array(
			'nama_agen'     => $nama_agen,
			'email'   		=> $email,
			'password'   	=> $password,
			'username'      => $username
			);

		$this->M_registrasi_agen->adding($data,'agen');
		$this->session->set_flashdata("sukses","Data Terkirim.<br> Silahkan Cek Email Anda untuk langkah selanjutnya.");
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




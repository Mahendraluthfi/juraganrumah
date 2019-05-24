<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {

	function __construct(){
        parent::__construct();
        if (!empty($this->session->userdata('ses_id'))) {
            redirect('home','refresh');
        }
        $this->load->model('Login_buyer');
        $this->load->model('M_blog');
        $this->load->model('Martikel');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

	public function index()
	{
        // $this->load->model('Login_buyer');
        $data['foto_buyer'] = $this->Login_buyer->profil_buyer()->result();
        $data['prov'] = $this->db->get('prov')->result();
        $data['newest'] = $this->db->query("SELECT * FROM artikel ORDER BY id_artikel desc LIMIT 3")->result();
        $data['newest_produk'] = $this->Martikel->get()->result();
        //$data['newest'] = $this->M_blog->get()->result();
		$data['content'] = 'signin';
		$this->load->view('home', $data);
    }

    function auth(){
        $email=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
        $password=sha1($this->input->post('password'));
        $cek=$this->Login_buyer->auth_cek($email,$password);
            if($cek->num_rows() > 0){ //jika login buyer
                $data=$cek->row_array();
                    if($data){ //Akses buyer
                        $this->session->set_userdata('ses_id',$data['id_buyer']);
						$this->session->set_userdata('ses_agen',$data['id_agen']);
                        $this->session->set_userdata('ses_pass',$data['password']);
                        $this->session->set_userdata('ses_telp',$data['telepon']);
                        $this->session->set_userdata('ses_email',$data['email_buyer']);
                        $this->session->set_userdata('ses_alamat',$data['alamat']);
                        $this->session->set_userdata('ses_nama',$data['nama_buyer']);
                        redirect('Home');
                    }
			}else{ 
                    $this->session->set_flashdata('msg', 'Koreksi lagi password dan email anda..');
                    redirect('Signin');
                }
        }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('Home');
        redirect($url);
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

    public function forgot()
    {
        $data['foto_buyer'] = $this->Login_buyer->profil_buyer()->result();
        $data['prov'] = $this->db->get('prov')->result();
        $data['newest'] = $this->db->query("SELECT * FROM artikel ORDER BY id_artikel desc LIMIT 3")->result();
        $data['newest_produk'] = $this->Martikel->get()->result();
        $data['content'] = 'forgot';
        $this->load->view('home', $data);   
    }

    public function submit()
    {
        $email = $this->input->post('email');        
        if (empty($this->db->get_where('buyer', array('email_buyer' => $email))->num_rows())) {
            $this->session->set_flashdata('msg','Email anda tidak ditemukan !');       
            redirect('signin/forgot');
        }else{                  
            
            $token = md5($this->acak(10));

            $this->db->where('email_buyer', $email);
            $this->db->update('buyer', array('token' => $token));

            $data['token'] = $token;
            $message = $this->load->view('reset', $data, true);            
            
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
                    
            $mail->Subject = 'Reset Password Buyer';
                   
            $mail->isHTML(true);
                                
            $mail->Body = $message;
            
            // Send email
            if(!$mail->send()){
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            }else{
                // echo 'Message has been sent';
                $this->session->set_flashdata('msg','Informasi Reset Password berhasil dikirim ke email anda.');       
                redirect('signin/forgot');
            }

        }
    }

     public function reset($id)
     {
        $db = $this->db->get('buyer', array('token' => $id));
        if (empty($db->num_rows())) {
            // echo "Ndak ada";
            redirect('home','refresh');
        }else{
            // echo "ada";
            $data['foto_buyer'] = $this->Login_buyer->profil_buyer()->result();
            $data['prov'] = $this->db->get('prov')->result();
            $data['newest'] = $this->db->query("SELECT * FROM artikel ORDER BY id_artikel desc LIMIT 3")->result();
            $data['newest_produk'] = $this->Martikel->get()->result();
            $data['content'] = 'newpassword';
            $this->load->view('home', $data);   
        }
     }

     public function submit_new()
     {
        $id = $this->input->post('id');
        $pass = $this->input->post('pass');
        $pass1 = $this->input->post('pass1');

        if ($pass !== $pass1) {
             $this->session->set_flashdata('msg','                
                        Password baru tidak sama !
                    ');   
            redirect('signin/reset/'.$id,'refresh');
        }else{
            $this->db->where('token', $id);
            $this->db->update('buyer', array(
                'password' => sha1($pass)
            ));
            $this->session->set_flashdata('msg','                
                        Password berhasil direset, Silahkan Login
                    ');   
            redirect('signin','refresh');
        }
        // echo "$pass";
     }

}




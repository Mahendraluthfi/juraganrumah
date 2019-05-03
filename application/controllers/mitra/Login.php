<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
 	    if($this->auth->is_login_mitra() == false){          
        	$this->load->view('mitra/login');
        }else{
            redirect('mitra/dashboard','refresh');
        }		
	}

	public function submit()
	{
		$email = $this->input->post('email');
        $password = sha1($this->input->post('pass'));
        $cek = $this->db->get_where('mitra',array('email' => $email, 'password' => $password));
        // echo $password;
        if (empty($this->db->get_where('mitra', array('email' => $email))->num_rows())) {
        	$this->session->set_flashdata('msg','
                <span class="login100-form-title p-b-20">
						Email anda tidak ditemukan !
					</span>');       
            redirect('mitra');
        }elseif(!empty($cek->num_rows())) {
           
            $validasi = $cek->row();
            $now = date('Y-m-d');
            if ($validasi->status_akun == "TRIAL") {                    
                if ($now > $validasi->expired_trial) {
                    // echo "Expired";
                    $this->db->where('id_mitra', $validasi->id_mitra);    
                    $this->db->update('mitra', array('status_akun' => 'EXPIRED'));

                    $sa = $validasi->status_akun;
                }else{
                    $sa = $validasi->status_akun;                
                }
            }elseif($validasi->status_akun == "PRO" && $validasi->cek_bayar == 0){                
                $this->session->set_userdata(array('confirm' => 'YES'));
                $sa = $validasi->status_akun;                
            }else{            
                $sa = $validasi->status_akun;
            }

            $get = $cek->result();
            foreach ($get as $key) {
       
                $ses_admin = array(
                    'id_mitra' => $key->id_mitra,
                    'email_mitra' => $key->email,   
                    'status_akun' => $sa,   
                    'inv' => date('mdis')
                );
            }         
            // echo $this->session->userdata('confirm');
            // print_r($ses_admin);

            $this->session->set_userdata($ses_admin);            
            redirect('mitra/dashboard','refresh');
        }else{     
            $this->session->set_flashdata('msg','
                <span class="login100-form-title p-b-20">
						Password anda salah !
					</span>
                ');       
            redirect('mitra');
        }
	}

	public function logout()
	{
		session_destroy();
		redirect('mitra','refresh');
	}
    

}

/* End of file Login.php */
/* Location: ./application/controllers/mitra/Login.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_login_freelance() == false)
	    {	     
	        redirect('freelance/login');
	    }	    
	}

	public function index()
	{
		$data['content'] = 'freelance/setting';
		$this->load->view('freelance/index', $data);				
	}

	public function submit()
	{     
		$lama = sha1($this->input->post('pass'));		
		$baru = $this->input->post('baru');
		$rebaru = $this->input->post('rebaru');
        $new = sha1($baru);

        $cek = $this->db->get_where('freelance_agen', array('id_freelance' => $this->session->userdata('id_freelance'), 'password' => $lama));
        if ($cek->num_rows() > 0) {
        	# code...
	        if ($baru !== $rebaru) {
	           $this->session->set_flashdata('error', '
	            	$(document).ready(function(){
	            		toastr.error("Password baru anda tidak sama", "Perhatian !");
	            		});
	            	');
	           redirect('freelance/setting','refresh');
	        }else{
	        	$this->db->where('id_freelance', $this->session->userdata('id_freelance'));
	        	$this->db->update('freelance_agen', array('password' => $new));
	        	$this->session->set_flashdata('error', '
	            	$(document).ready(function(){
	            		toastr.success("Password berhasil diubah", "Sukses !");
	            		});
	            	');
	           redirect('freelance/setting','refresh');
	        }        
        }else{
    	   $this->session->set_flashdata('error', '
            	$(document).ready(function(){
            		toastr.error("Password lama anda tidak tepat", "Perhatian !");
            		});
            	');
           redirect('freelance/setting','refresh');
        }


        
	}
}

/* End of file Setting.php */
/* Location: ./application/controllers/freelance/Setting.php */
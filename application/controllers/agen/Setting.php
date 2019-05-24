<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_login_agen() == false)
	    {	     
	        redirect('agen/login');
	    }	    
	}

		public function index()
	{
		$data['content'] = 'agen/setting';
		$this->load->view('agen/index', $data);				
	}

	public function submit()
	{     
		$lama = sha1($this->input->post('pass'));		
		$baru = $this->input->post('baru');
		$rebaru = $this->input->post('rebaru');
        $new = sha1($baru);

        $cek = $this->db->get_where('agen', array('id_agen' => $this->session->userdata('id_agen'), 'password' => $lama));
        if ($cek->num_rows() > 0) {
        	# code...
	        if ($baru !== $rebaru) {
	           $this->session->set_flashdata('error', '
	            	$(document).ready(function(){
	            		toastr.error("Password baru anda tidak sama", "Perhatian !");
	            		});
	            	');
	           redirect('agen/setting','refresh');
	        }else{
	        	$this->db->where('id_agen', $this->session->userdata('id_agen'));
	        	$this->db->update('agen', array('password' => $new));
	        	$this->session->set_flashdata('error', '
	            	$(document).ready(function(){
	            		toastr.success("Password berhasil diubah", "Sukses !");
	            		});
	            	');
	           redirect('agen/setting','refresh');
	        }        
        }else{
    	   $this->session->set_flashdata('error', '
            	$(document).ready(function(){
            		toastr.error("Password lama anda tidak tepat", "Perhatian !");
            		});
            	');
           redirect('agen/setting','refresh');
        }        
	}

}

/* End of file Setting.php */
/* Location: ./application/controllers/agen/Setting.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_login_mitra() == false)
	    {	     
	        redirect('mitra/login');
	    }	    
	}

	public function index()
	{
		$data['content'] = 'mitra/setting';
		$this->load->view('mitra/index', $data);				
	}

	public function submit()
	{     
		$lama = sha1($this->input->post('pass'));		
		$baru = $this->input->post('baru');
		$rebaru = $this->input->post('rebaru');
        $new = sha1($baru);

        $cek = $this->db->get_where('mitra', array('id_mitra' => $this->session->userdata('id_mitra'), 'password' => $lama));
        if ($cek->num_rows() > 0) {
        	# code...
	        if ($baru !== $rebaru) {
	           $this->session->set_flashdata('error', '
	            	$(document).ready(function(){
	            		toastr.error("Password baru anda tidak sama", "Perhatian !");
	            		});
	            	');
	           redirect('mitra/setting','refresh');
	        }else{
	        	$this->db->where('id_mitra', $this->session->userdata('id_mitra'));
	        	$this->db->update('mitra', array('password' => $new));
	        	$this->session->set_flashdata('error', '
	            	$(document).ready(function(){
	            		toastr.success("Password berhasil diubah", "Sukses !");
	            		});
	            	');
	           redirect('mitra/setting','refresh');
	        }        
        }else{
    	   $this->session->set_flashdata('error', '
            	$(document).ready(function(){
            		toastr.error("Password lama anda tidak tepat", "Perhatian !");
            		});
            	');
           redirect('mitra/setting','refresh');
        }


        
	}
}

/* End of file Setting.php */
/* Location: ./application/controllers/mitra/Setting.php */
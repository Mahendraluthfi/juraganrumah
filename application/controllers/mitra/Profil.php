<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

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
		$cek = $this->db->get_where('mitra', array('id_mitra' => $this->session->userdata('id_mitra')))->row();
		if ($cek->status_akun == "TRIAL") {
			$date_exp = date_create($cek->expired_trial);
			$date_now = date_create(date('Y-m-d'));
			$diff = date_diff($date_now,$date_exp);
			$data['minus'] = $diff->format("%a");
		}elseif($cek->status_akun == "PRO") {
			$date_exp = date_create($cek->expired_premium);
			$date_now = date_create(date('Y-m-d'));
			$diff = date_diff($date_now,$date_exp);
			$data['minus'] = $diff->format("%a");
		}
		$data['mitra'] = $cek;
		$data['project'] = $this->db->get_where('project', array('id_mitra' => $this->session->userdata('id_mitra')))->result();
		$data['content'] = 'mitra/profil';
		$this->load->view('mitra/index', $data);
	}

	public function edit()
	{
		$data['row'] = $this->db->get_where('mitra', array('id_mitra' => $this->session->userdata('id_mitra')))->row();	
		$data['content'] = 'mitra/profil_wizard';
		$this->load->view('mitra/index', $data);
	}
	

	public function submit()
	{
      	$config['upload_path']          = './assets/backend/fotomitra/';       	
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['max_width']            = 1900;
        $config['max_height']           = 1200;
        $config['encrypt_name']         = true;


        $this->load->library('upload', $config);
    
		$id = $this->input->post('id');

		$fotoktp = $_FILES["fotoktp"]["name"];
		$fotologo = $_FILES["fotologo"]["name"];
		$fotobanner = $_FILES["fotobanner"]["name"];

		if (!empty($fotoktp)) {
				$this->upload->do_upload('fotoktp');
    			$image_upload = $this->upload->data();

    			$this->db->where('id_mitra', $this->input->post('id_mitra'));
      			$this->db->update('mitra', array('file_ktp' => $this->upload->file_name));    			
		}

		if (!empty($fotologo)) {
				$this->upload->do_upload('fotologo');
    			$image_upload = $this->upload->data();

    			$this->db->where('id_mitra', $this->input->post('id_mitra'));
      			$this->db->update('mitra', array('file_logo' => $this->upload->file_name));    			
		}

		if (!empty($fotobanner)) {
				$this->upload->do_upload('fotobanner');
    			$image_upload = $this->upload->data();

    			$this->db->where('id_mitra', $this->input->post('id_mitra'));
      			$this->db->update('mitra', array('file_banner' => $this->upload->file_name));    			
		}

	    $this->db->where('id_mitra', $this->input->post('id_mitra'));
      	$this->db->update('mitra', array(
      		'nama_mitra' => $this->input->post('nama'),
      		'nik_ktp' => $this->input->post('noktp'),
      		'telepon' => $this->input->post('wa'),
      		'email' => $this->input->post('email'),
      		'alamat' => $this->input->post('alamat'),
      		'profil_perusahaan' => $this->input->post('profil'),
      		'no_rekening' => $this->input->post('rekening'), 
			'atas_nama' => $this->input->post('atasnama'), 
			'nama_bank' => $this->input->post('bank'),			
			'komisi' => $this->input->post('komisi')
      	));

      	redirect('mitra/profil','refresh');

	}
	

}	

/* End of file Profil.php */
/* Location: ./application/controllers/mitra/Profil.php */
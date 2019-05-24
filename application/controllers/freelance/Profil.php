<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_login_freelance() == false)
	    {	     
	        redirect('freelance/login');
	    }	    

	    // if ($this->session->userdata('status_akun') == "EXPIRED") {
	    // 	 $this->session->set_flashdata('error', '
	    //         	$(document).ready(function(){
	    //         		toastr.error("Silahkan Uprade Menjadi Mitra Developer Pro", "Status Expired");
	    //         		});
	    //         	');
	    //         redirect('mitra/upgrade','refresh');
	    // }
	    //  if ($this->session->userdata('confirm') == "YES") {	    	
	    // 	 $this->session->set_flashdata('error', '
	    //         	$(document).ready(function(){
	    //         		toastr.error("Silahkan Lakukan Konfirmasi Pembayaran", "Akses ditolak");
	    //         		});
	    //         	');
	    //         redirect('mitra/transaksi','refresh');
	    // }
	}


	public function index()
	{
		$cek = $this->db->get_where('freelance_agen', array('id_freelance' => $this->session->userdata('id_freelance')))->row();
		// if ($cek->status_akun == "TRIAL") {
		// 	$date_exp = date_create($cek->expired_trial);
		// 	$date_now = date_create(date('Y-m-d'));
		// 	$diff = date_diff($date_now,$date_exp);
		// 	$data['minus'] = $diff->format("%a");
		// }elseif($cek->status_akun == "PRO") {
		// 	$date_exp = date_create($cek->expired_premium);
		// 	$date_now = date_create(date('Y-m-d'));
		// 	$diff = date_diff($date_now,$date_exp);
		// 	$data['minus'] = $diff->format("%a");
		// }
		$data['mitra'] = $cek;
		$data['project'] = $this->db->get_where('project', array('id_freelance' => $this->session->userdata('id_freelance')))->result();
		$data['content'] = 'freelance/profil';
		$this->load->view('freelance/index', $data);
	}

	public function edit()
	{
		$data['row'] = $this->db->get_where('freelance_agen', array('id_freelance' => $this->session->userdata('id_freelance')))->row();	
		$data['content'] = 'freelance/profil_wizard';
		$this->load->view('freelance/index', $data);
	}
	

	public function submit()
	{
      	$config['upload_path']          = './assets/backend/fotofreelance/';       	
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

    			$this->db->where('id_freelance', $this->input->post('id_freelance'));
      			$this->db->update('mitra', array('file_ktp' => $this->upload->file_name));    			
		}

		if (!empty($fotologo)) {
				$this->upload->do_upload('fotologo');
    			$image_upload = $this->upload->data();

    			$this->db->where('id_freelance', $this->input->post('id_freelance'));
      			$this->db->update('mitra', array('file_logo' => $this->upload->file_name));    			
		}

		if (!empty($fotobanner)) {
				$this->upload->do_upload('fotobanner');
    			$image_upload = $this->upload->data();

    			$this->db->where('id_freelance', $this->input->post('id_freelance'));
      			$this->db->update('mitra', array('file_banner' => $this->upload->file_name));    			
		}

	    $this->db->where('id_freelance', $this->input->post('id_freelance'));
      	$this->db->update('mitra', array(
      		'nama_freelance' => $this->input->post('nama'),
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
	
	public function get_project($id)
	{
		$data = $this->db->query("SELECT project.*, prov.nama_prov, kabkot.nama_kabkot, kec.nama_kec, (SELECT count(id_produk) FROM produk WHERE id_project = project.id_project) as jml FROM project JOIN prov ON project.prov = prov.id_prov JOIN kabkot ON project.kabkot = kabkot.id_kabkot JOIN kec ON project.kec = kec.id_kec WHERE project.id_project='$id'")->row();
		echo json_encode($data);
	}

	public function get_poi($id)
	{
		$data = $this->db->get_where('project_poi', array('id_project' => $id))->result();
		echo json_encode($data);
	}

	public function save_poi()
	{
		$this->db->insert('project_poi', array(
			'id_project' => $this->input->post('id'),
			'remark' => $this->input->post('remark')
		));
		redirect('freelance/profil','refresh');
	}

	public function del_poi($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('project_poi');
		redirect('freelance/profil','refresh');

	}
}	

/* End of file Profil.php */
/* Location: ./application/controllers/mitra/Profil.php */
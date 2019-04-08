<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_login_agen() == false)
	    {	     
	        redirect('agen/login');
	    }
	    $this->load->model('Mprofilagen');
	}

	public function index()
	{
		$cek = $this->Mprofilagen->show($this->session->userdata('id_agen'))->row();
		$premium = $this->db->get_where('agen_premium', array('id_agen' => $this->session->userdata('id_agen')));
		if ($premium->num_rows() > 0) {
			$arrayprem = $premium->row();
			$data['content_premium'] = '<div class="alert alert-success text-center" role="alert">
              <h3>Agen Premium</h3>
            </div>
            <p>Berlaku s/d '.$arrayprem->date_expired.'</p>';
		}else{
			$data['content_premium'] = '<div class="alert alert-danger text-center" role="alert">
              <h3>Agen Free</h3>
            </div>
            <button type="button" class="btn btn-success">Beralih ke Premium</button><p></p>
            <a href="">Apa keuntungan menjadi akun Premium ?</a>';
		}
		if ($cek->nomor_wa == "" || $cek->alamat == "" || $cek->provinsi == "" || $cek->kabkot == "") {
			$data['load'] = 'agen/profil_wizard';
		}else{
			$data['load'] = 'agen/profil_view';			
		}
		// $data['url'] = file_get_contents('http://tinyurl.com/api-create.php?url='.'http://juraganrumah.net/');
		$data['row'] = $cek;
		$data['prov'] = $this->db->get('prov')->result();		
		$data['content'] = 'agen/profil';
		$this->load->view('agen/index', $data);
	}

	public function edit()
	{		
		$data['load'] = 'agen/profil_wizard';		
		$data['row'] = $this->Mprofilagen->show($this->session->userdata('id_agen'))->row();
		$data['prov'] = $this->db->get('prov')->result();		
		$data['content'] = 'agen/profil';
		$this->load->view('agen/index', $data);	
	}

	public function completly()
	{
		$post = $this->input->post();
		$data = array(
			'nama_agen' => $post['nama'], 
			'nomor_wa' => $post['wa'], 
			'alamat' => $post['alamat'], 
			'provinsi' => $post['prov'], 
			'kabkot' => $post['kabkot'], 
			'ktp' => $post['noktp'], 
			'nama_bank' => $post['bank'], 
			'no_rekening' => $post['rekening'], 
			'atas_nama' => $post['atasnama'], 
			'username' => $post['username'], 
			'email' =>  $post['email']
		);
		$this->db->where('id_agen', $this->session->userdata('id_agen'));
		$this->db->update('agen', $data);
		redirect('agen/profil','refresh');
	}

	public function get_kabkot()
	{
		$id = $this->input->post('id');
		$data = $this->db->get_where('kabkot', array('id_prov' => $id))->result();
		echo json_encode($data);
	}

}

/* End of file Profil.php */
/* Location: ./application/controllers/agen/Profil.php */
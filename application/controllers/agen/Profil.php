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
		$cek2 = $this->db->get_where('agen', array('id_agen' => $this->session->userdata('id_agen')))->row();
		$premium = $this->db->get_where('agen_premium', array('id_agen' => $this->session->userdata('id_agen')));
		$arrayprem = $premium->row();
		if (empty($premium->num_rows())) {
			$data['content_premium'] = '<div class="alert alert-danger text-center" role="alert">
              <h3>Agen Free</h3>
            </div>
            <button type="button" class="btn btn-success">Beralih ke Premium</button><p></p>
            <a href="">Apa keuntungan menjadi akun Premium ?</a>';
		}elseif($arrayprem->status == "PROSES"){
			$data['content_premium'] = '<div class="alert alert-warning text-center" role="alert">
              <h3>Proses Pembayaran</h3>
            </div>
            <a href="'.base_url('agen/upgrade').'" class="btn btn-default">Cek Disini</a>	';
		}elseif($arrayprem->status == "SUBMIT"){
			$data['content_premium'] = '<div class="alert alert-warning text-center" role="alert">
              <h3>Proses Aktivasi</h3>
            </div>
            <a href="'.base_url('agen/upgrade').'" class="btn btn-default">Cek Disini</a>	';
		}elseif($arrayprem->status == "AKTIF"){
			$data['content_premium'] = '<div class="alert alert-success text-center" role="alert">
              <h3>Agen Premium</h3>
            </div>
            <p>Berlaku hingga '.date('d M Y', strtotime($arrayprem->date_expired)).'</p>';
		}

		if ($cek2->nomor_wa == "" || $cek2->alamat == "" || $cek2->provinsi == "" || $cek2->kabkot == "" || $cek2->ktp == "") {
			$data['load'] = 'agen/profil_wizard';
		}else{
			$data['load'] = 'agen/profil_view';			
		}
		$data['url'] = base_url('agen/link/'.$cek2->id_agen);			
		$data['row'] = $cek2;
		$data['row_view'] = $cek;
		$data['prov'] = $this->db->get('prov')->result();		
		$data['content'] = 'agen/profil';
		// print_r($cek);
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
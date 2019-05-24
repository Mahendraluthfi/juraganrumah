<?php



defined('BASEPATH') OR exit('No direct script access allowed');



class Profile_buyer extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('Validasiform_buyer');
		$this->load->model('M_registrasi_buyer');
        $this->load->helper(array('form', 'url','cookie'));
		$this->load->library('form_validation');
    }

	public function index()
	{
		$this->load->model('M_blog');
		$this->load->model('Martikel');
		$this->load->model('Login_buyer');
		$data['foto_buyer'] = $this->Login_buyer->profil_buyer()->result();
		$data['prov'] = $this->db->get('prov')->result();
		$data['newest'] = $this->db->query("SELECT * FROM artikel ORDER BY id_artikel desc LIMIT 3")->result();
		//$data['newest'] = $this->M_blog->get()->result();
		$data['newest_produk'] = $this->Martikel->get()->result();
		$data['content'] = 'buyer_profil';
		$this->load->view('home', $data);
	}
	public function profil_umum_view()
	{
		$this->load->model('M_blog');
		$this->load->model('Martikel');
		$this->load->model('Login_buyer');
		$data['prov'] = $this->db->get('prov')->result();
		$data['newest'] = $this->db->query("SELECT * FROM artikel ORDER BY id_artikel desc LIMIT 3")->result();
		//$data['newest'] = $this->M_blog->get()->result();
		$data['newest_produk'] = $this->Martikel->get()->result();
		$data['foto_buyer'] = $this->Login_buyer->profil_buyer()->result();
		$data['content'] = 'profil_umum_form';
		$this->load->view('home', $data);
	}
	public function profil_bank_view()
	{
		$this->load->model('M_blog');
		$this->load->model('Martikel');
		$this->load->model('Login_buyer');
		$data['prov'] = $this->db->get('prov')->result();
		$data['newest'] = $this->db->query("SELECT * FROM artikel ORDER BY id_artikel desc LIMIT 3")->result();
		//$data['newest'] = $this->M_blog->get()->result();
		$data['newest_produk'] = $this->Martikel->get()->result();
		$data['foto_buyer'] = $this->Login_buyer->profil_buyer()->result();
		$data['content'] = 'profil_bank_form';
		$this->load->view('home', $data);
	}
	public function profil_email_telepon_view()
	{
		$this->load->model('M_blog');
		$this->load->model('Martikel');
		$this->load->model('Login_buyer');
		$data['prov'] = $this->db->get('prov')->result();
		$data['newest'] = $this->db->query("SELECT * FROM artikel ORDER BY id_artikel desc LIMIT 3")->result();
		//$data['newest'] = $this->M_blog->get()->result();
		$data['newest_produk'] = $this->Martikel->get()->result();
		$data['foto_buyer'] = $this->Login_buyer->profil_buyer()->result();
		$data['content'] = 'profil_email_telepon_form.php';
		$this->load->view('home', $data);
	}

	public function profil_umum()
    {
    	$config['upload_path']          = './assets/fotobuyer/';       	
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['max_width']            = 1900;
        $config['max_height']           = 1200;
        $config['encrypt_name']         = true;


        $this->load->library('upload', $config);
		$foto = $_FILES["foto"]["name"];

		if (!empty($foto)) {
				$this->upload->do_upload('foto');
    			$image_upload = $this->upload->data();
    			$this->db->where('id_buyer',$this->session->userdata('ses_id'));
      			$this->db->update('buyer', array('file' => $this->upload->file_name));    			
		}

		$nama_buyer      = $this->input->post('firstname')." ".$this->input->post('lastname');
		$ktp       	     = $this->input->post('ktp');
		$tgl_lahir       = $this->input->post('tanggallahir');
		$tempat_lahir    = $this->input->post('tempatlahir');				
		$alamat      	 = $this->input->post('alamat');				
		$kecamatan       = $this->input->post('kecamatan');				
		$kabupaten       = $this->input->post('kabupaten');				
		$propinsi      	 = $this->input->post('propinsi');	


			$this->db->where('id_buyer', $this->session->userdata('ses_id'));
      		$this->db->update('buyer', array(
      		'nama_buyer' => $nama_buyer,
      		'tgl_lahir' => $tgl_lahir,
      		'tempat_lahir' => $tempat_lahir,
      		'ktp' => $ktp,
      		'alamat' => $alamat,
      		'provinsi' => $propinsi,
      		'kabkot' => $kabupaten, 
			'kecamatan' => $kecamatan
      	));
		$this->session->set_flashdata("sukses","Update Data Sukses");
		redirect('profile_buyer','refresh');
	}

	public function profil_bank()
    {			
		$norekening      = $this->input->post('norekening');				
		$namarekening    = $this->input->post('namarekening');				
		$bank       	 = $this->input->post('bank');	

		$this->db->where('id_buyer', $this->session->userdata('ses_id'));
      		$this->db->update('buyer', array(
      		'no_rekening' => $norekening,
      		'atas_nama' => $namarekening,
      		'nama_bank' => $bank
      	));
		$this->session->set_flashdata("sukses","Update Data Sukses");
		redirect('profile_buyer','refresh');
	}

	public function profil_email_telepon()
    {
		$no_wahatsapp    = $this->input->post('nowhatsapp');				
		$email      	 = $this->input->post('email');

		$this->db->where('id_buyer', $this->session->userdata('ses_id'));
      		$this->db->update('buyer', array(
      		'telepon' => $no_wahatsapp,
      		'email_buyer' => $email
      	));
		$this->session->set_flashdata("sukses","Update Data Sukses");
		redirect('profile_buyer','refresh');
	}

}

?>




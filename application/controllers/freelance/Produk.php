<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	 //   	$this->session->set_flashdata('error', '
  //           	$(document).ready(function(){
  //           		toastr.error("Fitur dalam pengembangan", "Belum Tersedia");
  //           		});
  //           	');
		// redirect('freelance/dashboard','refresh');
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
	    //         redirect('freelance/upgrade','refresh');
	    // }
	    //  if ($this->session->userdata('confirm') == "YES") {	    	
	    // 	 $this->session->set_flashdata('error', '
	    //         	$(document).ready(function(){
	    //         		toastr.error("Silahkan Lakukan Konfirmasi Pembayaran", "Akses ditolak");
	    //         		});
	    //         	');
	    //         redirect('freelance/transaksi','refresh');
	    // }
	    $this->load->model('Mproduk_mitra');
	}

	public function index()
	{
		$data['produk'] = $this->Mproduk_mitra->get_all_owner()->result();
		$data['content'] = 'freelance/produk';
		$this->load->view('freelance/index', $data);
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

	public function add()
	{	
		// $data['project'] = $this->db->get_where('project', array('id_freelance' => $this->session->userdata('id_freelance')))->result();
		$data['kode'] = "JP-".date('m').$this->acak(5);
		$data['ktg'] = $this->db->get_where('category_produk', array('status' => '1'))->result();
		$data['prov'] = $this->db->get('prov')->result();				
		$data['title'] = "Tambah Produk Baru";
		$data['content'] = 'freelance/produk_add';
		$this->load->view('freelance/index', $data);
	}

	public function edit($id)
	{
		$get = $this->db->get_where('produk', array('id_produk' => $id))->row();		
		$data['kabkot'] = $this->db->get_where('kabkot', array('id_kabkot' => $get->kabupaten))->row();		
		$data['kec'] = $this->db->get_where('kec', array('id_kec' => $get->kecamatan))->row();
		$data['row'] = $get;
		$data['project'] = $this->db->get_where('project', array('id_mitra' => $this->session->userdata('id_mitra')))->result();		
		$data['ktg'] = $this->db->get_where('category_produk', array('status' => '1'))->result();
		$data['prov'] = $this->db->get('prov')->result();				
		$data['title'] = "Edit Produk";
		$data['content'] = 'freelance/produk_edit';
		$this->load->view('freelance/index', $data);	
	}

	public function foto($id)
	{
		$data['foto'] = $this->Mproduk_mitra->get_foto($id)->result();
		$data['get'] = $this->db->get_where('produk', array('id_produk' => $id))->row();		
		$data['content'] = 'freelance/produk_foto';
		$this->load->view('freelance/index', $data);	
	}	

	public function submit_foto()
	{
		$data = array();

			// Count total files
			$countfiles = count($_FILES['files']['name']);
 			$id_produk = $this->input->post('id_produk');
			// Looping all files
			for($i=0;$i<$countfiles;$i++){
			   	
			   	if(!empty($_FILES['files']['name'][$i])){
					$nmfile = 'IMG-'.date('dHis'); 							
					// Define new $_FILES array - $_FILES['file']
			   		$_FILES['file']['name'] = $_FILES['files']['name'][$i];
			   		$_FILES['file']['type'] = $_FILES['files']['type'][$i];
			   		$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
			   		$_FILES['file']['error'] = $_FILES['files']['error'][$i];
			   		$_FILES['file']['size'] = $_FILES['files']['size'][$i];

					// Set preference
					$config['upload_path'] = './assets/backend/fotoproduk/';	
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['max_size']    = '5000';	// max_size in kb
					$config['file_name'] = $_FILES['files']['name'][$i];
						
					//Load upload library
					$this->load->library('upload',$config);			
					
					// File upload
					if($this->upload->do_upload('file')){
						// Get data about the file
						$uploadData = $this->upload->data();
						$filename = $uploadData['file_name'];

						$this->db->insert('foto_produk', array(
							'id_produk' => $id_produk,						
							'file' => $uploadData['file_name']
						));
						// Initialize array
						$data['filenames'][] = $filename;
					}
				}
			    
			}

			redirect('freelance/produk/foto/'.$id_produk,'refresh');
	}

	public function submit()
	{
		$post = $this->input->post();

		// $get = $this->db->get_where('project', array('id_project' => $post['project']))->row();

		$data = array(
			'id_produk' => $post['kode_produk'],
			'id_project' => 0,
			'id_mitra' => 0,
			'id_freelance' => $this->session->userdata('id_freelance'),
			'id_category_produk' => $post['ktg'],
			'nama_produk' => $post['nama_produk'],
			'luas_tanah' => $post['luas_tanah'],
			'luas_bangunan' => $post['luas_bangunan'],
			'harga' => $post['harga'],
			'harga_bawah' => $post['harga_bawah'],
			'harga_promo' => $post['harga_promo'],
			'unit' => $post['unit'],
			'jumlah_kamar_tidur' => $post['kamar_tidur'],
			'jumlah_kamar_mandi' => $post['kamar_mandi'],
			'watt_listrik' => $post['listrik'],
			'jumlah_tingkat' => $post['jumlah_lantai'],
			'hook_pojok' => $post['hook'],
			'furnished' => $post['furnished'],
			'jenis_air' => $post['jenis_air'],
			'hadap' => $post['hadap'],
			'carport' => $post['carport'],
			'sertifikat' => $post['sertifikat'],
			'description' => $post['deskripsi'],
			'status_post' => $post['status'],
			'provinsi' => $post['prov'],
			'kabupaten' => $post['kabkot'],
			'kecamatan' => $post['kec'],
			'alamat' => $post['alamat']
		);

		$this->db->insert('produk', $data);
		redirect('freelance/produk/foto/'.$post['kode_produk'],'refresh');		
	}

	public function submit_edit()
	{
		$post = $this->input->post();
		// $get_all = $this->db->get_where('project', array('id_project' => $post['project']))->row();
		$data = array(
			// 'id_mitra' => $this->session->userdata('id_mitra'),
			'id_category_produk' => $post['ktg'],
			// 'id_project' => $post['project'],
			'nama_produk' => $post['nama_produk'],			
			'luas_tanah' => $post['luas_tanah'],
			'luas_bangunan' => $post['luas_bangunan'],
			'harga' => $post['harga'],
			'harga_bawah' => $post['harga_bawah'],
			'harga_promo' => $post['harga_promo'],
			'unit' => $post['unit'],
			'jumlah_kamar_tidur' => $post['kamar_tidur'],
			'jumlah_kamar_mandi' => $post['kamar_mandi'],
			'watt_listrik' => $post['listrik'],
			'jumlah_tingkat' => $post['jumlah_lantai'],
			'hook_pojok' => $post['hook'],
			'furnished' => $post['furnished'],
			'jenis_air' => $post['jenis_air'],
			'hadap' => $post['hadap'],
			'carport' => $post['carport'],
			'status_post' => $post['status'],
			'description' => $post['deskripsi'],
			'sertifikat' => $post['sertifikat'],			
			'provinsi' => $post['prov'],
			'kabupaten' => $post['kabkot'],
			'kecamatan' => $post['kec'],
			'alamat' => $post['alamat']
		);

		// print_r($data);
		$this->db->where('id_produk', $post['kode_produk']);
		$this->db->update('produk', $data);
		redirect('freelance/produk','refresh');
	}

	public function delete($id,$foto,$idp)
	{
		$target = './assets/backend/fotoproduk/'.$foto;
		if (file_exists($target)) {
			unlink($target);
		}

		$this->db->where('id_foto', $id);
		$this->db->delete('foto_produk');

		redirect('freelance/produk/foto/'.$idp,'refresh');
	}

	public function get($id)
	{
		$data = $this->Mproduk_mitra->get_id_owner($id)->row();
		// $data = $this->db->get_where('produk', array('id_produk' => $id))->row();
		echo json_encode($data);
	}

	public function get_project()
	{
		$id = $this->input->post('id');
		$data = $this->Mproduk_mitra->get_project($id)->row();
		echo json_encode($data);
	}

	public function get_kabkot()
	{
		$id = $this->input->post('id');
		$data = $this->db->get_where('kabkot', array('id_prov' => $id))->result();
		echo json_encode($data);
	}

	public function get_kec()
	{
		$id = $this->input->post('id');
		$data = $this->db->get_where('kec', array('id_kabkot' => $id))->result();
		echo json_encode($data);
	}
}

/* End of file Produk.php */
/* Location: ./application/controllers/freelance/Produk.php */
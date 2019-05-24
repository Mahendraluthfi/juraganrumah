<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{		
		parent::__construct();
		if($this->auth->is_login_agen() == false)
	    {	     
	        redirect('agen/login');
	    }	 
	    $this->load->model('Mproduk');
	}

	public function index($offset=0)
	{
		$jml = $this->db->get('produk');
		$config['base_url'] = base_url().'agen/produk/index';
		$config['total_rows'] = $jml->num_rows();
		$config['per_page'] = 9;
		$config['uri_segment'] = 4;		
		$choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		
		$this->pagination->initialize($config);
		$data['offset'] = $offset;
		$data['halaman'] = $this->pagination->create_links();		
		$data['agen'] = "%26agen%3D".$this->session->userdata('id_agen');
		$data['produk'] = $this->Mproduk->agen_list($config['per_page'], $offset)->result();
		$data['content'] = 'agen/produk';
		$this->load->view('agen/index', $data);
	}

	public function search()
	{
		$get = $this->input->post('indikator');		
		if ($get == "1") {
			$indikator = "Lebih dari";
		}else{
			$indikator = "Kurang dari";			
		}
		$nominal = $this->input->post('nominal');
		$data['halaman'] = '';
		$data['label'] = $this->session->set_flashdata("label", "<h4>Pencarian Komisi $indikator ".number_format($nominal)."</h4>");
		$data['agen'] = "%26agen%3D".$this->session->userdata('id_agen');
		$data['produk'] = $this->Mproduk->list_search($get,$nominal)->result();
		$data['content'] = 'agen/produk';
		$this->load->view('agen/index', $data);	
	}

	public function get($id)
	{
		// $this->load->model('Mproduk');
		$data = $this->Mproduk->get_id($id)->row();		
		// $data = $this->db->get_where('produk', array('id_produk' => $id))->row();
		echo json_encode($data);
	}

	public function purchase($id)
	{
		$data['get'] = $this->Mproduk->get_id_purchase($id)->row();
		$data['content'] = 'agen/purchase';
		$this->load->view('agen/index', $data);		
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

	public function get_in()
	{
		$id_produk = $this->input->post('id_produk');
		$email = $this->input->post('email');
		$nama = $this->input->post('nama');
		$nohp = $this->input->post('nohp');
		$pass = $this->acak(8);
		$password = sha1($pass);

		$cekemail = $this->db->get_where('buyer', array('email_buyer' => $email))->num_rows();
		if ($cekemail > 0) {
			 $this->session->set_flashdata('error', '
	            	$(document).ready(function(){
	            		toastr.error("Email sudah terdaftar !", "Gagal !");
	            		});
	            	');
			 redirect('agen/produk/purchase/'.$id_produk,'refresh');
		}else{

			$this->load->library('phpmailer_lib');
	        $mail = $this->phpmailer_lib->load();
	        
	        $mail->isSMTP();
	        $mail->Host         = 'smtp.gmail.com';
	        $mail->SMTPAuth     = true;
	        $mail->Username     = 'help.juraganrumah@gmail.com';
	        $mail->Password     = 'ilodamnoke26';
	        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	        $mail->Port = 587; 
	        
	        $mail->setFrom('help.juraganrumah@gmail.com', 'Juragan Rumah');
	        
	        $mail->addAddress($email);
	                
	        $mail->Subject = 'Pendaftaran Buyer Juragan Rumah';
	               
	        $mail->isHTML(true);
	                            
	        $mailContent = "Selamat Datang di Juragan Rumah <br>
	        				Terima kasih <br>
							Pendaftaran Buyer Berhasil. Segera login ke Area Buyer dan lengkapi Profil Anda<p></p>

							Beranda Juragan Rumah : https://www.juraganrumah.net <br>
							Email : ".$email." <br>
							Password : ".$pass." <br>						
							<br>
							Salam sukses, <br>
							<br>
							Admin Juragan Rumah";
	        $mail->Body = $mailContent;
	        
	        // Send email
	        if(!$mail->send()){
	            echo 'Message could not be sent.';
	            echo 'Mailer Error: ' . $mail->ErrorInfo;
	        }else{
	            // echo 'Message has been sent';		       
				$now = strtotime(date("Y-m-d"));
				$date = date('Y-m-d', strtotime('+1 year', $now));
		       $this->db->insert('buyer', array(
		       		'id_agen' => $this->session->userdata('id_agen'),
		       		'nama_buyer' => $nama,
		       		'email_buyer' => $email,
		       		'telepon' => $nohp,
		       		'date_join' => date('Y-m-d'),
		       		'date_referral'    => date('Y-m-d'),
					'referral_expired' => $date,
		       		'password' => $password
		       ));
		       redirect('agen/produk/invoice/'.$id_produk.'/'.base64_encode($email),'refresh');
	        }	
	    }
	}

	public function invoice($id,$email)
	{
		// echo $id."<br>";
		// echo base64_decode($email);
		$data['produk'] = $this->db->get_where('produk', array('id_produk' => $id))->row();
		$data['buyer'] = $this->db->get_where('buyer', array('email_buyer' => base64_decode($email)))->row();
		$data['inv'] = $this->acak(6).date('m-d');
		$data['content'] = 'agen/invoice';
		$this->load->view('agen/index', $data);	
	}

	public function submit_purchase()
	{
		$buyer = $this->db->get_where('buyer', array('id_buyer' => $this->input->post('buyer')))->row();

		$this->load->library('phpmailer_lib');
        $mail = $this->phpmailer_lib->load();
        
        $mail->isSMTP();
        $mail->Host         = 'smtp.gmail.com';
        $mail->SMTPAuth     = true;
        $mail->Username     = 'help.juraganrumah@gmail.com';
        $mail->Password     = 'ilodamnoke26';
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587; 
        
        $mail->setFrom('help.juraganrumah@gmail.com', 'Juragan Rumah');
        
        $mail->addAddress($buyer->email_buyer);
                
        $mail->Subject = 'Invoice Pembelian Properti';
               
        $mail->isHTML(true);
                            	      
		$data['produk'] = $this->db->get_where('produk', array('id_produk' => $this->input->post('id_produk')))->row();
		$data['buyer'] = $buyer;
		$data['inv'] = $this->input->post('id_invoice');
		$data['tipe'] = $this->input->post('tipe');
		$mailContent = $this->load->view('agen/invoice_message', $data, TRUE);
        $mail->Body = $mailContent;
        
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
           
			$this->db->insert('transaksi', array(
				'id_transaksi' => $this->input->post('id_invoice'),
				'id_agen' => $this->session->userdata('id_agen'),
				'id_buyer' => $this->input->post('buyer'),
				'date' => date('Y-m-d'),
				'total_prize' => $this->input->post('ttl'),
				'tipe_bayar' => $this->input->post('tipe'),
				'status' => 'PROSES'
			));

			$this->db->insert('detail_transaksi', array(
				'id_transaksi' => $this->input->post('id_invoice'),
				'id_produk' => $this->input->post('id_produk'),
				'jml_unit' => '1',
				'harga' => $this->input->post('ttl'),
				'total' => $this->input->post('ttl')
			));
	       redirect('agen/produk','refresh');
        }		
	}

	public function cek()
	{
		// $db = $this->db->get('mitra')->result();

		// foreach ($db as $key) {
		// 	$a = str_replace(" ","-", $key->nama_perusahaan);
		// 	$b = str_replace(".", "-", $a);
		// 	$username = strtolower($b);			

		// 	$this->db->where('id_mitra', $key->id_mitra);
		// 	$this->db->update('mitra', array('username' => $username));
		// }

	}
}

/* End of file Produk.php */
/* Location: ./application/controllers/agen/Produk.php */
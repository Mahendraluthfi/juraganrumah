<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upgrade extends CI_Controller {

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
		$data['project'] = $this->db->get_where('project', array('id_mitra' => $this->session->userdata('id_mitra')))->num_rows();
		$data['mitra'] = $cek;
		if ($cek->status_akun == "TRIAL") {
			$date_exp = date_create($cek->expired_trial);
			$date_now = date_create(date('Y-m-d'));
			$diff = date_diff($date_now,$date_exp);
			$data['status']	 = '<div class="card card-hover">
                <div class="box bg-danger text-center">                    
                    <h4 class="text-white">'.$cek->status_akun.'</h4>
                    <h4 class="text-white">'.$diff->format("%a").' Hari Lagi</h4>
                    <h6 class="text-white">Berakhir pada '.date('d M Y', strtotime($cek->expired_trial)).'</h6>
                    <a href="'.base_url('mitra/upgrade/checkout/trial').'" class="btn btn-success">Upgrade Pro</a>
                </div>
            </div>';	
		}elseif($cek->status_akun == "PRO"){
			if ($cek->cek_bayar == 0) {
				$date_exp = date_create($cek->expired_premium);
				$date_now = date_create(date('Y-m-d'));
				$diff = date_diff($date_now,$date_exp);
				$data['status']	 = '<div class="card card-hover">
	                <div class="box bg-warning text-center">                    
	                    <h1 class="font-light text-white"><i class="mdi mdi-star-circle"></i> PRO</h1>
	                    <h6 class="text-white">Batas Pembayaran '.date('d M Y', strtotime($cek->expired_premium)).'</h6>
	                    <a href="'.base_url('mitra/transaksi').'" class="btn btn-info">Konfirmasi Pembayaran</a>
	                </div>
	            </div>';					
			}else{
				$date_exp = date_create($cek->expired_premium);
				$date_now = date_create(date('Y-m-d'));
				$diff = date_diff($date_now,$date_exp);
				$data['status']	 = '<div class="card card-hover">
	                <div class="box bg-success text-center">                    
	                    <h1 class="font-light text-white"><i class="mdi mdi-star-circle"></i> PRO</h1>
	                    <h6 class="text-white">Berakhir pada '.date('d M Y', strtotime($cek->expired_premium)).'</h6>
	                    
	                </div>
	            </div>';					
			}

		}else{
			$data['status']	 = '<div class="card card-hover">
                <div class="box bg-danger text-center">                    
                    <h1 class="font-light text-white"><i class="mdi mdi-star-circle"></i> EXPIRED</h1>
                    <h6 class="font-light text-white">Kami memberikan anda kesempatan 14 hari kedepan untuk Upgrade menjadi Mitra Pro</h6>                    
                    <a href="'.base_url('mitra/upgrade/checkout/trial').'" class="btn btn-success">Upgrade Pro</a>
                </div>
            </div>';	
		}
		$data['content'] = 'mitra/upgrade';
		$this->load->view('mitra/index', $data);	
	}

	public function checkout($id='',$jml='')
	{
		$this->load->model('Mproduk_mitra');
		$cek = $this->db->get_where('mitra', array('id_mitra' => $this->session->userdata('id_mitra')))->row();
		$cek2 = $this->Mproduk_mitra->cek_proses($this->session->userdata('id_mitra'))->num_rows();
		$kode = substr($cek->telepon, -3);
		if ($id == "trial") {
			if ($cek2 > 0) {
				 $this->session->set_flashdata('error', '
	            	$(document).ready(function(){
	            		toastr.error("Permintaan Upgrade anda sedang dalam proses", "Harap Menunggu");
	            		});
	            	');
	            redirect('mitra/upgrade','refresh');
			}else{
			$nominal = 3500000;
			$total = $nominal + $kode;
			$data['field'] = '<td class="text-center">1</td>
                <td>Aktivasi Akun Pro Mitra Developer Juragan Rumah</td>
                <td class="text-right">1 Paket Project</td>
                <td class="text-right"> 1 Tahun / 12 Bulan </td>
                <td class="text-right">'.number_format($nominal).'</td>         
                <td class="text-right">'.number_format($kode).'</td>         
                <td class="text-right">'.number_format($total).'</td>';
            $data['total'] = $total;
            $data['nominal'] = $nominal;
            $data['kode'] = $kode;
            $data['deskripsi'] = 'Aktivasi Akun Pro Mitra Developer Juragan Rumah';
            $data['qty'] = '1';
        	}
		}else{
			redirect('upgrade','refresh');
		}
		$data['row'] = $cek;		
		$data['inv'] = $this->session->userdata('inv');		
		$data['content'] = 'mitra/checkout_pro';
		$this->load->view('mitra/index', $data);
	}

	public function payment_submit()
	{
		$data = array(
			'id_mitra' => $this->session->userdata('id_mitra'),
			'id_inv' => $this->input->post('id_invoice'),
			'date' => date('Y-m-d'),
			'deskripsi' => $this->input->post('deskripsi'),
			'qty' => $this->input->post('qty'),
			'nominal' => $this->input->post('nominal'),
			'kode' => $this->input->post('kode'),
			'total' => $this->input->post('total'),			
			'status' => 'PROSES'						
		);

		$this->db->insert('mitra_transaksi', $data);
		$this->session->set_flashdata('error', '
	            	$(document).ready(function(){
                		toastr.success("Silahkan melakukan konfirmasi pembayaran", "Proses Checkout Berhasil");	            
	            		});
	            	');
		redirect('mitra/transaksi','refresh');
	}
}

/* End of file Upgrade.php */
/* Location: ./application/controllers/mitra/Upgrade.php */
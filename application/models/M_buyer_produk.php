<?php

    class M_buyer_produk extends CI_Model{

		function __construct(){

		parent::__construct();	

		/*if ($this->session->userdata('ses_email') != true){

        	redirect('index.php/login');

        }*/
        
	}


		  function adding($data,$table)
		  {
		    $this->db->insert($table,$data);
		  }

		function tampil_data_produk_terbaik()
        {
			$limit = 3;
			$this->db->select('*');
			$this->db->from('produk');
            $this->db->join('foto_produk', 'foto_produk.id_produk = produk.id_produk');
            $this->db->join('mitra', 'produk.id_mitra = mitra.id_mitra','left');
			//$this->db->where_not_in('mitra.status_akun', 'EXPIRED');
			$this->db->where('produk.harga_promo > ', 0);
			$this->db->group_by('produk.id_produk');
			$this->db->order_by('produk.id','DESC');
            $this->db->limit($limit);
			$db = $this->db->get();
			return $db;
		}
		function tampil_data_produk_rumah_beranda()
        {
			$limit = 3;
			$this->db->select('*');
			$this->db->from('produk');
            $this->db->join('foto_produk', 'foto_produk.id_produk = produk.id_produk');
            $this->db->join('mitra', 'produk.id_mitra = mitra.id_mitra','left');
			//$this->db->where_not_in('mitra.status_akun', 'EXPIRED');
			$this->db->where('produk.id_category_produk', 1);
			$this->db->group_by('produk.id_produk');
			$this->db->order_by('produk.id','DESC');
            $this->db->limit($limit);
			$db = $this->db->get();
			return $db;
		}
		function tampil_data_produk_rumah_subsidi_beranda()
        {
			$limit = 3;
			$this->db->select('*');
			$this->db->from('produk');
            $this->db->join('foto_produk', 'foto_produk.id_produk = produk.id_produk');
            $this->db->join('mitra', 'produk.id_mitra = mitra.id_mitra','left');
			//$this->db->where_not_in('mitra.status_akun', 'EXPIRED');
			$this->db->where('produk.id_category_produk', 6);
			$this->db->group_by('produk.id_produk');
			$this->db->order_by('produk.id','DESC');
            $this->db->limit($limit);
			$db = $this->db->get();
			return $db;
		}
		function tampil_data_produk_kost_beranda()
        {
			$limit = 3;
			$this->db->select('*');
			$this->db->from('produk');
            $this->db->join('foto_produk', 'foto_produk.id_produk = produk.id_produk');
            $this->db->join('mitra', 'produk.id_mitra = mitra.id_mitra','left');
			//$this->db->where_not_in('mitra.status_akun', 'EXPIRED');
			$this->db->where('produk.id_category_produk', 7);
			$this->db->group_by('produk.id_produk');
			$this->db->order_by('produk.id','DESC');
            $this->db->limit($limit);
			$db = $this->db->get();
			return $db;
		}
		function tampil_data_produk_apartement_beranda()
        {
			$limit = 3;
			$this->db->select('*');
			$this->db->from('produk');
            $this->db->join('foto_produk', 'foto_produk.id_produk = produk.id_produk');
            $this->db->join('mitra', 'produk.id_mitra = mitra.id_mitra','left');
			//$this->db->where_not_in('mitra.status_akun', 'EXPIRED');
			$this->db->where('produk.id_category_produk', 5);
			$this->db->group_by('produk.id_produk');
			$this->db->order_by('produk.id','DESC');
            $this->db->limit($limit);
			$db = $this->db->get();
			return $db;
		}
		function tampil_data_produk_kavling_beranda()
        {
			$limit = 3;
			$this->db->select('*');
			$this->db->from('produk');
            $this->db->join('foto_produk', 'foto_produk.id_produk = produk.id_produk');
            $this->db->join('mitra', 'produk.id_mitra = mitra.id_mitra','left');
			//$this->db->where_not_in('mitra.status_akun', 'EXPIRED');
			$this->db->where('produk.id_category_produk', 3);
			$this->db->group_by('produk.id_produk');
			$this->db->order_by('produk.id','DESC');
            $this->db->limit($limit);
			$db = $this->db->get();
			return $db;
		}
		function tampil_data_produk_ruko_beranda()
        {
			$limit = 3;
			$this->db->select('*');
			$this->db->from('produk');
            $this->db->join('foto_produk', 'foto_produk.id_produk = produk.id_produk');
            $this->db->join('mitra', 'produk.id_mitra = mitra.id_mitra','left');
			//$this->db->where_not_in('mitra.status_akun', 'EXPIRED');
			$this->db->where('produk.id_category_produk', 8);
			$this->db->group_by('produk.id_produk');
			$this->db->order_by('produk.id','DESC');
            $this->db->limit($limit);
			$db = $this->db->get();
			return $db;
		}
		function tampil_data_produk()
        {
			$limit = 5;
			$this->db->select('*');
			$this->db->from('produk');
            $this->db->join('foto_produk', 'foto_produk.id_produk = produk.id_produk');
            $this->db->join('mitra', 'produk.id_mitra = mitra.id_mitra','left');
			//$this->db->where_not_in('mitra.status_akun', 'EXPIRED');
			$this->db->group_by('produk.id_produk');
			$this->db->order_by('produk.id','DESC');
            $this->db->limit($limit);
			$db = $this->db->get();
			return $db;
		}

		function tampil_data_produk_rumah($limit, $start)

        {
			$this->db->select('*');
			$this->db->from('produk');
            $this->db->join('foto_produk', 'foto_produk.id_produk = produk.id_produk');
            $this->db->join('mitra', 'produk.id_mitra = mitra.id_mitra','left');
			//$this->db->where_not_in('mitra.status_akun', 'EXPIRED');
			$this->db->where('produk.id_category_produk', 1);
			$this->db->group_by('produk.id_produk');
			$this->db->order_by('produk.id','DESC');
			$this->db->limit($limit, $start);
			$db = $this->db->get();
			return $db;
        }

        function tampil_data_produk_apartement($limit, $start)
        {
			$this->db->select('*');
            $this->db->join('foto_produk', 'foto_produk.id_produk = produk.id_produk');
			$this->db->where('produk.id_category_produk', 5);
			$this->db->group_by('produk.id_produk');
			$this->db->order_by('produk.id','DESC');
			$db = $this->db->get('produk', $limit, $start);
			return $db;
        }

        function tampil_data_produk_kavling($limit, $start)
        {
			$this->db->select('*');
            $this->db->join('foto_produk', 'foto_produk.id_produk = produk.id_produk');
            $this->db->join('mitra', 'produk.id_mitra = mitra.id_mitra','left');
			//$this->db->where_not_in('mitra.status_akun', 'EXPIRED');
			$this->db->where('produk.id_category_produk', 3);
			$this->db->group_by('produk.id_produk');
			$this->db->order_by('produk.id','DESC');
			$db = $this->db->get('produk', $limit, $start);
			return $db;
        }

        function tampil_data_produk_ruko($limit, $start)

        {
			$this->db->select('*');
            $this->db->join('foto_produk', 'foto_produk.id_produk = produk.id_produk');
            $this->db->join('mitra', 'produk.id_mitra = mitra.id_mitra','left');
			//$this->db->where_not_in('mitra.status_akun', 'EXPIRED');
			$this->db->where('produk.id_category_produk', 8);
			$this->db->group_by('produk.id_produk');
			$this->db->order_by('produk.id','DESC');
			$db = $this->db->get('produk', $limit, $start);
			return $db;
        }

        function tampil_data_produk_kost($limit, $start)
        {
			$this->db->select('*');
            $this->db->join('foto_produk', 'foto_produk.id_produk = produk.id_produk');
            $this->db->join('mitra', 'produk.id_mitra = mitra.id_mitra','left');
			//$this->db->where_not_in('mitra.status_akun', 'EXPIRED');
			$this->db->where('produk.id_category_produk', 7);
			$this->db->group_by('produk.id_produk');
			$this->db->order_by('produk.id','DESC');
			$db = $this->db->get('produk', $limit, $start);
			return $db;
        }

        function tampil_data_produk_subsidi($limit, $start)
        {
			$this->db->select('*');
            $this->db->join('foto_produk', 'foto_produk.id_produk = produk.id_produk');
            $this->db->join('mitra', 'produk.id_mitra = mitra.id_mitra','left');
			//$this->db->where_not_in('mitra.status_akun', 'EXPIRED');
			$this->db->where('produk.id_category_produk', 6);
			$this->db->group_by('produk.id_produk');
			$this->db->order_by('produk.id','DESC');
			$db = $this->db->get('produk', $limit, $start);
			return $db;
        }

		function tampil_data_produk_cart()
        {
        	$id_buyer = $this->session->userdata('ses_id');
			$this->db->select('*');
            $this->db->from('shopping_cart');
            $this->db->join('produk', 'produk.id_produk = shopping_cart.id_produk');
            $this->db->join('foto_produk', 'foto_produk.id_produk = produk.id_produk');
            //$this->db->join('survei', 'survei.id_buyer = shopping_cart.id_buyer');
			$this->db->group_by('shopping_cart.id_shop');
			$this->db->where('shopping_cart.id_buyer', $id_buyer);
			$db = $this->db->get();
			return $db;
		}        
		function tampil_data_produk_checkout()
        {
        	$id_buyer = $this->session->userdata('ses_id');
        	$id_shop = $this->session->userdata('ses_shop');
			$this->db->select('*');
            $this->db->from('shopping_cart');
            $this->db->join('produk', 'produk.id_produk = shopping_cart.id_produk');
            $this->db->join('foto_produk', 'foto_produk.id_produk = produk.id_produk');	
			$this->db->group_by('shopping_cart.id_shop');
			$this->db->where('id_buyer', $id_buyer);
			$this->db->where('id_shop', $id_shop);
			$db = $this->db->get();
			return $db;
		}        

		function tampil_data_detail_produk_foto()
        {
			$id_produk = $this->input->get('id_produk');
			$this->db->from('foto_produk');
			$this->db->where('id_produk', $id_produk);
			$db = $this->db->get();
			return $db;
        }

        function meta_produk_detail_foto()
        {
        $limit = 1;
        $id_produk = $this->input->get('id_produk');
        $this->db->from('foto_produk');
		$this->db->where('id_produk', $id_produk);
		$this->db->order_by("id_produk", "DESC");
		$this->db->limit($limit);
		$query = $this->db->get();
		return $query;
		}

        function tampil_data_detail_produk()
        {
			$id_produk = $this->input->get('id_produk');
			$this->db->select('*, project.alamat as almt');
			$this->db->from('produk');
            $this->db->join('foto_produk', 'foto_produk.id_produk = produk.id_produk');
            $this->db->join('prov', 'produk.provinsi = prov.id_prov');
            $this->db->join('kabkot', 'produk.kabupaten = kabkot.id_kabkot');
            $this->db->join('kec', 'produk.kecamatan = kec.id_kec');
            $this->db->join('project_poi', 'produk.id_project = project_poi.id_project','Left');
            $this->db->join('project', 'project.id_mitra = produk.id_mitra','Left');
            $this->db->join('mitra', 'produk.id_mitra = mitra.id_mitra','Left');
            $this->db->group_by('produk.id_produk');
            //$this->db->where_not_in('mitra.status_akun', 'EXPIRED');
            $this->db->where('produk.id_produk', $id_produk);			
			$db = $this->db->get();
			return $db;
        }

        function tampil_data_produk_all($limit, $start)
        {
			$this->db->select('*');
            $this->db->join('foto_produk', 'foto_produk.id_produk = produk.id_produk');
            $this->db->join('mitra', 'produk.id_mitra = mitra.id_mitra','left');
			//$this->db->where_not_in('mitra.status_akun', 'EXPIRED');
			$this->db->group_by('produk.id_produk');
			$this->db->order_by('id','DESC');
			$db = $this->db->get('produk', $limit, $start);
			return $db;
		}

		function tampil_data_produk_pencarian_beranda($limit, $start)
		{
			$data1 = $this->input->post('nama_produk');
			$data2 = $this->input->post('provinsi');
			$data3 = $this->input->post('kabupaten');
			$data4 = $this->input->post('kecamatan');
			$data5 = $this->input->post('urutan');	
				$this->db->select('*');
	            $this->db->join('foto_produk', 'foto_produk.id_produk = produk.id_produk');
				$this->db->like('produk.nama_produk', $data1)->or_where('produk.provinsi', $data2)->or_where('produk.kabupaten', $data3)->or_where('produk.kecamatan', $data4);
				$this->db->group_by('produk.id_produk');
				if($this->input->post('urutan')){
					$this->db->order_by('produk.harga', $data5);
				}else{
					$this->db->order_by('produk.id','DESC');
				}
				return $this->db->get('produk', $limit, $start);
		}
    }

?>
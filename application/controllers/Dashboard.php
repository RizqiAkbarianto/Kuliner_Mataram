<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pelanggan_model');		
		$this->load->model('produk_model');
		// halaman diproteksi dengan simbol pelanggan cek login
		$this->simple_pelanggan->cek_login();
	}

	public function index()
	{
		
	}

	public function profil()
	{	$this->simple_pelanggan->cek_login();
		$data = array(	'title' => 'Halaman Profil',
			'isi'	=> 'dasbor/list'
		);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function produk()
	{	$this->simple_pelanggan->cek_akses();
		// konfigurasi model sdh dibuat sewaktu membuat konfigurasi di autoload
		$site = $this->konfigurasi_model->listing();
		// $users = $this->user_model->read();
		$id_user = $this->session->userdata('id');

		// tampilkan listing kategori
		// $listing_kategori = $this->produk_model->listing_kategori();
		// mangambil data total
		$total = $this->produk_model->total_produk2($id_user);
		// paginasi mulai

		
		$config['base_url'] 			= base_url() . '/dashboard/produk/';
		$config['total_rows'] 			= $total->total;
		$config['use_page_number'] 		= TRUE;
		$config['per_page'] 			= 9;
		$config['uri_segment'] 			= 3;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] 			= floor($choice);
		$config['full_tag_open'] 		= '<ul class="pagination">';
		$config['full_tag_close'] 		= '</ul>';
		$config['first_link'] 			= 'First';
		$config['first_tag_open'] 		= '<li>';
		$config['first_tag_close'] 		= '</li>';
		$config['last_link'] 			= 'Last';
		$config['last_tag_open'] 		= '<li class="disabled" ><li class="active" ><a href="#">';
		$config['last_tag_close'] 		= '<span class="sr-only"></a></li></li>';
		$config['next_link'] 			= '&gt;';
		$config['next_tag_open'] 		= '<div>';
		$config['next_tag_close'] 		= '</div>';
		$config['prev_link'] 			= '&lt;';
		$config['prev_tag_open'] 		= '<div>';
		$config['prev_tag_close'] 		= '</div>';
		$config['cur_tag_open'] 		= '<b>';
		$config['cur_tag_close'] 		= '</b>';

		$this->load->library('pagination');

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		// $produk = $this->produk_model->produk($config['per_page'], $config['uri_segment']);

		$produk = $this->produk_model->produk2($id_user,$config['per_page'], $page);

		$data = array(	'title' 			=> 'Produk Anda',
						'site' 				=> $site,
						// 'listing_kategori' 	=> $listing_kategori,
						'produk' 			=> $produk,
						'pagin' 			=> $this->pagination->create_links(),
						'isi'				=> 'dasbor/produk'
		);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function tersimpan()
	{
		$this->simple_pelanggan->cek_login();
		// konfigurasi model sdh dibuat sewaktu membuat konfigurasi di autoload
		$site = $this->konfigurasi_model->listing();
		// $users = $this->user_model->read();
		$id_user = $this->session->userdata('id');

		// tampilkan listing kategori
		// $listing_kategori = $this->produk_model->listing_kategori();
		// mangambil data total
		$total = $this->produk_model->total_produk3($id_user);
		// paginasi mulai

		
		$config['base_url'] 			= base_url() . '/dashboard/tersimpan/';
		$config['total_rows'] 			= $total->total;
		$config['use_page_number'] 		= TRUE;
		$config['per_page'] 			= 9;
		$config['uri_segment'] 			= 3;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] 			= floor($choice);
		$config['full_tag_open'] 		= '<ul class="pagination">';
		$config['full_tag_close'] 		= '</ul>';
		$config['first_link'] 			= 'First';
		$config['first_tag_open'] 		= '<li>';
		$config['first_tag_close'] 		= '</li>';
		$config['last_link'] 			= 'Last';
		$config['last_tag_open'] 		= '<li class="disabled" ><li class="active" ><a href="#">';
		$config['last_tag_close'] 		= '<span class="sr-only"></a></li></li>';
		$config['next_link'] 			= '&gt;';
		$config['next_tag_open'] 		= '<div>';
		$config['next_tag_close'] 		= '</div>';
		$config['prev_link'] 			= '&lt;';
		$config['prev_tag_open'] 		= '<div>';
		$config['prev_tag_close'] 		= '</div>';
		$config['cur_tag_open'] 		= '<b>';
		$config['cur_tag_close'] 		= '</b>';

		$this->load->library('pagination');

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		// $produk = $this->produk_model->produk($config['per_page'], $config['uri_segment']);

		$produk = $this->produk_model->produk3($id_user,$config['per_page'], $page);

		$data = array(	'title' 			=> 'Produk Tersimpan',
						'site' 				=> $site,
						// 'listing_kategori' 	=> $listing_kategori,
						'produk' 			=> $produk,
						'pagin' 			=> $this->pagination->create_links(),
						'isi'				=> 'dasbor/tersimpan'
		);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function pengaturan()
	{
		$data = array(	'title' => 'Pengaturan Akun',
			'isi'	=> 'dasbor/pengaturan'
		);
		$this->load->view('layout/wrapper', $data, FALSE);
	}


}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
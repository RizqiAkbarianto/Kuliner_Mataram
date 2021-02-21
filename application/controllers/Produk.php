<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {


	// load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');
		$this->load->model('kategori_model');

	}

	// listing data produk
	public function index()
	{
		// konfigurasi model sdh dibuat sewaktu membuat konfigurasi di autoload
		$site = $this->konfigurasi_model->listing();
		// tampilkan listing kategori
		$listing_kategori = $this->produk_model->listing_kategori();
		// mangambil data total
		$total = $this->produk_model->total_produk();
		// paginasi mulai

		$this->load->library('pagination');
		$config['base_url'] 			= base_url() . '/produk/index/';
		$config['total_rows'] 			= $total->total;
		$config['use_page_number'] 		= TRUE;
		$config['per_page'] 			= 9;
		$config['uri_segment'] 			= $this->uri->segment(3);
		$config['num_links'] 			= 5;
		$config['full_tag_open'] 		= '<ul class="pagination">';
		$config['full_tag_close'] 		= '</ul>';
		$config['first_link'] 			= false;
		$config['last_link'] 			= false;
		$config['first_tag_open'] 		= '<li class="page-item">';
		$config['first_tag_close'] 		= '</li>';
		$config['prev_link'] 			= '&laquo';
		$config['prev_tag_open'] 		= '<li class="page-item prev">';
		$config['prev_tag_close'] 		= '</li>';
		$config['next_link'] 			= '&raquo';
		$config['next_tag_open'] 		= '<li class="page-item next">';
		$config['next_tag_close'] 		= '</li>';
		$config['last_tag_open'] 		= '<li class="page-item">';
		$config['last_tag_close'] 		= '</li>';
		$config['cur_tag_open'] 		= '<li class="page-item "><a class="page-link">';
		$config['cur_tag_close'] 		= '</a></li>';
		$config['num_tag_open'] 		= '<li class="page-item">';
		$config['num_tag_close'] 		= '</li>';

		$this->pagination->initialize($config);

		$produk = $this->produk_model->produk($config['per_page'], $config['uri_segment']);

		$data = array(	'title' => 'Produk',
						'site' => $site,
						'listing_kategori' => $listing_kategori,
						'produk' => $produk,
						'pagin' => $this->pagination->create_links(),
						'isi' => 'produk/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// listong data kategori produk
	public function kategori($slug_kategori)
	{

		// data kategori
		$kategori = $this->kategori_model->read($slug_kategori);
		$id_kategori = $kategori->id_kategori;
		// data global

		$site = $this->konfigurasi_model->listing();
		// konfigurasi model sdh dibuat sewaktu membuat konfigurasi di autoload

		// tampilkan listing kategori
		$listing_kategori =  $this->produk_model->listing_kategori();

		// mangambil data total
		$total 			= $this->produk_model->total_kategori($id_kategori);

		// paginasi mulai

		$this->load->library('pagination');
		
		$config['base_url'] 			= base_url().'produk/kategori/'.$slug_kategori.'/index/';
		$config['total_rows'] 			= $total->total;
		$config['use_page_number']		= TRUE;
		$config['per_page'] 			= 3;
		// $config['per_page2'] 			= 3;
		$config['uri_segment'] 			= $this->uri->segment(5);
		$config['num_links'] 			= 5;
		$config['full_tag_open'] 		= '<ul class="pagination">';
		$config['full_tag_close'] 		= '</ul>';
		$config['first_link'] 			= 'First';
		$config['first_tag_open'] 		= '<li>';
		$config['first_tag_close'] 		= '</li>';
		$config['last_link'] 			= 'Last';
		$config['last_tag_open'] 		= '<li class=""><li class="active"><a href="#">';
		$config['last_tag_close'] 		= '<span class="sr-only"></a></li></li>';
		$config['next_link'] 			= '&gt;';
		$config['next_tag_open'] 		= '<div>';
		$config['next_tag_close'] 		= '</div>';
		$config['prev_link'] 			= '&lt;';
		$config['prev_tag_open'] 		= '<div>';
		$config['prev_tag_close'] 		= '</div>';
		$config['cur_tag_open'] 		= '<b>';
		$config['cur_tag_close'] 		= '</b>';
		$config['first_url']			= base_url().'/produk/kategori/'.$slug_kategori;
		
		$this->pagination->initialize($config);
		
		// ambil data produk
		// $page 	= ($this->uri->segment(5)) ? ($this->uri->segment(5)-1) * $config['per_page'] : 0;
		// $produk = $this->produk_model->kategori($id_kategori, $config['per_page'],$page);
		$produk = $this->produk_model->kategori($id_kategori, $config['per_page'], $config['uri_segment']);

		// paginasi selesai

		$data = array( 	'title'				=> $kategori->nama_kategori,
						'site'				=> $site,
						'listing_kategori'	=> $listing_kategori,
						'produk'			=> $produk,
						'pagin'				=> $this->pagination->create_links(),
						'isi'				=> 'produk/list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}


	// detai produk
	public function detail($slug_produk)
	{

		$site 			= $this->konfigurasi_model->listing();
		$review 		= $this->produk_model->listing_review($slug_produk);
		$produk 		= $this->produk_model->read($slug_produk);
		$id_produk		= $produk->id_produk;
		$gambar 		= $this->produk_model->gambar($id_produk);
		$produk_related	= $this->produk_model->home();

		$data = array( 	'title'				=> $produk->nama_produk,
						'site'				=> $site,
						'review'			=> $review,
						'produk'			=> $produk,
						'produk_related'	=> $produk_related,
						'gambar'			=> $gambar,
						'isi'				=> 'produk/detail'
					);
		$this->load->view('layout/wrapper', $data, FALSE);


	}

	
}

/* End of file Produk.php */
/* Location: ./application/controllers/Produk.php */
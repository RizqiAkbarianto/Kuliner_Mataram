<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promosi extends CI_Controller {


	// load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('promosi_model');
		// $this->load->model('kategori_model');

	}

	// listing data promosi
	public function index()
	{
		// konfigurasi model sdh dibuat sewaktu membuat konfigurasi di autoload
		$site = $this->konfigurasi_model->listing();
		// tampilkan listing kategori
		// $listing_kategori = $this->promosi_model->listing_kategori();
		// mangambil data total
		$total = $this->promosi_model->total_promosi();
		// paginasi mulai

		$this->load->library('pagination');
		$config['base_url'] 			= base_url() . '/promosi/index/';
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

		$promosi = $this->promosi_model->promosi($config['per_page'], $config['uri_segment']);

		$data = array(	'title' => 'Promosi',
						'site' => $site,
						// 'listing_kategori' => $listing_kategori,
						'promosi' => $promosi,
						'pagin' => $this->pagination->create_links(),
						'isi' => 'promosi/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// listong data kategori promosi
	// public function kategori($slug_kategori)
	// {

	// 	// data kategori
	// 	$kategori = $this->kategori_model->read($slug_kategori);
	// 	$id_kategori = $kategori->id_kategori;
	// 	// data global

	// 	$site = $this->konfigurasi_model->listing();
	// 	// konfigurasi model sdh dibuat sewaktu membuat konfigurasi di autoload

	// 	// tampilkan listing kategori
	// 	$listing_kategori =  $this->promosi_model->listing_kategori();

	// 	// mangambil data total
	// 	$total 			= $this->promosi_model->total_kategori($id_kategori);

	// 	// paginasi mulai

	// 	$this->load->library('pagination');
		
	// 	$config['base_url'] 			= base_url().'promosi/kategori/'.$slug_kategori.'/index/';
	// 	$config['total_rows'] 			= $total->total;
	// 	$config['use_page_number']		= TRUE;
	// 	$config['per_page'] 			= 3;
	// 	// $config['per_page2'] 			= 3;
	// 	$config['uri_segment'] 			= $this->uri->segment(5);
	// 	$config['num_links'] 			= 5;
	// 	$config['full_tag_open'] 		= '<ul class="pagination">';
	// 	$config['full_tag_close'] 		= '</ul>';
	// 	$config['first_link'] 			= 'First';
	// 	$config['first_tag_open'] 		= '<li>';
	// 	$config['first_tag_close'] 		= '</li>';
	// 	$config['last_link'] 			= 'Last';
	// 	$config['last_tag_open'] 		= '<li class=""><li class="active"><a href="#">';
	// 	$config['last_tag_close'] 		= '<span class="sr-only"></a></li></li>';
	// 	$config['next_link'] 			= '&gt;';
	// 	$config['next_tag_open'] 		= '<div>';
	// 	$config['next_tag_close'] 		= '</div>';
	// 	$config['prev_link'] 			= '&lt;';
	// 	$config['prev_tag_open'] 		= '<div>';
	// 	$config['prev_tag_close'] 		= '</div>';
	// 	$config['cur_tag_open'] 		= '<b>';
	// 	$config['cur_tag_close'] 		= '</b>';
	// 	$config['first_url']			= base_url().'/promosi/kategori/'.$slug_kategori;
		
	// 	$this->pagination->initialize($config);
		
	// 	// ambil data promosi
	// 	// $page 	= ($this->uri->segment(5)) ? ($this->uri->segment(5)-1) * $config['per_page'] : 0;
	// 	// $promosi = $this->promosi_model->kategori($id_kategori, $config['per_page'],$page);
	// 	$promosi = $this->promosi_model->kategori($id_kategori, $config['per_page'], $config['uri_segment']);

	// 	// paginasi selesai

	// 	$data = array( 	'title'				=> $kategori->nama_kategori,
	// 					'site'				=> $site,
	// 					'listing_kategori'	=> $listing_kategori,
	// 					'promosi'			=> $promosi,
	// 					'pagin'				=> $this->pagination->create_links(),
	// 					'isi'				=> 'promosi/list'
	// 				);
	// 	$this->load->view('layout/wrapper', $data, FALSE);
	// }


	// detai promosi
	public function detail($slug_promosi)
	{

		$site 			= $this->konfigurasi_model->listing();
		$promosi 		= $this->promosi_model->read($slug_promosi);
		$id_promosi		= $promosi->id_promosi;
		$gambar 		= $this->promosi_model->gambar($id_promosi);
		$promosi_related	= $this->promosi_model->home();

		$data = array( 	'title'				=> $promosi->nama_promosi,
						'site'				=> $site,
						'promosi'			=> $promosi,
						'promosi_related'	=> $promosi_related,
						'gambar'			=> $gambar,
						'isi'				=> 'promosi/detail'
					);
		$this->load->view('layout/wrapper', $data, FALSE);


	}

	
}

/* End of file Promosi.php */
/* Location: ./application/controllers/Promosi.php */
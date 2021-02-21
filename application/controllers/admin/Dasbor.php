<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {
// load model
	public function __construct()
	{
		parent::__construct();
		// proteksi halaman 
		$this->simple_login->cek_login();
		$this->load->model('produk_model');
		$this->load->model('kategori_model');
		$this->load->model('user_model');

	}
	
	//Halaman uatama dasbor 
	public function index()
	{
		$produk = $this->produk_model->listing();
		$kategori = $this->kategori_model->listing();
		$user = $this->user_model->listing();
		$data = array(  'title'  =>  'Halaman Administrator', 

			'isi'     => 'admin/dasbor/list',
			'total_produk' => $this->produk_model->count_all_products(),
			'total_kategori' => $this->kategori_model->count_all_kategori(),
			'total_user' => $this->user_model->count_all_user(),
			'produk'    => $produk,
			'kategori'    => $kategori,
			'user'    => $user,
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);


		// $overview['total_produk'] = $this->produk_model->count_all_products();
	}

}

/* End of file Dasbor.php */
/* Location: ./application/controllers/admin/Dasbor.php */
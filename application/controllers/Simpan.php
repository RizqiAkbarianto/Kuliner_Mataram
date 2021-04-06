<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simpan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');
		
	}

	public function index()
	{
		
	}

	public function tambah()
	{
		$i = $this->input;
		$data = array(  
			"id_produk"			=>$i->post('id_produk'),
			"id_user"			=>$this->session->userdata('id'),
			'nama_produk'		=>$i->post('nama_produk'),
			"gambar" 			=>$i->post('gambar'),
			'tanggal_tersimpan'	=>date('Y-m-d H:i:s')
		);
		$this->produk_model->simpan($data);
		redirect(base_url('home'),'refresh');
	}

}

/* End of file Simpan.php */
/* Location: ./application/controllers/Simpan.php */
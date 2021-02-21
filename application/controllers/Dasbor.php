<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pelanggan_model');
		// halaman diproteksi dengan simbol pelanggan cek login
		$this->simple_pelanggan->cek_login();
	}

	public function index()
	{
		$data = array(	'title' => 'Halaman Profil',
						'isi'	=> 'dasbor/list'
						 );
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Dasbor.php */
/* Location: ./application/controllers/Dasbor.php */
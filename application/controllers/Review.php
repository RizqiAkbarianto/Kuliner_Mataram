<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');
	}

	public function index()
	{
		$produk = $this->produk_model->listing_review($id_produk);
		$data = array(  
			'produk'	=> $produk,
			'review'    => $review
		);
		$this->load->view('produk/detail/'.$produk->slug_produk, $data, FALSE);
	}

	public function tambah()
	{
		// $review = $this->produk_model->review($id_produk);
		$i = $this->input;
		// $produk 	= $this->produk_model->read($slug_produk);

		$data = array(  
			"id_produk"		=>$i->post('id_produk'),
			"id_user"		=>$this->session->userdata('id'),
			'nama'			=>$this->session->userdata('nama'),
			"review" 		=>$i->post('review')
		);
		$this->produk_model->review($data);
		redirect(base_url('home'),'refresh');
		// refresh
	}

}

/* End of file Review.php */
/* Location: ./application/controllers/Review.php */
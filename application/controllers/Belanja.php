<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belanja extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');
		$this->load->model('kategori_model');
		$this->load->model('konfigurasi_model');
	}
	// halamaan belaja
	public function index()
	{
		$keranjang = $this->cart->contents();

		$data = array(	'title'				=> 'Keranjang Belanja',
			'keranjang'			=> $keranjang,
			'isi'				=> 'belanja/list'
		);

		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// checkout
	public function checkout()
	{
		// cek pelanggan telah login atau belum jika blm maka harus regitrasi dan login
		// checking by session email

		// kondisi telah login
		if ($this->session->userdata('email')) {
			# code...
		}else{
			// kalo belum login
			$this->session->set_flashdata('sukses', 'Silahkan Login atau Registrasi Terlebih Dahulu');
			redirect(base_url('registrasi'),'refresh');
		}

	}

	// tambahkan ke keranjang belaja
	public function add()
	{
		// ambil data dari form
		$id 			= $this->input->post('id');
		$qty 			= $this->input->post('qty');
		$price 			= $this->input->post('price');
		$name 			= $this->input->post('name');
		$redirect_page 	= $this->input->post('redirect_page');
		// proses memasukan ke keranjang belanja
		$data = array(	'id'				=> $id,
			'qty'				=> $qty,
			'price'				=> $price,
			'name'				=> $name
		);
		$this->cart->insert($data);
		// redirect page
		redirect($redirect_page,'refresh');
	}

	// update cart
	public function update_cart($rowid)
	{
		// jika ada row id
		if ($rowid) {
			$data = array(	'rowid' => $rowid,
							'qty'	=> $this->input->post('qty')
							 );
			$this->cart->update($data);
			$this->session->set_flashdata('sukses', 'Data Keranjang Telah Diupdate');
			redirect(base_url('belanja'),'refresh');
		}else{
			// jika tidak ada row id
			redirect(base_url('belanja'),'refresh');
		}
	}

	// hapus semua isi keranjang
	public function hapus($rowid="")
	{
		if ($rowid) {
			// hapus per item
			$this->cart->remove($rowid);
			$this->session->set_flashdata('sukses', 'Data telah Telah Dihapus');
			redirect(base_url('belanja'),'refresh');
		}else{
			// hapus all
			$this->cart->destroy();
			$this->session->set_flashdata('sukses','Data Keranjang Belanja Telah Dihapus');
			redirect(base_url('belanja'),'refresh');	
		}
		
	}

}

/* End of file Belanja.php */
/* Location: ./application/controllers/Belanja.php */
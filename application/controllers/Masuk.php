<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('pelanggan_model');
		$this->load->model('user_model');
	}

	// login pelanggan
	public function index()
	{

		// validasi
		$this->form_validation->set_rules('email','Email','required',
				array( 'required' => '%s Harus Di Isi'));

		$this->form_validation->set_rules('password','Password','required',
				array( 'required' => '%s Harus Di Isi'));


		if($this->form_validation->run()){

			$email  = $this->input->post('email');
			$password  = $this->input->post('password');

			// proses ke simple login
			$this->simple_pelanggan->login($email,$password);
		}

		// end validasi


		$data = array(	'title' => 'Login Pelanggan',
						// 'isi'	=> 'masuk/list' 
					);
		$this->load->view('masuk/list', $data, FALSE);
	}

	// logout
	public function logout()
	{
		// ambil fungsi logout di simple_pelanggan
		$this->simple_pelanggan->logout();
	}

}

/* End of file Masuk.php */
/* Location: ./application/controllers/Masuk.php */
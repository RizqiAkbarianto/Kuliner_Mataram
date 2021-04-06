<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_pelanggan
{
	protected $CI;

	public function __construct()
	{
        $this->CI =& get_instance();
        //load data model user
        // $this->CI->load->model('user_model');
        $this->CI->load->model('user_model');
	}

	// fungsi login
	public function login($email,$password)
	{
		$check = $this->CI->user_model->userlogin($email,$password);
		//jika ad data usernya, maka create session login
		if($check){
			$id  	 		= $check->id_user;
			$name     		= $check->nama;
			$akses_level    = $check->akses_level;
			$alamat			= $check->alamat;

			// create session
			$this->CI->session->set_userdata('id',$id);
			$this->CI->session->set_userdata('name',$name);
			$this->CI->session->set_userdata('email',$email);
			$this->CI->session->set_userdata('akses',$akses_level);
			$this->CI->session->set_userdata('alamat',$alamat);
			// redirect ke halaman admin yang telah diproteksi
			redirect(base_url(),'refresh');
		}
		else{
			// jika username dan pw kosong atau salah
			$this->CI->session->set_flashdata('warning', 'Username atau Password salah');
			redirect(base_url('masuk'),'refresh');
		}
	}

	// fungsi cek login
	public function cek_login()
	{
		// memeriksa session sdh ada atau blm, jika blm arahkan ke halaman login
		if($this->CI->session->userdata('email') == ""){
			$this->CI->session->set_flashdata('warning', 'Anda belum Login');
			redirect(base_url('masuk'),'refresh');
		}
	}

	// fungsi cek logout
	public function logout()
	{
		// membuang semua session yang telah di set pada login
		$this->CI->session->unset_userdata('id');
		$this->CI->session->unset_userdata('name');
		$this->CI->session->unset_userdata('email');
		$this->CI->session->unset_userdata('akses');
		// setalh session dibuang, maka redirect ke login
		$this->CI->session->set_flashdata('sukses', 'Anda berhasil Logout');
		redirect(base_url(),'refresh');
	}

	public function cek_akses()
	{
		// memeriksa session sdh ada atau blm, jika blm arahkan ke halaman login
		if($this->CI->session->userdata('akses') == "User"){
					redirect(base_url(),'refresh');
		}
	}

}

/* End of file Simple_pelanggan.php */
/* Location: ./application/libraries/Simple_pelanggan.php */

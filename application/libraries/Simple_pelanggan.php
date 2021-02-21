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
			$id_user  	 	= $check->id_user;
			$name     		= $check->nama;
			$akses_level    = 'User';
			$alamat			= $check->alamat;

			// create session
			$this->CI->session->set_userdata('id_user',$id_user);
			$this->CI->session->set_userdata('nama',$name);
			$this->CI->session->set_userdata('email',$email);
			$this->CI->session->set_userdata('akses_level','User');
			$this->CI->session->set_userdata('alamat',$alamat);
			// redirect ke halaman admin yang telah diproteksi
			redirect(base_url('dasbor'),'refresh');
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
		$this->CI->session->unset_userdata('id_user');
		$this->CI->session->unset_userdata('nama');
		$this->CI->session->unset_userdata('email');
		// setalh session dibuang, maka redirect ke login
		$this->CI->session->set_flashdata('sukses', 'Anda berhasil Logout');
		redirect(base_url('masuk'),'refresh');
	}


}

/* End of file Simple_pelanggan.php */
/* Location: ./application/libraries/Simple_pelanggan.php */

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login
{
	protected $CI;

	public function __construct()
	{
        $this->CI =& get_instance();
        //load data model user
        $this->CI->load->model('user_model');
	}

	// fungsi login
	public function login($username,$password)
	{
		$check = $this->CI->user_model->login($username,$password);
		//jika ad data usernya, maka create session login
		if($check){
			$id_user  	 	= $check->id_user;
			// $name      		= $check->nama;
			$akses_level    = 'Admin';
			// create session
			$this->CI->session->set_userdata('id_user',$id_user);
			// $this->CI->session->set_userdata('nama',$name);
			$this->CI->session->set_userdata('username',$username);
			$this->CI->session->set_userdata('akses_level','Admin');
			// redirect ke halaman admin yang telah diproteksi
			redirect(base_url('admin/dasbor'),'refresh');
		}
		else{
			// jika username dan pw kosong atau salah
			$this->CI->session->set_flashdata('warning', 'Username atau Password salah');
			redirect(base_url('login'),'refresh');
		}
	}

	// fungsi cek login
	public function cek_login()
	{
		// memeriksa session sdh ada atau blm, jika blm arahkan ke halaman login
		if($this->CI->session->userdata('username') == ""){
			$this->CI->session->set_flashdata('warning', 'Anda belum Login');
			redirect(base_url('login'),'refresh');
		}
	}

	// fungsi cek logout
	public function logout()
	{
		// membuang semua session yang telah di set pada login
		$this->CI->session->unset_userdata('id_user');
		// $this->CI->session->unset_userdata('nama');
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('akses_level');
		// setalh session dibuang, maka redirect ke login
		$this->CI->session->set_flashdata('sukses', 'Anda berhasil Logout');
		redirect(base_url('login'),'refresh');
	}

}

/* End of file Simple_login.php */
/* Location: ./application/libraries/Simple_login.php */

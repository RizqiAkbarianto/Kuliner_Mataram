<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upgrade extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data = array(	'title' => 'Upgrade akun ke Akun Bisnis',
			'isi'	=> 'Upgrade/list'
		);
		$this->load->view('layout/wrapper', $data, FALSE);
	
	}

}

/* End of file Upgrade.php */
/* Location: ./application/controllers/Upgrade.php */
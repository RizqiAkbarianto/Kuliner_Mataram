<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
// listing semua user
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->order_by('id_user', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// detail user
	public function detail($id_user)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id_user', $id_user);
		$this->db->order_by('id_user', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// login user admin
	public function login($username,$password)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where(array( 'username'  	=> $username,
								'password'  	=> SHA1($password),
								'akses_level'	=> 'Admin'));
		$this->db->order_by('id_user', 'desc');
		$query = $this->db->get();
		return $query->row();
	}
	// login user pelanggan
	public function userlogin($email,$password)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where(array( 'email'  => $email,
								'password'  => SHA1($password)));
		$this->db->order_by('id_user', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	public function read()
	{
		$this->db->select('*');
		$this->db->from('users');
		// $this->db->where('id_user', $id_user);
		$this->db->order_by('id_user', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

// tambah
	public function tambah($data)
	{
		$this->db->insert('users', $data);
	}

// delete user
	public function edit($data)
	{
		$this->db->where('id_user', $data['id_user']);
		$this->db->update('users', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_user', $data['id_user']);
		$this->db->delete('users', $data);
	} 

	public function count_all_user()
    {
        return $this->db->get('users')->num_rows();
    } 

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */
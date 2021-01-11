<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
// listing semua produk
	public function listing()
	{
		$this->db->select('produk.*,
							users.nama,
							kategori.nama_kategori,
							kategori.slug_kategori,
							COUNT(gambar.id_gambar) AS total_gambar'
						);
		$this->db->from('produk');
		// start join

		$this->db->join('users', 'users.id_user = produk.id_user', 'left');
		$this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori', 'left');
		$this->db->join('gambar', 'gambar.id_produk = produk.id_produk', 'left');


		// end join
		$this->db->group_by('produk.id_produk');
		$this->db->order_by('id_produk', 'desc');
		$query = $this->db->get();
		return $query->result();
	}


	// listing home 
	public function home()
	{
		$this->db->select('produk.*,
							users.nama,
							kategori.nama_kategori,
							kategori.slug_kategori,
							COUNT(gambar.id_gambar) AS total_gambar'
						);
		$this->db->from('produk');
		// start join

		$this->db->join('users', 'users.id_user = produk.id_user', 'left');
		$this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori', 'left');
		$this->db->join('gambar', 'gambar.id_produk = produk.id_kategori', 'left');


		// end join
		$this->db->where('produk.status_produk', 'publish');

		$this->db->group_by('produk.id_produk');
		$this->db->order_by('id_produk', 'desc');

		$this->db->limit(12);
		$query = $this->db->get();
		return $query->result();
	}

	// rad produk
	public function read($slug_produk)
	{
		$this->db->select('produk.*,
							users.nama,
							kategori.nama_kategori,
							kategori.slug_kategori,
							COUNT(gambar.id_gambar) AS total_gambar'
						);
		$this->db->from('produk');
		// start join

		$this->db->join('users', 'users.id_user = produk.id_user', 'left');
		$this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori', 'left');
		$this->db->join('gambar', 'gambar.id_produk = produk.id_kategori', 'left');


		// end join
		$this->db->where('produk.status_produk', 'publish');
		$this->db->where('produk.slug_produk', $slug_produk);

		$this->db->group_by('produk.id_produk');
		$this->db->order_by('id_produk', 'desc');

		$query = $this->db->get();
		return $query->row();
	}

	// produk
	public function produk($limit,$start)
	{
		$this->db->select('produk.*,
							users.nama,
							kategori.nama_kategori,
							kategori.slug_kategori,
							COUNT(gambar.id_gambar) AS total_gambar'
						);
		$this->db->from('produk');
		// start join

		$this->db->join('users', 'users.id_user = produk.id_user', 'left');
		$this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori', 'left');
		$this->db->join('gambar', 'gambar.id_produk = produk.id_kategori', 'left');


		// end join
		$this->db->where('produk.status_produk', 'publish');

		$this->db->group_by('produk.id_produk');
		$this->db->order_by('id_produk', 'desc');

		$this->db->limit($limit,$start);
		$query = $this->db->get();
		return $query->result();
	}

	// untuk menampilkan total produk
	public function total_produk()
	{
		$this->db->select('COUNT(*) AS total');
		$this->db->from('produk');
		$this->db->where('status_produk', 'Publish');
		$query = $this->db->get();
		return $query->row();
	}


	// kategori produk
	public function kategori($id_kategori,$limit,$start)
	{
		$this->db->select('produk.*,
							users.nama,
							kategori.nama_kategori,
							kategori.slug_kategori,
							COUNT(gambar.id_gambar) AS total_gambar'
						);
		$this->db->from('produk');
		// start join

		$this->db->join('users', 'users.id_user = produk.id_user', 'left');
		$this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori', 'left');
		$this->db->join('gambar', 'gambar.id_produk = produk.id_kategori', 'left');


		// end join
		$this->db->where('produk.status_produk', 'publish');
		$this->db->where('produk.id_kategori', $id_kategori);

		$this->db->group_by('produk.id_produk');
		$this->db->order_by('id_produk', 'desc');

		$this->db->limit($limit,$start);
		$query = $this->db->get();
		return $query->result();
	}

	// untuk menampilkan total kategori produk
	public function total_kategori($id_kategori)
	{
		$this->db->select('COUNT(*) AS total');
		$this->db->from('produk');
		$this->db->where('status_produk', 'Publish');
		$this->db->where('id_kategori', $id_kategori);
		$query = $this->db->get();
		return $query->row();
	}

	// listing kategori
	public function listing_kategori()
	{
		$this->db->select('produk.*,
							users.nama,
							kategori.nama_kategori,
							kategori.slug_kategori,
							COUNT(gambar.id_gambar) AS total_gambar'
						);
		$this->db->from('produk');
		// start join

		$this->db->join('users', 'users.id_user = produk.id_user', 'left');
		$this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori', 'left');
		$this->db->join('gambar', 'gambar.id_produk = produk.id_kategori', 'left');


		// end join
		$this->db->group_by('produk.id_kategori');
		$this->db->order_by('id_produk', 'desc');
		$query = $this->db->get();
		return $query->result();
	}


	// detail produk
	public function detail($id_produk)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->where('id_produk', $id_produk);
		$this->db->order_by('id_produk', 'desc');
		$query = $this->db->get();
		return $query->row();
	}


	// detail gambar produk
	public function detail_gambar($id_gambar)
	{
		$this->db->select('*');
		$this->db->from('gambar');
		$this->db->where('id_gambar', $id_gambar);
		$this->db->order_by('id_gambar', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// Gambar

	public function gambar($id_produk)
	{
		$this->db->select('*');
		$this->db->from('gambar');
		$this->db->where('id_produk', $id_produk);
		$this->db->order_by('id_gambar', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	

// tambah
	public function tambah($data)
	{
		$this->db->insert('produk', $data);
	}

	// tambah gambar
	public function tambah_gambar($data)
	{
		$this->db->insert('gambar', $data);
	}

// delete produk
	public function edit($data)
	{
		$this->db->where('id_produk', $data['id_produk']);
		$this->db->update('produk', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_produk', $data['id_produk']);
		$this->db->delete('produk', $data);
	} 

	public function delete_gambar($data)
	{
		$this->db->where('id_gambar', $data['id_gambar']);
		$this->db->delete('gambar', $data);
	} 



}
/* End of file produk_model.php */
/* Location: ./application/models/produk_model.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promosi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
// listing semua promosi
	public function listing()
	{
		$this->db->select('promosi.*,
							users.nama,
							
							
							COUNT(gambar.id_gambar) AS total_gambar'
						);
		$this->db->from('promosi');
		// start join

		$this->db->join('users', 'users.id_user = promosi.id_user', 'left');

		$this->db->join('gambar', 'gambar.id_promosi = promosi.id_promosi', 'left');


		// end join
		$this->db->group_by('promosi.id_promosi');
		$this->db->order_by('id_promosi', 'desc');
		$query = $this->db->get();
		return $query->result();
	}


	// listing home 
	public function home()
	{
		$this->db->select('promosi.*,
							users.nama,
							COUNT(gambar.id_gambar) AS total_gambar'
						);
		$this->db->from('promosi');
		// start join

		$this->db->join('users', 'users.id_user = promosi.id_user', 'left');
		$this->db->join('gambar', 'gambar.id_promosi = promosi.id_promosi', 'left');


		// end join
		$this->db->where('promosi.status_promosi', 'publish');

		$this->db->group_by('promosi.id_promosi');
		$this->db->order_by('id_promosi', 'desc');

		$this->db->limit(12);
		$query = $this->db->get();
		return $query->result();
	}

	// rad promosi
	public function read($slug_promosi)
	{
		$this->db->select('promosi.*,
							users.nama,
							COUNT(gambar.id_gambar) AS total_gambar'
						);
		$this->db->from('promosi');
		// start join

		$this->db->join('users', 'users.id_user = promosi.id_user', 'left');
		$this->db->join('gambar', 'gambar.id_promosi = promosi.id_promosi', 'left');


		// end join
		$this->db->where('promosi.status_promosi', 'publish');
		$this->db->where('promosi.slug_promosi', $slug_promosi);

		$this->db->group_by('promosi.id_promosi');
		$this->db->order_by('id_promosi', 'desc');

		$query = $this->db->get();
		return $query->row();
	}

	// promosi
	public function promosi($limit,$start)
	{
		$this->db->select('promosi.*,
							users.nama,
							COUNT(gambar.id_gambar) AS total_gambar'
						);
		$this->db->from('promosi');
		// start join

		$this->db->join('users', 'users.id_user = promosi.id_user', 'left');
		$this->db->join('gambar', 'gambar.id_promosi = promosi.id_promosi', 'left');


		// end join
		$this->db->where('promosi.status_promosi', 'publish');

		$this->db->group_by('promosi.id_promosi');
		$this->db->order_by('id_promosi', 'desc');

		$this->db->limit($limit,$start);
		$query = $this->db->get();
		return $query->result();
	}

	// untuk menampilkan total promosi
	public function total_promosi()
	{
		$this->db->select('COUNT(*) AS total');
		$this->db->from('promosi');
		$this->db->where('status_promosi', 'Publish');
		$query = $this->db->get();
		return $query->row();
	}


	// // kategori promosi
	// public function kategori($id_kategori,$limit,$start)
	// {
	// 	$this->db->select('promosi.*,
	// 						users.nama,
	// 						kategori.nama_kategori,
	// 						kategori.slug_kategori,
	// 						COUNT(gambar.id_gambar) AS total_gambar'
	// 					);
	// 	$this->db->from('promosi');
	// 	// start join

	// 	$this->db->join('users', 'users.id_user = promosi.id_user', 'left');
	// 	$this->db->join('kategori', 'kategori.id_kategori = promosi.id_kategori', 'left');
	// 	$this->db->join('gambar', 'gambar.id_promosi = promosi.id_kategori', 'left');


	// 	// end join
	// 	$this->db->where('promosi.status_promosi', 'publish');
	// 	$this->db->where('promosi.id_kategori', $id_kategori);

	// 	$this->db->group_by('promosi.id_promosi');
	// 	$this->db->order_by('id_promosi', 'desc');

	// 	$this->db->limit($limit,$start);
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }

	// untuk menampilkan total kategori promosi
	// public function total_kategori($id_kategori)
	// {
	// 	$this->db->select('COUNT(*) AS total');
	// 	$this->db->from('promosi');
	// 	$this->db->where('status_promosi', 'Publish');
	// 	$this->db->where('id_kategori', $id_kategori);
	// 	$query = $this->db->get();
	// 	return $query->row();
	// }

	// listing kategori
	// public function listing_kategori()
	// {
	// 	$this->db->select('promosi.*,
	// 						users.nama,
	// 						kategori.nama_kategori,
	// 						kategori.slug_kategori,
	// 						COUNT(gambar.id_gambar) AS total_gambar'
	// 					);
	// 	$this->db->from('promosi');
	// 	// start join

	// 	$this->db->join('users', 'users.id_user = promosi.id_user', 'left');
	// 	$this->db->join('kategori', 'kategori.id_kategori = promosi.id_kategori', 'left');
	// 	$this->db->join('gambar', 'gambar.id_promosi = promosi.id_kategori', 'left');


	// 	// end join
	// 	$this->db->group_by('promosi.id_kategori');
	// 	$this->db->order_by('id_promosi', 'desc');
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }


	// detail promosi
	public function detail($id_promosi)
	{
		$this->db->select('*');
		$this->db->from('promosi');
		$this->db->where('id_promosi', $id_promosi);
		$this->db->order_by('id_promosi', 'desc');
		$query = $this->db->get();
		return $query->row();
	}


	// detail gambar promosi
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

	public function gambar($id_promosi)
	{
		$this->db->select('*');
		$this->db->from('gambar');
		$this->db->where('id_promosi', $id_promosi);
		$this->db->order_by('id_gambar', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	

// tambah
	public function tambah($data)
	{
		$this->db->insert('promosi', $data);
	}

	// tambah gambar
	public function tambah_gambar($data)
	{
		$this->db->insert('gambar', $data);
	}

// delete promosi
	public function edit($data)
	{
		$this->db->where('id_promosi', $data['id_promosi']);
		$this->db->update('promosi', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_promosi', $data['id_promosi']);
		$this->db->delete('promosi', $data);
	} 

	public function delete_gambar($data)
	{
		$this->db->where('id_gambar', $data['id_gambar']);
		$this->db->delete('gambar', $data);
	} 

	public function count_all_products()
    {
        return $this->db->get('promosi')->num_rows();
    }

    public function listing_review()
	{
		$this->db->select('reiew.*,
							users.id_user,
							users.nama,
							promosi.id_promosi');
		$this->db->from('review');
		$this->db->join('users', 'users.id_user = review.id_user', 'left');
		$this->db->join('promosi', 'promosi.id_promosi = review.id_promosi', 'left');
		$this->db->where('id_promosi', $id_promosi);
		$this->db->order_by('id_review', 'asc');
		$query = $this->db->get();
		return $query->result();
	}

    public function review($data)
	{
		$this->db->insert('review', $data);
	}


}
/* End of file promosi_model.php */
/* Location: ./application/models/promosi_model.php */
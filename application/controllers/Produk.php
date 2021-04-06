<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {


	// load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');
		$this->load->model('kategori_model');

	}

	// listing data produk
	public function index()
	{
		// konfigurasi model sdh dibuat sewaktu membuat konfigurasi di autoload
		$site = $this->konfigurasi_model->listing();
		// tampilkan listing kategori
		$listing_kategori = $this->produk_model->listing_kategori();
		// mangambil data total
		$total = $this->produk_model->total_produk();
		// paginasi mulai

		
		$config['base_url'] 			= base_url() . '/produk/index/';
		$config['total_rows'] 			= $total->total;
		$config['use_page_number'] 		= TRUE;
		$config['per_page'] 			= 9;
		$config['uri_segment'] 			= 3;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] 			= floor($choice);
		$config['full_tag_open'] 		= '<ul class="pagination">';
		$config['full_tag_close'] 		= '</ul>';
		$config['first_link'] 			= 'First';
		$config['first_tag_open'] 		= '<li>';
		$config['first_tag_close'] 		= '</li>';
		$config['last_link'] 			= 'Last';
		$config['last_tag_open'] 		= '<li class="disabled" ><li class="active" ><a href="#">';
		$config['last_tag_close'] 		= '<span class="sr-only"></a></li></li>';
		$config['next_link'] 			= '&gt;';
		$config['next_tag_open'] 		= '<div>';
		$config['next_tag_close'] 		= '</div>';
		$config['prev_link'] 			= '&lt;';
		$config['prev_tag_open'] 		= '<div>';
		$config['prev_tag_close'] 		= '</div>';
		$config['cur_tag_open'] 		= '<b>';
		$config['cur_tag_close'] 		= '</b>';

		$this->load->library('pagination');

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		// $produk = $this->produk_model->produk($config['per_page'], $config['uri_segment']);

		$produk = $this->produk_model->produk($config['per_page'], $page);

		$data = array(	'title' => 'Produk',
			'site' => $site,
			'listing_kategori' => $listing_kategori,
			'produk' => $produk,
			'pagin' => $this->pagination->create_links(),
			'isi' => 'produk/list'
		);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	// listong data kategori produk
	public function kategori($slug_kategori)
	{

		// data kategori
		$kategori = $this->kategori_model->read($slug_kategori);
		$id_kategori = $kategori->id_kategori;
		// data global

		$site = $this->konfigurasi_model->listing();
		// konfigurasi model sdh dibuat sewaktu membuat konfigurasi di autoload

		// tampilkan listing kategori
		$listing_kategori =  $this->produk_model->listing_kategori();

		// mangambil data total
		$total 			= $this->produk_model->total_kategori($id_kategori);

		// paginasi mulai

		
		
		$config['base_url'] 			= base_url().'produk/kategori/'.$slug_kategori.'/index/';
		$config['total_rows'] 			= $total->total;
		$config['use_page_number']		= TRUE;
		$config['per_page'] 			= 3;
		// $config['per_page2'] 			= 3;
		$config['uri_segment'] 			= 5;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] 			= floor($choice);
		$config['full_tag_open'] 		= '<ul class="pagination">';
		$config['full_tag_close'] 		= '</ul>';
		$config['first_link'] 			= 'First';
		$config['first_tag_open'] 		= '<li>';
		$config['first_tag_close'] 		= '</li>';
		$config['last_link'] 			= 'Last';
		$config['last_tag_open'] 		= '<li class="disabled" ><li class="active" ><a href="#">';
		$config['last_tag_close'] 		= '<span class="sr-only"></a></li></li>';
		$config['next_link'] 			= '&gt;';
		$config['next_tag_open'] 		= '<div>';
		$config['next_tag_close'] 		= '</div>';
		$config['prev_link'] 			= '&lt;';
		$config['prev_tag_open'] 		= '<div>';
		$config['prev_tag_close'] 		= '</div>';
		$config['cur_tag_open'] 		= '<b>';
		$config['cur_tag_close'] 		= '</b>';
		// $config['first_url']			= base_url().'/produk/kategori/'.$slug_kategori;

		$this->load->library('pagination');
		
		$this->pagination->initialize($config);
		
		// ambil data produk
		// $page 	= ($this->uri->segment(5)) ? ($this->uri->segment(5)-1) * $config['per_page'] : 0;

		$page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
		$produk = $this->produk_model->kategori($id_kategori, $config['per_page'],$page);
		// $produk = $this->produk_model->kategori($id_kategori, $config['per_page'], $config['uri_segment']);

		// paginasi selesai

		$data = array( 	'title'				=> $kategori->nama_kategori,
			'site'				=> $site,
			'listing_kategori'	=> $listing_kategori,
			'produk'			=> $produk,
			'pagin'				=> $this->pagination->create_links(),
			'isi'				=> 'produk/list'
		);
		$this->load->view('layout/wrapper', $data, FALSE);
	}


	// detai produk
	public function detail($slug_produk)
	{

		$site 			= $this->konfigurasi_model->listing();
		$review 		= $this->produk_model->listing_review($slug_produk);
		$produk 		= $this->produk_model->read($slug_produk);
		$id_produk		= $produk->id_produk;
		$gambar 		= $this->produk_model->gambar($id_produk);
		$produk_related	= $this->produk_model->home();

		$data = array( 	'title'				=> $produk->nama_produk,
			'site'				=> $site,
			'review'			=> $review,
			'produk'			=> $produk,
			'produk_related'	=> $produk_related,
			'gambar'			=> $gambar,
			'isi'				=> 'produk/detail'
		);
		$this->load->view('layout/wrapper', $data, FALSE);


	}

	public function tambah()
	{
		$this->simple_pelanggan->cek_akses();

		$site = $this->konfigurasi_model->listing();
		// ambil kategori
		$kategori = $this->kategori_model->listing();

		// Validasi Input
		$valid = $this->form_validation;

		$valid->set_rules('nama_produk','Nama Produk','required',
			array(  "required"=> '%s harus diisi' ));

		

		
		if($valid->run())
		{ 

			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
				$config['max_size'] 		= '2400';//dalam kb
				$config['max_width']  		= '2024';
				$config['max_height']  		= '2024';
				
				$this->load->library('upload', $config);
				
				if ( ! $this->upload->do_upload('gambar')){
					
					
					
			//end validasi



					$data = array(  'title'    	=> 'Tambah Produk',
						'site'		=> $site,
						'kategori' 	=> $kategori,
						'error'		=> $this->upload->display_errors(),
						'isi'      	=> 'produk/tambah'
					);
					$this->load->view('layout/wrapper', $data, FALSE);
		// masuk database
				}else
				{
					$upload_gambar = array('upload_data' => $this->upload->data());

				// create thubnail gambar
					$config['image_library'] 	= 'gd2';
					$config['source_image'] 	= './assets/upload/image/'.$upload_gambar['upload_data']['file_name'];
				// lokasi folder thumbnail
					$config['new_image']		= './assets/upload/image/thumbs/';
					$config['create_thumb'] 	= TRUE;
					$config['maintain_ratio'] 	= TRUE;
				$config['width']         	= 250;//ukuran px
				$config['height']       	= 250;
				$config['thumb_marker']		= '';

				$this->load->library('image_lib', $config);

				$this->image_lib->resize();
				// end create

				$i = $this->input;
				$kode_produk = url_title($this->input->post('nama_produk'), 'dash', TRUE);
				$slug_produk = url_title($this->input->post('nama_produk').'-'.$this->input->post('kode_produk'), 'dash', TRUE);

				$data = array(  "id_user"		=>$this->session->userdata('id'),
					"id_kategori"	=>$i->post('id_kategori'),
					"kode_produk"	=>$kode_produk,
					"nama_produk"	=>$i->post('nama_produk'),
					"slug_produk"	=>$slug_produk,

					"instagram"		=>$i->post('instagram'),
					"link_instagram"=>$i->post('link_instagram'),
					"alamat"		=>$i->post('alamat'),
					"maps"			=>$i->post('maps'),

					"keterangan"	=>$i->post('keterangan'),
					"keywords"		=>$i->post('keywords'),

								// disimpan nama file gambar
					"gambar"		=>$upload_gambar['upload_data']['file_name'],

					"status_produk"	=>'Publish',
					"tanggal_post"	=>date('Y-m-d H:i:s')
				);
				$this->produk_model->tambah($data);
				$this->session->set_flashdata('sukses', 'Data Telah Ditambahkan');
				redirect(base_url('produk'),'refresh');

			}}
	//end masuk database

			$data = array(  'title'    	=> 'Tambah Produk',
				'site' 		=> $site,
				'kategori' 	=> $kategori,
				'isi'      	=> 'produk/tambah'
			);
			$this->load->view('layout/wrapper', $data, FALSE);
		}

		public function gambar($id_produk)
		{
			$produk = $this->produk_model->detail($id_produk);
			$gambar = $this->produk_model->gambar($id_produk);

		// Validasi Input
			$valid = $this->form_validation;

			$valid->set_rules('judul_gambar','Judul/Nama Gambar','required',
				array(  "required"			=> '%s harus diisi' ));




			if($valid->run())
			{ 

				$config['upload_path'] 		= './assets/upload/image/';
				$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
				$config['max_size'] 		= '2400';//dalam kb
				$config['max_width']  		= '2024';
				$config['max_height']  		= '2024';
				
				$this->load->library('upload', $config);
				
				if ( ! $this->upload->do_upload('gambar')){
					
					
					
			//end validasi



					$data = array(  'title'    	=> 'Tambah Gambar Produk : '.$produk->nama_produk,
						'produk' 	=> $produk,
						'gambar'	=> $gambar,
						'error'		=> $this->upload->display_errors(),
						'isi'      	=> 'produk/gambar'
					);
					$this->load->view('layout/wrapper', $data, FALSE);
		// masuk database
				}else
				{
					$upload_gambar = array('upload_data' => $this->upload->data());

				// create thubnail gambar
					$config['image_library'] 	= 'gd2';
					$config['source_image'] 	= './assets/upload/image/'.$upload_gambar['upload_data']['file_name'];
				// lokasi folder thumbnail
					$config['new_image']		= './assets/upload/image/thumbs/';
					$config['create_thumb'] 	= TRUE;
					$config['maintain_ratio'] 	= TRUE;
				$config['width']         	= 250;//ukuran px
				$config['height']       	= 250;
				$config['thumb_marker']		= '';

				$this->load->library('image_lib', $config);

				$this->image_lib->resize();
				// end create

				$i = $this->input;
				

				$data = array(  "id_produk"		=>$id_produk,
					"judul_gambar"	=>$i->post('judul_gambar'), 
								// disimpan nama file gambar
					"gambar"		=>$upload_gambar['upload_data']['file_name'],

				);
				$this->produk_model->tambah_gambar($data);
				// $this->session->set_flashdata('sukses', 'Gambar Telah Ditambahkan');
				redirect(base_url('produk/gambar/'.$id_produk),'refresh');

			}}
	//end masuk database

			$data = array(  'title'    	=> 'Tambah Gambar : '.$produk->nama_produk,
				'produk' 	=> $produk,
				'gambar'	=> $gambar,
				'isi'      	=> 'produk/gambar'
			);
			$this->load->view('layout/wrapper', $data, FALSE);
		}

		public function edit($id_produk)
		{
			$this->simple_pelanggan->cek_akses();
			$site = $this->konfigurasi_model->listing();
			// ambildata produk yang akan di edit
			$produk = $this->produk_model->detail($id_produk);
			// ambil data kategori
			$kategori = $this->kategori_model->listing();
			// Validasi Input
			$valid = $this->form_validation;

			$valid->set_rules('nama_produk','Nama Produk','required',
				array(  "required"=> '%s harus diisi' ));

		// $valid->set_rules('kode_produk','Kode Produk','required',
		// 	array(  "required"		=> '%s harus diisi'));


			if($valid->run())
			{ 
				// chek jika gambar diganti
				if(!empty($_FILES['gambar']['name'])){

					$config['upload_path'] 		= './assets/upload/image/';
					$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
				$config['max_size'] 		= '2400';//dalam kb
				$config['max_width']  		= '2024';
				$config['max_height']  		= '2024';
				
				$this->load->library('upload', $config);
				
				if ( ! $this->upload->do_upload('gambar')){
					
					
					
			//end validasi



					$data = array(  'title'    	=> 'Edit Produk : '.$produk->nama_produk,
						'site'		=> $site,
						'kategori' 	=> $kategori,
						'produk'	=> $produk,
						'error'		=> $this->upload->display_errors(),
						'isi'      	=> 'produk/edit'
					);
					$this->load->view('layout/wrapper', $data, FALSE);
		// masuk database
				}else
				{
					$upload_gambar = array('upload_data' => $this->upload->data());

				// create thubnail gambar
					$config['image_library'] 	= 'gd2';
					$config['source_image'] 	= './assets/upload/image/'.$upload_gambar['upload_data']['file_name'];
				// lokasi folder thumbnail
					$config['new_image']		= './assets/upload/image/thumbs/';
					$config['create_thumb'] 	= TRUE;
					$config['maintain_ratio'] 	= TRUE;
				$config['width']         	= 250;//ukuran px
				$config['height']       	= 250;
				$config['thumb_marker']		= '';

				$this->load->library('image_lib', $config);

				$this->image_lib->resize();
				// end create

				$i = $this->input;
				$kode_produk = url_title($this->input->post('nama_produk'), 'dash', TRUE);
				$slug_produk = url_title($this->input->post('nama_produk').'-'.$this->input->post('kode_produk'), 'dash', TRUE);

				$data = array(  "id_produk"		=>$id_produk,
					"id_user"		=>$this->session->userdata('id'),
					"id_kategori"	=>$i->post('id_kategori'),
					"kode_produk"	=>$kode_produk,
					"nama_produk"	=>$i->post('nama_produk'),
					"slug_produk"	=>$slug_produk,

					"instagram"		=>$i->post('instagram'),
					"link_instagram"=>$i->post('link_instagram'),
					"alamat"		=>$i->post('alamat'),
					"maps"			=>$i->post('maps'),

					"keterangan"	=>$i->post('keterangan'),
					"keywords"		=>$i->post('keywords'),

								// disimpan nama file gambar
					"gambar"		=>$upload_gambar['upload_data']['file_name'],

					"status_produk"	=>'Publish'
				);
				$this->produk_model->edit($data);
				$this->session->set_flashdata('sukses', 'Data Telah Diedit');
				redirect(base_url('dashboard/produk'),'refresh');

			}} else{
				// edit produk tanpa ganti gambar
				$i = $this->input;
				$kode_produk = url_title($this->input->post('nama_produk'), 'dash', TRUE);
				$slug_produk = url_title($this->input->post('nama_produk').'-'.$this->input->post('kode_produk'), 'dash', TRUE);

				$data = array(  "id_produk"		=> $id_produk,
					"id_user"		=>$this->session->userdata('id'),
					"id_kategori"	=>$i->post('id_kategori'),
					"kode_produk"	=>$kode_produk,
					"nama_produk"	=>$i->post('nama_produk'),
					"slug_produk"	=>$slug_produk,

					"instagram"		=>$i->post('instagram'),
					"link_instagram"=>$i->post('link_instagram'),
					"alamat"		=>$i->post('alamat'),
					"maps"			=>$i->post('maps'),

					"keterangan"	=>$i->post('keterangan'),
					"keywords"		=>$i->post('keywords'),

								// gambar tidak diganti
								// "gambar"		=>$upload_gambar['upload_data']['file_name'],

					"status_produk"	=>'Publish'
				);
				$this->produk_model->edit($data);
				$this->session->set_flashdata('sukses', 'Data Telah Diedit');
				redirect(base_url('dashboard/produk'),'refresh');

			}}
	//end masuk database

			$data = array(  'title'    	=> 'Edit Produk '.$produk->nama_produk,
				'site'		=> $site,
				'kategori' 	=> $kategori,
				'produk'	=> $produk,
				'isi'      	=> 'produk/edit'
			);
			$this->load->view('layout/wrapper', $data, FALSE);
		}

		public function delete($id_produk)
		{
			// proses hapus gambar
			$produk = $this->produk_model->detail($id_produk);
			unlink('./assets/upload/image/'.$produk->gambar);
			unlink('./assets/upload/image/thumbs/'.$produk->gambar);
			// end proses hapus
			$data = array('id_produk'   => $id_produk);

			$this->produk_model->delete($data);
			$this->session->set_flashdata('sukses', 'Data Telah Dihapus');
			redirect(base_url('dashboard/produk'),'refresh');
		}

		public function delete_gambar($id_produk,$id_gambar)
		{
			// proses hapus gambar
			$gambar = $this->produk_model->detail_gambar($id_gambar);
			unlink('./assets/upload/image/'.$gambar->gambar);
			unlink('./assets/upload/image/thumbs/'.$gambar->gambar);
			// end proses hapus
			$data = array('id_gambar'   => $id_gambar);

			$this->produk_model->delete_gambar($data);
			// $this->session->set_flashdata('sukses', 'Data Gambar Telah Dihapus');
			redirect(base_url('produk/gambar/'.$id_produk),'refresh');
		}

	}

	/* End of file Produk.php */
/* Location: ./application/controllers/Produk.php */
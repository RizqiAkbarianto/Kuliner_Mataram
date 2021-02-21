<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promosi extends CI_Controller {


	//load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('promosi_model');
		// $this->load->model('kategori_model');
		// proteksi halaman 
		$this->simple_login->cek_login();
	}

	//data promosi
	public function index()
	{
		$promosi = $this->promosi_model->listing();
		$data = array(  'title'   => 'Data Promosi',
			'promosi'    => $promosi,
			'isi'     => 'admin/promosi/list'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Gambar
	public function gambar($id_promosi)
	{
		$promosi = $this->promosi_model->detail($id_promosi);
		$gambar = $this->promosi_model->gambar($id_promosi);

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



				$data = array(  'title'    	=> 'Tambah Gambar Promosi : '.$promosi->nama_promosi,
								'promosi' 	=> $promosi,
								'gambar'	=> $gambar,
								'error'		=> $this->upload->display_errors(),
								'isi'      	=> 'admin/promosi/gambar'
				);
				$this->load->view('admin/layout/wrapper', $data, FALSE);
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
				

				$data = array(  "id_promosi"	=>$id_promosi,
								"judul_gambar"	=>$i->post('judul_gambar'), 
								// disimpan nama file gambar
								"gambar"		=>$upload_gambar['upload_data']['file_name'],

				);
				$this->promosi_model->tambah_gambar($data);
				$this->session->set_flashdata('sukses', 'Gambar Telah Ditambahkan');
				redirect(base_url('admin/promosi/gambar/'.$id_promosi),'refresh');

			}}
	//end masuk database

				$data = array(  'title'    	=> 'Tambah Gambar Promosi : '.$promosi->nama_promosi,
								'promosi' 	=> $promosi,
								'gambar'	=> $gambar,
								'isi'      	=> 'admin/promosi/gambar'
				);
				$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//tambah promosi
	public function tambah()
	{
		// ambil kategori
		// $kategori = $this->kategori_model->listing();

		// Validasi Input
		$valid = $this->form_validation;

		$valid->set_rules('nama_promosi','Nama Promosi','required',
			array(  "required"=> '%s harus diisi' ));

		$valid->set_rules('kode_promosi','Kode Promosi','required|is_unique[promosi.kode_promosi]',
			array(  "required"		=> '%s harus diisi',
					"is_unique"		=> '%s Sudah Ada Buat Kode Baru')
		);

		
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



				$data = array(  'title'    	=> 'Tambah Promosi',
								// 'kategori' 	=> $kategori,
								'error'		=> $this->upload->display_errors(),
								'isi'      	=> 'admin/promosi/tambah'
				);
				$this->load->view('admin/layout/wrapper', $data, FALSE);
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
				$slug_promosi = url_title($this->input->post('nama_promosi').'-'.$this->input->post('kode_promosi'), 'dash', TRUE);

				$data = array(  "id_user"		=>$this->session->userdata('id_user'),
								// "id_kategori"	=>$i->post('id_kategori'),
								"kode_promosi"	=>$i->post('kode_promosi'),
								"nama_promosi"	=>$i->post('nama_promosi'),
								"slug_promosi"	=>$slug_promosi,

								"instagram"		=>$i->post('instagram'),
								"link_instagram"=>$i->post('link_instagram'),
								"alamat"		=>$i->post('alamat'),
								"maps"			=>$i->post('maps'),

								"keterangan"	=>$i->post('keterangan'),
								"keywords"		=>$i->post('keywords'),
								// disimpan nama file gambar
								"gambar"		=>$upload_gambar['upload_data']['file_name'],
								"status_promosi"	=>$i->post('status_promosi'),
								"tanggal_post"	=>date('Y-m-d H:i:s')
				);
				$this->promosi_model->tambah($data);
				$this->session->set_flashdata('sukses', 'Data Telah Ditambahkan');
				redirect(base_url('admin/promosi'),'refresh');

			}}
	//end masuk database

				$data = array(  'title'    	=> 'Tambah Promosi',
								// 'kategori' 	=> $kategori,
								'isi'      	=> 'admin/promosi/tambah'
				);
				$this->load->view('admin/layout/wrapper', $data, FALSE);
		}


//edit promosi
		public function edit($id_promosi)
		{
			// ambildata promosi yang akan di edit
			$promosi = $this->promosi_model->detail($id_promosi);
			// ambil data kategori
			// $kategori = $this->kategori_model->listing();
			// Validasi Input
		$valid = $this->form_validation;

		$valid->set_rules('nama_promosi','Nama Promosi','required',
			array(  "required"=> '%s harus diisi' ));

		$valid->set_rules('kode_promosi','Kode Promosi','required',
			array(  "required"		=> '%s harus diisi'));

		
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



				$data = array(  'title'    	=> 'Edit Promosi : '.$promosi->nama_promosi,
								// 'kategori' 	=> $kategori,
								'promosi'	=> $promosi,
								'error'		=> $this->upload->display_errors(),
								'isi'      	=> 'admin/promosi/edit'
				);
				$this->load->view('admin/layout/wrapper', $data, FALSE);
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
				$slug_promosi = url_title($this->input->post('nama_promosi').'-'.$this->input->post('kode_promosi'), 'dash', TRUE);

				$data = array(  "id_promosi"		=> $id_promosi,
								"id_user"		=>$this->session->userdata('id_user'),
								// "id_kategori"	=>$i->post('id_kategori'),
								"kode_promosi"	=>$i->post('kode_promosi'),
								"nama_promosi"	=>$i->post('nama_promosi'),
								"slug_promosi"	=>$slug_promosi,

								"instagram"		=>$i->post('instagram'),
								"link_instagram"=>$i->post('link_instagram'),
								"alamat"		=>$i->post('alamat'),
								"maps"			=>$i->post('maps'),

								"keterangan"	=>$i->post('keterangan'),
								"keywords"		=>$i->post('keywords'),
								// "harga"			=>$i->post('harga'),
								// "stok"			=>$i->post('stok'),
								// disimpan nama file gambar
								"gambar"		=>$upload_gambar['upload_data']['file_name'],
								// "berat"			=>$i->post('berat'),
								// "ukuran"		=>$i->post('ukuran'),
								"status_promosi"	=>$i->post('status_promosi'),
				);
				$this->promosi_model->edit($data);
				$this->session->set_flashdata('sukses', 'Data Telah Diedit');
				redirect(base_url('admin/promosi'),'refresh');

			}} else{
				// edit promosi tanpa ganti gambar
				$i = $this->input;
				$slug_promosi = url_title($this->input->post('nama_promosi').'-'.$this->input->post('kode_promosi'), 'dash', TRUE);

				$data = array(  "id_promosi"		=> $id_promosi,
								"id_user"		=>$this->session->userdata('id_user'),
								// "id_kategori"	=>$i->post('id_kategori'),
								"kode_promosi"	=>$i->post('kode_promosi'),
								"nama_promosi"	=>$i->post('nama_promosi'),
								"slug_promosi"	=>$slug_promosi,

								"instagram"		=>$i->post('instagram'),
								"link_instagram"=>$i->post('link_instagram'),
								"alamat"		=>$i->post('alamat'),
								"maps"			=>$i->post('maps'),
								
								"keterangan"	=>$i->post('keterangan'),
								"keywords"		=>$i->post('keywords'),
								// "harga"			=>$i->post('harga'),
								// "stok"			=>$i->post('stok'),
								// gambar tidak diganti
								// "gambar"		=>$upload_gambar['upload_data']['file_name'],
								// "berat"			=>$i->post('berat'),
								// "ukuran"		=>$i->post('ukuran'),
								"status_promosi"	=>$i->post('status_promosi'),
				);
				$this->promosi_model->edit($data);
				$this->session->set_flashdata('sukses', 'Data Telah Diedit');
				redirect(base_url('admin/promosi'),'refresh');

			}}
	//end masuk database

				$data = array(  'title'    	=> 'Edit Promosi '.$promosi->nama_promosi,
								// 'kategori' 	=> $kategori,
								'promosi'	=> $promosi,
								'isi'      	=> 'admin/promosi/edit'
				);
				$this->load->view('admin/layout/wrapper', $data, FALSE);
		}

// hapus promosi

		public function delete($id_promosi)
		{
			// proses hapus gambar
			$promosi = $this->promosi_model->detail($id_promosi);
			unlink('./assets/upload/image/'.$promosi->gambar);
			unlink('./assets/upload/image/thumbs/'.$promosi->gambar);
			// end proses hapus
			$data = array('id_promosi'   => $id_promosi);

			$this->promosi_model->delete($data);
			$this->session->set_flashdata('sukses', 'Data Telah Dihapus');
			redirect(base_url('admin/promosi'),'refresh');
		}
// Delete gambar promosi
		public function delete_gambar($id_promosi,$id_gambar)
		{
			// proses hapus gambar
			$gambar = $this->promosi_model->detail_gambar($id_gambar);
			unlink('./assets/upload/image/'.$gambar->gambar);
			unlink('./assets/upload/image/thumbs/'.$gambar->gambar);
			// end proses hapus
			$data = array('id_gambar'   => $id_gambar);

			$this->promosi_model->delete_gambar($data);
			$this->session->set_flashdata('sukses', 'Data Gambar Telah Dihapus');
			redirect(base_url('admin/promosi/gambar/'.$id_promosi),'refresh');
		}


	}


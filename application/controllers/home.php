<?php
class Home extends CI_Controller {

	function index(){
	$data['news'] = $this->model_news->berita();
	$this->load->view('header');
	$this->load->view('home',$data);
	$this->load->view('footer');
	}
	
	function proses(){
			$config['upload_path'] = './foto/';
			$config['allowed_types'] = 'jpg|png';
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload())
			{
				//file gagal diupload -> kembali ke form tambah
				$this->load->view('header');
				$this->load->view('tambah');
				$this->load->view('footer');
			} else {
		$username = $this->session->userdata('id_user');
		$title = $this->input->post('title');
		$content = $this->input->post('content');
		$kategori = $this->input->post('kategori');
		$gambar = $this->upload->data();
		$data =	array(
					'title'=>$title,
					'content'=>$content,
					'kategori'=>$kategori,
					'image'	=> $gambar['file_name'],
					'id_user'=>$username
				);
				$this->model_news->tambah($data,'news');
				redirect(base_url('home'));
	}
	}

	function batal($id = NULL){
		   $this->model_news->batal($id);
		   redirect(base_url('home'));
		}

	public function update($id){
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('content', 'Konten', 'required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['data'] = $this->model_news->find($id);
			$this->load->view('header');
			$this->load->view('edit', $data);
			$this->load->view('footer');
		} else {
			if($_FILES['userfile']['name'] != ''){
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']	= '300'; //KB
				$config['max_width']  = '2000'; //pixels
				$config['max_height']  = '2000'; //pixels

				$this->load->library('upload', $config);
			
			
				if ( ! $this->upload->do_upload())
				{
					$data['data'] = $this->model_news->find($id);
					$this->load->view('header');
					$this->load->view('edit', $data);
					$this->load->view('footer');
				} else {
					$gambar = $this->upload->data();
					$data_product =	array(
						'title'			=> set_value('title'),
						'content'	=> set_value('content'),
						'kategori'			=> set_value('kategori'),
						'image'			=> $gambar['file_name']
					);
					$this->model_news->update($id, $data_product);
					 echo "<script type='text/javascript'> alert('Data Telah Tersimpan');</script>";
					redirect(base_url('home'));
				}
			} else {
				$data_product =	array(
					'title'			=> set_value('title'),
						'content'	=> set_value('content'),
						'kategori'			=> set_value('kategori')
				);
				$this->model_news->update($id, $data_product);
				echo "<script type='text/javascript'> alert('Data Telah Tersimpan');</script>";
				redirect(base_url('home'));
			}
		}
	}

	function mencari() {
	$data['cari'] = $this->model_news->cari();
	$this->load->view('header');
	$this->load->view('cari', $data);
	$this->load->view('footer');
	}

}
?>
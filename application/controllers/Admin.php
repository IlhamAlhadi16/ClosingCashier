<?php 

Class Home extends CI_Controller {
	public function index($nama = '')
	{
		$data['judul'] = 'Halaman Home';
		$data['nama'] = $nama;
		$this->load->view('layout/header', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('layout/footer');
	}
}

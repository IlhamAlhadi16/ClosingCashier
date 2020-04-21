<?php if(! defined('BASEPATH')) exit('No Direct script access allowed');

class MY_Controller extends CI_Controller{
	public function __construct()
	{
		parent::__construct();

		$this->authenticated(); //Panggil fungsi authenticated
	}

	public function authenticated() //fungsi ini berguna untuk mengecek user sudah login apa belum	
	{ //Pertama kita cek dulu apakah controller saat ini sedang di akses user adalah Auth apa bukan
	  //Karena fungsi cek login hanya kita berlakukan untuk controller selain controller Auth
	  if ($this->uri->segment(1) != 'auth' && $this->uri->segment(1) != '') {
		//   Cek apakah terdapat session dengan nama authenticated
		if (! $this->session->userdata('authenticated')) //Jika tidak ada / artinya belum login 
			redirect('auth'); //Redirect ke halaman login
	  }
	}

	  public function render_login($content, $data = null)
	  {
		  /*
		  * $data['contentnya']
		  *variable diatas ^ nantinya akan dikirim ke file views/template/login/index.php
		  * */
		  $data['contentnya'] = $this->load->view($content, $data, TRUE);

		  $this->load->view('login', $data);
	  }

	  public function render_backend($content, $data = null)
	  {
		  /*
		  *data['headernya'], $data['contetnya']
		  *variable diatas ^ nantinya akan dikirim ke file views/template/backend/index.php
		  * */
		  $data['headernya'] = $this->load->view('templates/header', $data, TRUE);
		  $data['contentnya'] = $this->load->view($content, $data, TRUE);

		  $this->load->view('mahasiswa/index', $data);
	  }
}

<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('UserModel');
	}

	public function index()
	{
		// if ($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
		// redirect('home/index'); // Redirect ke page home

		// function render_login tersebut dari file core/MY_Controller.php
		$this->render_login('login'); //Load view login.php
	}

	public function login()
	{
		$username = $this->input->post('username'); //Ambil dari inputan username pada form login
		$password = $this->input->post('password'); //Ambil dari inputan password pada form login dan encrypt dengan md5

		$user = $this->UserModel->get($username); //Panggil methode get yang ada di UserModel.php

		if (empty($user)) { //jika hasilnya kosong atau user tidak ditemukan
			$this->session->set_flashdata('message', 'Username tidak ditemukan'); //Buat session flashdata
			redirect('auth'); //Redirect ke halaman login
		}else {
			if ($password == $user->password) { //Jika password yang diinput sama dengan password di database
				$session = array(
					'authenticated' => true, //Buat session authenticated dengan value true
					'username' => $user->username, //Buat session username
					'nama' => $user->nama, //Buat session nama
					'role' => $user->role //Buat session role
				);

				$this->session->set_userdata($session);// Buat session sesuai session
				if ($session['role'] == "admin") {
					// redirect('admin/index'); //Redirect ke halaman home
					$this->load->view('admin/index');
				}else if ($session['role'] == "kepala") {
					// redirect('kepala/index'); //Redirect ke halaman home
					$this->load->view('kepala/index');
				}else if ($session['role'] == 'kasir') {
					// redirect('kasir/index'); //Redirect ke halaman home
					$this->load->view('kasir/index');
				}
			}else{
				$this->session->set_flashdata('message', 'Password Salah');
				redirect('auth'); //Redirect ke halaman login
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth'); //Redirect ke halaman login
	}
}

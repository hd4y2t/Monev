<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	
	public function beranda()
	{
		$this->load->view('sidebar');
		$this->load->view('header_logo');
		$this->load->view('content');
	}
	
	public function login()
	{
		$data=array(			
			'username' => $this->input->post("username"),
			'password' => $this->input->post("password")
		);
		
		$check=$this->m_login->check_login($data);
		if($check != false){
			$user = array(
				"id" => $check->id_user,
				"username" => $check->username,
				"password" => $check->password,
				"akses" => $check->status_user
			);
			$this->session->set_userdata($user);	
			//$_SESSION["tahun"] = $this->input->post("tahun");
			$_SESSION["id"] = $check->id_user;
			$_SESSION["username"] = $check->username;
			$_SESSION["akses"] = $check->status_user;
			redirect(base_url("dashboard/beranda"));			
		}else{
			echo "<script>alert('Gagal')</script>";
			$this->load->view("login");
			
		}
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		$this->load->view("login");
	}
	
	public function cetakLaporanTemuanGPMP1()
	{		
		$this->load->view('cetakLaporanTemuanGPMP1');		
	}
	public function cetakLaporanTemuanGPMP2($id)
	{		
		$this->load->view('cetakLaporanTemuanGPMP2');		
	}
	public function cetakLaporanTemuanGPMF1()
	{		
		$this->load->view('cetakLaporanTemuanGPMF1');		
	}
	public function cetakLaporanTemuanGPMF2($id)
	{		
		$this->load->view('cetakLaporanTemuanGPMF2');		
	}
		
}

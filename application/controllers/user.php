<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$data["data_user"] = $this->m_user->tampil_data()->result();
		$this->load->view('sidebar');
		$this->load->view('header');
		$this->load->view('v_data_user', $data);
		$this->load->view('content');
	}
	
	public function tambah()
	{
		$this->load->view('sidebar');
		$this->load->view('header');
		$this->load->view('v_input_user');
		$this->load->view('content');
	}
	
	public function input_data()
	{
		$nama_lengkap = $this->input->post('nama_lengkap');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$status = $this->input->post('status');
		
		$data = array(
			'nama_lengkap' => $nama_lengkap,
			'username' => $username,
			'password' => $password,
			'status_user' => $status
		);
		
		$this->m_user->simpan("user", $data);
		redirect("user");
	}
	
	public function edit($id)
	{
		$where = array("id_user" => $id);
		$data["data_user"] = $this->m_user->edit_data("user", $where)->result();
		
		$this->load->view('sidebar');
		$this->load->view('header');
		$this->load->view('v_edit_user', $data);
		$this->load->view('content');
	}
	
	public function update($id)
	{
		$nama_lengkap = $this->input->post('nama_lengkap');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$status = $this->input->post('status');
		
		$data = array(
			'nama_lengkap' => $nama_lengkap,
			'username' => $username,
			'password' => $password,
			'status_user' => $status
		);
		
		
		$where=array('id_user' => $id);
		$this->m_user->update_data($where, "user", $data);
		redirect("user");
	}
	
	public function hapus($id)
	{
		$where=array('id_user' => $id);
		$this->m_user->hapus_data($where,"user");

		redirect("user");
	}
		
}

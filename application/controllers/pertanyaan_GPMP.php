<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertanyaan_GPMP extends CI_Controller {

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
		//$where = array("tahun" => $this->session->userdata("tahun"));
		$data["data_pertanyaan"] = $this->m_pertanyaan_gpmp->tampil_data()->result();
		$this->load->view('sidebar');
		$this->load->view('header');
		$this->load->view('v_data_pertanyaan_GPMP', $data);
		$this->load->view('content');
	}
	
	public function data_detail($id)
	{		
		$where = array("id_pertanyaan_gpmp" => $id);
		$data["data_detail_pertanyaan"] = $this->m_pertanyaan_gpmp->tampil_data_detail("detail_pertanyaan_gpmp", $where)->result();
		
		
		//$data["data_detail_pertanyaan"] = $this->m_pertanyaan->tampil_data_detail()->result();
		$this->load->view('sidebar');
		$this->load->view('header');
		$this->load->view('v_data_detail_pertanyaan_GPMP', $data);
		$this->load->view('content');
	}
	
	public function tambah()
	{
		$this->load->view('sidebar');
		$this->load->view('header');
		$this->load->view('v_pilih_kategori');
		//$this->load->view('v_modal_tahun1');
		//$this->load->view('v_input_pertanyaan_GPMP');
		$this->load->view('content');
	}
	
	public function input_data()
	{		
		$tahun=$this->session->userdata("tahun");
		$nama = $this->input->post('pertanyaan');				
		$kategori = $this->input->post('id_subktg_gpmp');				
		$share = '0';		
		$id_user = $this->session->userdata('id');
		$level = $this->input->post('level');
		
		$data = array(			
			'tahun' => $tahun,			
			'pertanyaan' => $nama,						
			'id_subktg_gpmp' => $kategori,
			
			'share' => $share,
			'id_user' => $id_user,
			'level' => $level,
		);
		
		$this->m_pertanyaan_gpmp->simpan("pertanyaan_gpmp", $data);
		
		redirect(base_url("pertanyaan_gpmp/tambah"));
	}
	
	public function edit($id)
	{
		$where = array("id_pertanyaan_gpmp" => $id);
		$data["data_pertanyaan"] = $this->m_pertanyaan_gpmp->edit_data("pertanyaan_gpmp", $where)->result();
		
		$this->load->view('sidebar');
		$this->load->view('header');
		$this->load->view('v_edit_pertanyaan_gpmp', $data);
		$this->load->view('content');
	}
	
	public function update($id)
	{		
		//$tahun=$this->session->userdata("tahun");
		$nama = $this->input->post('pertanyaan');				
		//$kategori = $this->input->post('kategori');		
		
		$share = '0';		
		$id_user = $this->session->userdata('id');
		
		$data = array(			
			//'tahun' => $tahun,			
			'pertanyaan' => $nama,						
			//'kategori' => $kategori,
			//'share' => $share,
			'id_user' => $id_user
		);
		
		$where=array('id_pertanyaan_gpmp' => $id);
		$this->m_pertanyaan_gpmp->update_data($where, "pertanyaan_gpmp", $data);
		redirect(base_url("pertanyaan_gpmp"));
	}
	
	public function hapus($id)
	{
		$where = array("id_pertanyaan_gpmp" => $id);
		$this->m_pertanyaan_gpmp->hapus_data($where,"pertanyaan_gpmp");
		$this->m_pertanyaan_gpmp->hapus_data_detail($where,"detail_pertanyaan");
		redirect(base_url("pertanyaan_gpmp"));
	}
	public function share($id)
	{						
		$share = '1';				
		
		$data = array(									
			'share' => $share
		);
		
		$where=array('id_pertanyaan_gpmp' => $id);
		$this->m_pertanyaan_gpmp->update_data($where, "pertanyaan_gpmp", $data);
		redirect(base_url("pertanyaan_gpmp"));
	}
	public function hapus_detail($id)
	{
		$where = array("id_detail_pertanyaan_gpmp" => $id);		
		$this->m_pertanyaan_gpmp->hapus_data_detail($where,"detail_pertanyaan_gpmp");
		redirect(base_url("pertanyaan_gpmp"));
	}
	
	public function detail($id)
	{
		$where = array("id_pertanyaan_gpmp" => $id);
		$data["data_pertanyaan"] = $this->m_pertanyaan_gpmp->edit_data("pertanyaan_gpmp", $where)->result();
		
		$this->load->view('sidebar');
		$this->load->view('header');
		$this->load->view('v_input_detail_pertanyaan_gpmp', $data);
		$this->load->view('content');
	}
	
	public function input_data_detail()
	{	
		$id_pertanyaan = $this->input->post('id');
		$pilihan_jawaban = $this->input->post('pilihan_jawaban');		
				
		
		$data = array(
			'id_pertanyaan_gpmp' => $id_pertanyaan,			
			'pilihan_jawaban' => $pilihan_jawaban
		);
		
		$this->m_pertanyaan_gpmp->simpan_detail("detail_pertanyaan_gpmp", $data);
		redirect(base_url("pertanyaan_gpmp"));
	}
		
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertanyaan_GPMF extends CI_Controller {

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
		$data["data_pertanyaan"] = $this->m_pertanyaan_gpmf->tampil_data()->result();
		$this->load->view('sidebar');
		$this->load->view('header');
		$this->load->view('v_data_pertanyaan_GPMF', $data);
		$this->load->view('content');
	}
	
	public function data_detail($id)
	{		
		$where = array("id_pertanyaan_gpmf" => $id);
		$data["data_detail_pertanyaan"] = $this->m_pertanyaan_gpmf->tampil_data_detail("detail_pertanyaan_gpmf", $where)->result();
		
		
		//$data["data_detail_pertanyaan"] = $this->m_pertanyaan->tampil_data_detail()->result();
		$this->load->view('sidebar');
		$this->load->view('header');
		$this->load->view('v_data_detail_pertanyaan_GPMF', $data);
		$this->load->view('content');
	}
	
	public function tambah()
	{
		$this->load->view('sidebar');
		$this->load->view('header');
		$this->load->view('v_pilih_kategori2');
		//$this->load->view('v_input_pertanyaan_GPMP');
		$this->load->view('content');
	}
	
	public function input_data()
	{		
		$tahun=$this->session->userdata("tahun");
		$nama = $this->input->post('pertanyaan');				
		$kategori = $this->input->post('id_subktg_gpmf');		
		
		$share = '0';		
		$id_user = $this->session->userdata('id');
		
		$data = array(			
			'tahun' => $tahun,			
			'pertanyaan' => $nama,						
			'id_subktg_gpmf' => $kategori,
			'share' => $share,
			'id_user' => $id_user,
			'level' => "WADEK"
		);
		
		$this->m_pertanyaan_gpmf->simpan("pertanyaan_gpmf", $data);
		
		redirect(base_url("pertanyaan_gpmf/tambah"));
	}
	
	public function edit($id)
	{
		$where = array("id_pertanyaan_gpmf" => $id);
		$data["data_pertanyaan"] = $this->m_pertanyaan_gpmf->edit_data("pertanyaan_gpmf", $where)->result();
		
		$this->load->view('sidebar');
		$this->load->view('header');
		$this->load->view('v_edit_pertanyaan_gpmf', $data);
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
		
		$where=array('id_pertanyaan_gpmf' => $id);
		$this->m_pertanyaan_gpmf->update_data($where, "pertanyaan_gpmf", $data);
		redirect(base_url("pertanyaan_gpmf"));
	}
	
	public function hapus($id)
	{
		$where = array("id_pertanyaan_gpmf" => $id);
		$this->m_pertanyaan_gpmf->hapus_data($where,"pertanyaan_gpmf");
		$this->m_pertanyaan_gpmf->hapus_data_detail($where,"detail_pertanyaan");
		redirect(base_url("pertanyaan_gpmf"));
	}
	public function share($id)
	{						
		$share = '1';				
		
		$data = array(									
			'share' => $share
		);
		
		$where=array('id_pertanyaan_gpmf' => $id);
		$this->m_pertanyaan_gpmf->update_data($where, "pertanyaan_gpmf", $data);
		redirect(base_url("pertanyaan_gpmf"));
	}
	public function hapus_detail($id)
	{
		$where = array("id_detail_pertanyaan_gpmf" => $id);		
		$this->m_pertanyaan_gpmf->hapus_data_detail($where,"detail_pertanyaan_gpmf");
		redirect(base_url("pertanyaan_gpmf"));
	}
	
	public function detail($id)
	{
		$where = array("id_pertanyaan_gpmf" => $id);
		$data["data_pertanyaan"] = $this->m_pertanyaan_gpmf->edit_data("pertanyaan_gpmf", $where)->result();
		
		$this->load->view('sidebar');
		$this->load->view('header');
		$this->load->view('v_input_detail_pertanyaan_gpmf', $data);
		$this->load->view('content');
	}
	
	public function input_data_detail()
	{	
		$id_pertanyaan = $this->input->post('id');
		$pilihan_jawaban = $this->input->post('pilihan_jawaban');		
				
		
		$data = array(
			'id_pertanyaan_gpmf' => $id_pertanyaan,			
			'pilihan_jawaban' => $pilihan_jawaban
		);
		
		$this->m_pertanyaan_gpmf->simpan_detail("detail_pertanyaan_gpmf", $data);
		redirect(base_url("pertanyaan_gpmf"));
	}
		
}

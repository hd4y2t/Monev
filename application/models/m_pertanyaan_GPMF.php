<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pertanyaan_GPMF extends CI_Model {

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
	public function tampil_data()
	{
		//return $this->db->get_where("pertanyaan_gpmf", $where);
		$this->db->select("*");
		$this->db->from("pertanyaan_gpmf");
		$this->db->join("subkategori_gpmf", "pertanyaan_gpmf.id_subktg_gpmf = subkategori_gpmf.id_subktg_gpmf");				
		//return $this->db->get_where($table, $where);
		return $this->db->get();
	}
	
	public function tampil_data_detail($table, $where)
	{
		//return $this->db->get("detail_pertanyaan");
		return $this->db->get_where($table, $where);
	}
	
	public function simpan($table, $data)
	{
		$this->db->insert($table, $data);
		
	}
	public function simpan_detail($table, $data)
	{
		$this->db->insert($table, $data);
		
	}
	
	public function edit_data($table, $where)
	{
		return $this->db->get_where($table, $where);
	}	
	
	public function update_data($where, $table, $data)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	
	public function share_($where, $table, $data)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	
	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function hapus_data_detail($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
		
}

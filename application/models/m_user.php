<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

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
		return $this->db->get("user");
	}
	
	public function simpan($table, $data)
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
	
	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
		
}

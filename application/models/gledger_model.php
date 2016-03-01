<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Gledger_model extends CI_Model
{
	function add_department($data)
	{
	   $this->db->insert('tbl_gldepartment', $data);
	}

	function get_all_department()
	{
		$data = $this->db->get('tbl_gldepartment');
		return $data;
	}

	function get_det_department($where)
	{
		$this->db->where('kd_department', $where);
		$res = $this->db->get('tbl_gldepartment');
		return $res;
	}

	function edit_gl_department($kd,$data)
	{
		$this->db->where('kd_department',$kd);
		$this->db->update('tbl_gldepartment', $data);
	}

	function delete_department($where)
	{
		$this->db->where('kd_department', $where);
		$res = $this->db->delete('tbl_gldepartment');
		return $res;
	}

	function add_category($data)
	{
	   $this->db->insert('tbl_glkategori', $data);
	}

	function get_all_category()
	{
		$data = $this->db->get('tbl_glkategori');
		return $data;
	}

	function edit_gl_kategori($kd,$data)
	{
		$this->db->where('kd_kategori',$kd);
		$this->db->update('tbl_glkategori', $data);
	}

	function delete_category($where)
	{
		$this->db->where('kd_kategori', $where);
		$res = $this->db->delete('tbl_glkategori');
		return $res;
	}

	function get_det_gcategory($where)
	{
		$this->db->where('kd_kategori', $where);
		$res = $this->db->get('tbl_glkategori');
		return $res;
	}
}
?>
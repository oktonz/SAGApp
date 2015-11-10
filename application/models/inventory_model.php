<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Inventory_model extends CI_Model
{
	function add_gudang($data)
	{
	   $this->db->insert('tbl_ingudang', $data);
	}

	function get_gudang()
	{
		$data = $this->db->get('tbl_ingudang');
		return $data;
	}

	function get_kategori()
	{
		$data = $this->db->get('tbl_inkategori');
		return $data;
	}

	function get_det_kategori($data)
	{
		$this->db->where('kd_kategori', $data);
		$query = $this->db->get('tbl_inkategori');
		return $query;
	}

	function edit_kategori($where, $data)
	{
		$this->db->where('kd_kategori', $where);
		$this->db->update('tbl_inkategori', $data);
	}

	function delete_kategori($data)
	{
		$this->db->where('kd_kategori', $data);
		$query = $this->db->delete('tbl_inkategori');
		return $query;
	}

	function add_kategori($data)
	{
		$this->db->insert('tbl_inkategori', $data);
	}

	function get_produk()
	{
		$data = $this->db->get('tbl_inproduk');
		return $data;
	}

	function add_produk($data)
	{
		$this->db->insert('tbl_inproduk', $data);
	}

	function delete_gudang($data)
	{
		$this->db->where('kd_gudang', $data);
		$query = $this->db->delete('tbl_ingudang');
		return $query;
	}

	function get_det_gudang($data)
	{
		$this->db->where('kd_gudang', $data);
		$query = $this->db->get('tbl_ingudang');
		return $query;
	}

	function edit_gudang($where, $data)
	{
		$this->db->where('kd_gudang', $where);
		$this->db->update('tbl_ingudang', $data);
	}
}
?>
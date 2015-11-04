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
}
?>
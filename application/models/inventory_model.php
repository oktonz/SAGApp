<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Inventory_model extends CI_Model
{
	function add_gudang($data)
	{
	   $this->db->insert('tbl_ingudang', $data);
	}

	function add_kategori($data)
	{
		$this->db->insert('tbl_inkategori', $data);
	}
}
?>
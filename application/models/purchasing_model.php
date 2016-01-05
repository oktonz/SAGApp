<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Purchasing_model extends CI_Model
{
	function add_supplier($data)
	{
	   $this->db->insert('tbl_posupplier', $data);
	}

	function get_all_sup()
	{
		$data = $this->db->get('tbl_posupplier');
		return $data;
	}
}
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Invoicing_model extends CI_Model
{
	function add_customers($data)
	{
		$res = $this->db->insert('tbl_sicustomers', $data);
	}

	function get_all_cust()
	{
		$data = $this->db->get('tbl_sicustomers');
		return $data; 
	}
}
?>
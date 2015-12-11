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

	function add_mstprod($data)
	{
		$this->db->insert('tbl_inmstproduk', $data);
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

	function add_intransmsk($data)
	{
		$this->db->insert('tbl_intransmsk', $data);
	}

	function add_dettransmsk($data)
	{
		$this->db->insert('tbl_dettransmsk', $data);
	}

	function add_intransklr($data)
	{
		$this->db->insert('tbl_intransklr', $data);
	}

	function add_dettransklr($data)
	{
		$this->db->insert('tbl_dettransklr', $data);
	}

	function update_produk()
	{
		$this->db->where('kd_produk', $kd);
		$this->db->update('tbl_inmstproduk', $data);
	}

	function get_trans_receipt()
	{
		$this->db->select('*');
		$this->db->from('tbl_intransmsk');
		$data = $this->db->get();
		return $data;
	}

	function get_trans_delivery()
	{
		$this->db->select('*');
		$this->db->from('tbl_intransklr');
		$data = $this->db->get();
		return $data;
	}

	function get_det_produk_receipt($kd)
	{
		$this->db->select('*');
		$this->db->from('tbl_dettransmsk');
		$this->db->join('tbl_inproduk', 'tbl_inproduk.kd_produk = tbl_dettransmsk.kd_produk');
		$this->db->where('kd_transmsk', $kd);
		$data = $this->db->get();
		return $data;
	}

	function get_det_trans_receipt($kd)
	{
		$this->db->select('*');
		$this->db->from('tbl_intransmsk');
		$this->db->where('kd_transmsk', $kd);
		$data = $this->db->get();
		return $data;
	}

	function get_det_produk_delivery($kd)
	{
		$this->db->select('*');
		$this->db->from('tbl_dettransklr');
		$this->db->join('tbl_inproduk', 'tbl_inproduk.kd_produk = tbl_dettransklr.kd_produk');
		$this->db->where('kd_transklr', $kd);
		$data = $this->db->get();
		return $data;
	}

	function get_det_trans_delivery($kd)
	{
		$this->db->select('*');
		$this->db->from('tbl_intransklr');
		$this->db->where('kd_transklr', $kd);
		$data = $this->db->get();
		return $data;
	}
}
?>
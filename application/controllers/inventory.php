<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inventory extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('inventory_model');
	}

	public function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer()
				);
			$this->load->view('addgudang_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function view_gudang()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$gudang = $this->inventory_model->get_gudang();
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer(),
				'gudang' => $gudang->result_array()
				);
			$this->load->view('gudang_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function add_gudang()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer()
				);
			$this->load->view('addgudang_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function do_add_gudang()
	{
		$dat = array(
			'kd_gudang' => $this->input->post('txtkdgudang'),
			'nama_gudang' => $this->input->post('txtgudang'),
			'ket_gudang' => $this->input->post('txtket')
			);
		$this->inventory_model->add_gudang($dat);
		redirect('index.php/inventory/view_gudang');
	}

	public function view_kategori()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$kategori = $this->inventory_model->get_kategori();
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer(),
				'kategori' => $kategori->result_array()
				);
			$this->load->view('kategori_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function add_kategori()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer()
				);
			$this->load->view('addkategori_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function do_add_kategori()
	{
		$dat = array(
			'kd_kategori' => $this->input->post('txtkdkategori'),
			'nama_kategori' => $this->input->post('txtkategori'),
			'ket_kategori' => $this->input->post('txtket')
			);
		$this->inventory_model->add_kategori($dat);
		redirect('index.php/inventory/view_kategori');
	}

	public function html_topbar()
	{
		$session_data = $this->session->userdata('logged_in');
		$data = array(
			'id' => $session_data['id'],
			'username' => $session_data['username'],
		);
		return $this->load->view('header_v', $data, true);
	}

	public function html_navigasi()
	{
		$data = array(//data
			);
		return $this->load->view('sidebar_v', $data, true);
	}

	public function html_footer()
	{
		$data = array(//data
			);
		return $this->load->view('footer_v', $data, true);
	}

}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Invoicing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('invoicing_model');
	}

	public function index()
	{
		//index function
	}

	public function view_customers()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$cust = $this->invoicing_model->get_all_cust();
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer(),
				'customers' => $cust->result_array()
				);
			$this->load->view('invoicing/dafCustomer_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function add_cust()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer()
				);
			$this->load->view('invoicing/addCustomer_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function do_add_cust()
	{
		if($this->session->userdata('logged_in'))
		{
			$dat = array(
			//'kd_cust' => $this->input->post(''),
			'nama_cust' => $this->input->post('txtcust'),
			'nama_perusahaan' => $this->input->post('txtperusahaan'),
			'alamat' => $this->input->post('txtalamat'),
			'kota' => $this->input->post('txtkota'),
			'telp' => $this->input->post('txttelp'),
			);
			$this->invoicing_model->add_customers($dat);
			redirect('index.php/invoicing/view_customers');
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function html_topbar()
	{
		$session_data = $this->session->userdata('logged_in');
		$data = array(
			'id' => $session_data['id'],
			'username' => $session_data['username'],
			'jabatan' => $session_data['jabatan'],
			'tgl' => $session_data['tgl']
		);
		return $this->load->view('common/header_v', $data, true);
	}

	public function html_navigasi()
	{
		$session_data = $this->session->userdata('logged_in');
		$data = array(
			'id' => $session_data['id'],
			'username' => $session_data['username'],
			'jabatan' => $session_data['jabatan'],
			'tgl' => $session_data['tgl']
		);
		return $this->load->view('common/sidebar_v', $data, true);
	}

	public function html_footer()
	{
		$data = array(//DATA
			);
		return $this->load->view('common/footer_v', $data, true);
	}

}

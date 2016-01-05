<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Purchasing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('purchasing_model');
	}

	public function index()
	{
		//index function
	}

	public function view_supplier()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$sup = $this->purchasing_model->get_all_sup();
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer(),
				'suppliers' => $sup->result_array()
				);
			$this->load->view('purchasing/dafSupplier_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function add_supp()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer()
				);
			$this->load->view('purchasing/addSupplier_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function do_add_supp()
	{
		if($this->session->userdata('logged_in'))
		{
			$dat = array(
			//'kd_sup' => $this->input->post(''),
			'nama_sup' => $this->input->post('txtsup'),
			'nama_perusahaan' => $this->input->post('txtperusahaan'),
			'alamat' => $this->input->post('txtalamat'),
			'kota' => $this->input->post('txtkota'),
			'telp' => $this->input->post('txttelp'),
			);
			$this->purchasing_model->add_supplier($dat);
			redirect('index.php/purchasing/view_supplier');
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

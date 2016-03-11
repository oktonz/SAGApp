<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gledger extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('gledger_model');
	}

	public function index()
	{
		//index function
	}

	public function view_gl_department()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$dep = $this->gledger_model->get_all_department();
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer(),
				'departments' => $dep->result_array()
				);
			$this->load->view('gLedger/dafDepartment_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function add_gl_department()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer()
				);
			$this->load->view('gLedger/addDepartment_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function do_add_gl_department()
	{
		if($this->session->userdata('logged_in'))
		{
			$dat = array(
			'kd_department' => $this->input->post('txtkddepartment'),
			'nm_department' => $this->input->post('txtdepartment'),
			'keterangan' => $this->input->post('txtket'),			
			);
			$this->gledger_model->add_department($dat);
			redirect('index.php/gLedger/view_gl_department');
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function edit_gl_department($kd)
	{
		if ($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$department = $this->gledger_model->get_det_department($kd);
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer(),
				'department' => $department->row()
				);
			$this->load->view('gLedger/editDepartment_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function do_edit_gl_department()
	{
		if ($this->session->userdata('logged_in'))
		{
			$kode = $this->input->post('txtkddepartment');
			$dat = array(
				'kd_department' => $kode,
				'nm_department' => $this->input->post('txtdepartment'),
				'keterangan' => $this->input->post('txtket')
				);
			$this->gledger_model->edit_gl_department($kode, $dat);
			redirect('index.php/gledger/view_gl_department');
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function do_del_gl_department($kd)
	{
		if($this->session->userdata('logged_in'))
		{
			$rs = $this->gledger_model->delete_department($kd);
			if($rs)
			{
				redirect('index.php/gledger/view_gl_department');
			}
			else
			{

			}
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function view_gl_category()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$gcat = $this->gledger_model->get_all_category();
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer(),
				'glcategories' => $gcat->result_array()
				);
			$this->load->view('gLedger/dafGcategory_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function add_gl_Category()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer()
				);
			$this->load->view('gLedger/addGcategory_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function do_add_gl_category()
	{
		if($this->session->userdata('logged_in'))
		{
			$dat = array(
			'kd_kategori' => $this->input->post('txtkdglkategori'),
			'nm_kategori' => $this->input->post('txtglkategori'),
			'keterangan' => $this->input->post('txtket'),			
			);
			$this->gledger_model->add_category($dat);
			redirect('index.php/gLedger/view_gl_category');
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function edit_gl_category($kd)
	{
		if ($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$gcategory = $this->gledger_model->get_det_gcategory($kd);
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer(),
				'gcat' => $gcategory->row()
				);
			$this->load->view('gLedger/editGcategory_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}

	}

	public function do_edit_gl_category()
	{
		if ($this->session->userdata('logged_in'))
		{
			$kode = $this->input->post('txtkdglkategori');
			$dat = array(
				'kd_kategori' => $kode,
				'nm_kategori' => $this->input->post('txtglkategori'),
				'keterangan' => $this->input->post('txtket')
				);
			$this->gledger_model->edit_gl_kategori($kode, $dat);
			redirect('index.php/gledger/view_gl_category');
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function do_del_gl_category($kd)
	{
		if($this->session->userdata('logged_in'))
		{
			$rs = $this->gledger_model->delete_category($kd);
			if($rs)
			{
				redirect('index.php/gledger/view_gl_category');
			}
			else
			{
				
			}
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function view_gl_akun()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$acc = $this->gledger_model->get_all_account();
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer(),
				'gledger' => $acc->result_array()
				);
			$this->load->view('gLedger/dafAkunGl_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function add_gl_akun()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer()
				);
			$this->load->view('gLedger/addAkunGl_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function do_add_akun_gl()
	{
		if($this->session->userdata('logged_in'))
		{
			$dat = array(
			'kode_gl' => $this->input->post('txtkodegl'),
			'nama_gl' => $this->input->post('txtnamagl'),
			'saldo_awal' => $this->input->post('txtsaldogl'),			
			);
			$this->gledger_model->add_account($dat);
			redirect('index.php/gLedger/view_gl_akun');
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function edit_akun_gl()
	{

	}

	public function do_edit_akun_gl()
	{

	}

	public function do_del_akun_gl()
	{

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

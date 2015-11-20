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

	public function do_del_gudang($data)
	{
		if($this->session->userdata('logged_in'))
		{
			$query = $this->inventory_model->delete_gudang($data);
			if ($query) {
				redirect('index.php/inventory/view_gudang');
			}
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function edit_gudang($data)
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$gudang = $this->inventory_model->get_det_gudang($data);
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer(),
				'gudang' => $gudang->row()
				);
			$this->load->view('editgudang_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function do_edit_gudang()
	{
		$kode = $this->input->post('txtkdgudang');
		$dat = array(
			'kd_gudang' => $kode,
			'nama_gudang' => $this->input->post('txtgudang'),
			'ket_gudang' => $this->input->post('txtket')
			);
		$this->inventory_model->edit_gudang($kode, $dat);
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

	public function do_del_kategori($data)
	{
		if($this->session->userdata('logged_in'))
		{
			$query = $this->inventory_model->delete_kategori($data);
			if ($query) {
				redirect('index.php/inventory/view_kategori');
			}
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function edit_kategori($data)
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$kategori = $this->inventory_model->get_det_kategori($data);
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer(),
				'kat' => $kategori->row()
				);
			$this->load->view('editkategori_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function do_edit_kategori()
	{
		$kode = $this->input->post('txtkdkategori');
		$dat = array(
			'kd_kategori' => $kode,
			'nama_kategori' => $this->input->post('txtkategori'),
			'ket_kategori' => $this->input->post('txtket')
			);
		$this->inventory_model->edit_kategori($kode, $dat);
		redirect('index.php/inventory/view_kategori');
	}

	public function add_produk()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$gudang = $this->inventory_model->get_gudang();
			$kategori = $this->inventory_model->get_kategori();
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer(),
				'gudang' => $gudang->result_array(),
				'kategori' => $kategori->result_array()
				);
			$this->load->view('addproduk_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function view_produk()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$produk = $this->inventory_model->get_produk();
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer(),
				'produk' => $produk->result_array()
				);
			$this->load->view('produk_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}

	}

	public function do_add_produk()
	{
		$dat = array(
			'kd_produk' => $this->input->post('txtkdproduk'),
			'kd_gudang' => $this->input->post('cbogudang'),
			'kd_kategori' => $this->input->post('cbokategori'),
			'nama_produk' => $this->input->post('txtproduk'),
			'ket_produk' => $this->input->post('txtket')
			);
		$this->inventory_model->add_produk($dat);
		redirect('index.php/inventory/view_produk');	
	}

	public function add_prod_stok()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer(),				
				);
			$this->load->view('addprodstok_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function do_add_trans()
	{
		
		$dat = array(
			'nama_produk' => $this->input->post('txtnmbarang'),
			'kd_produk' => $this->input->post('txtkdbarang'),
			'satuan' => $this->input->post('txtsatuan'),
			'qty' => $this->input->post('txtqty'),
			'harga' => $this->input->post('txtharga'),
			'jumlah' => $this->input->post('txtjumlah')
			);
		$this->load->view('test', $dat);
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
		return $this->load->view('header_v', $data, true);
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
		return $this->load->view('sidebar_v', $data, true);
	}

	public function html_footer()
	{
		$data = array(//data
			);
		return $this->load->view('footer_v', $data, true);
	}

}

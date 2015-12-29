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
			$this->load->view('inventory/addgudang_v', $komponen);
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
			$this->load->view('inventory/gudang_v', $komponen);
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
			$this->load->view('inventory/addgudang_v', $komponen);
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
			$this->load->view('inventory/editgudang_v', $komponen);
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
			$this->load->view('inventory/kategori_v', $komponen);
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
			$this->load->view('inventory/addkategori_v', $komponen);
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
			$this->load->view('inventory/editkategori_v', $komponen);
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
			$this->load->view('inventory/addprod_v', $komponen);
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
			$this->load->view('inventory/produk_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}

	}

	public function do_add_produk()
	{
		$prod = array(
			'kd_produk' => $this->input->post('txtkdproduk'),
			'kd_gudang' => $this->input->post('cbogudang'),
			'kd_kategori' => $this->input->post('cbokategori'),
			'nama_produk' => $this->input->post('txtproduk'),
			'ket_produk' => $this->input->post('txtket')
			);

		$mstprod = array(
			'kd_produk' => $this->input->post('txtkdproduk'),
			'harga_jual' => 0,
			'harga_beli' => 0,
			'stok' => 0
			);
		$this->inventory_model->add_produk($prod);
		$this->inventory_model->add_mstprod($mstprod);
		redirect('index.php/inventory/view_produk');	
	}

	public function add_trans_msk()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer(),				
				);
			$this->load->view('inventory/addtransmsk_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function do_add_trans()
	{
		$dat = array(
			'kd_transmsk' => $this->input->post('txtnobukti'),
			'kategori' => $this->input->post('cbokat'),
			'tanggal' => $this->input->post('txttgl'),
			'subtotal' => $this->input->post('txttot'),
			'keterangan' => $this->input->post('txtket'),
		);
		for ($i=0; $i < count($this->input->post('txtnmbarang')) ; $i++) { 
			$kd = $this->input->post('txtkdbarang')[$i];
			$stokmsk = $this->input->post('txtqty')[$i];
			$hrgbeli = $this->input->post('txtharga')[$i];
			$barang[$i] = array(
				'kd_produk' => $kd,
				'satuan' => $this->input->post('txtsatuan')[$i],
				'qty' => $stokmsk,
				'harga' => $hrgbeli,
				'jumlah' => $this->input->post('txtjumlah')[$i],
				'kd_transmsk' => $this->input->post('txtnobukti'),
				);

			$st = $this->inventory_model->get_mstprod($kd)->row();
			$stock = $st->stok;			
			$up_stok = array(
				'stok' => $stock + $stokmsk,
				'harga_beli' => $hrgbeli,
				);

			$this->inventory_model->update_mststok($kd, $up_stok);
			$this->inventory_model->add_dettransmsk($barang[$i]);
		}	
		$this->inventory_model->add_intransmsk($dat);
		redirect('index.php/inventory/view_trans_receipt');
	}

	public function view_trans_receipt()
	{	
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$receipt = $this->inventory_model->get_trans_receipt();
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer(),
				'receipt' => $receipt->result_array()
				);
			$this->load->view('inventory/daftransmsk_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function view_det_receipt($kd)
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$receipt = $this->inventory_model->get_det_produk_receipt($kd);
			$trans = $this->inventory_model->get_det_trans_receipt($kd);
 			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer(),
				'receipt' => $receipt->result_array(),
				'trans' => $trans->result_array()
				);
			$this->load->view('inventory/detprodreceipt_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function add_trans_klr()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer(),				
				);
			$this->load->view('inventory/addtransklr_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function do_add_trans_klr()
	{
		$dat = array(
			'kd_transklr' => $this->input->post('txtnobukti'),
			'kategori' => $this->input->post('cbokat'),
			'tanggal' => $this->input->post('txttgl'),
			'subtotal' => $this->input->post('txttot'),
			'keterangan' => $this->input->post('txtket'),
		);
		for ($i=0; $i < count($this->input->post('txtnmbarang')) ; $i++) { 
			$kd = $this->input->post('txtkdbarang')[$i];
			$stokklr = $this->input->post('txtqty')[$i];
			$hrgjual = $this->input->post('txtharga')[$i];
			$barang[$i] = array(
				'kd_produk' => $kd,
				'satuan' => $this->input->post('txtsatuan')[$i],
				'qty' => $stokklr,
				'harga' => $hrgjual,
				'jumlah' => $this->input->post('txtjumlah')[$i],
				'kd_transklr' => $this->input->post('txtnobukti'),
				);

			$st = $this->inventory_model->get_mstprod($kd)->row();
			$stock = $st->stok;			
			$up_stok = array(
				'stok' => $stock - $stokklr,
				'harga_jual' => $hrgjual,
				);

			$this->inventory_model->update_mststok($kd, $up_stok);
			$this->inventory_model->add_dettransklr($barang[$i]);
		}	
		$this->inventory_model->add_intransklr($dat);
		redirect('index.php/inventory/view_trans_delivery');
	}

	public function view_trans_delivery()
	{	
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$receipt = $this->inventory_model->get_trans_delivery();
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer(),
				'delivery' => $receipt->result_array()
				);
			$this->load->view('inventory/daftransklr_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function view_det_delivery($kd)
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$receipt = $this->inventory_model->get_det_produk_delivery($kd);
			$trans = $this->inventory_model->get_det_trans_delivery($kd);
 			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer(),
				'delivery' => $receipt->result_array(),
				'trans' => $trans->result_array()
				);
			$this->load->view('inventory/detproddelivery_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function view_stok_card()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$kartustok = $this->inventory_model->get_stokcard();
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer(),
				'stokcard' => $kartustok->result_array()
				);
			$this->load->view('inventory/stokcard_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function det_stok_card($kd)
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$stokcard = $this->inventory_model->get_det_stokcard($kd);
			$del = $this->inventory_model->get_det_produk_delivery_card($kd);
			$rec = $this->inventory_model->get_det_produk_receipt_card($kd);
 			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer(),
				'stokcards' => $stokcard->result_array(),
				'deliver' => $del->result_array(),
				'receipt' => $rec->result_array()
				);
			$this->load->view('inventory/detstokcard_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function edit_prod($kd)
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$gudang = $this->inventory_model->get_gudang();
			$kategori = $this->inventory_model->get_kategori();
			$produk = $this->inventory_model->get_det_produk($kd);
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer(),
				'gudang' => $gudang->result_array(),
				'kategori' => $kategori->result_array(),
				'produk' => $produk->result_array()
				);
			$this->load->view('inventory/editProduk_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function do_edit_produk()
	{
		$kode = $this->input->post('txtkdproduk');
		$dat = array(
			'kd_produk' => $kode,
			'kd_gudang' => $this->input->post('cbogudang'),
			'kd_kategori' => $this->input->post('cbokategori'),
			'nama_produk' => $this->input->post('txtproduk'),
			'ket_produk' => $this->input->post('txtket')
			);
		$this->inventory_model->edit_produk($kode, $dat);
		redirect('index.php/inventory/view_produk');
	}

	public function del_produk($kd)
	{
		if($this->session->userdata('logged_in'))
		{
			$query = $this->inventory_model->delete_produk($kd);
			if ($query) {
				redirect('index.php/inventory/view_produk');
			}
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function edit_trans_receipt($kd)
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$kategories = $this->inventory_model->get_kattrans();
			$transMsk = $this->inventory_model->get_det_trans_receipt($kd);
			$item = $this->inventory_model->get_det_produk_receipt($kd);
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer(),
				'kategoris' => $kategories->result_array(),
				'trans' => $transMsk->result_array(),
				'items' => $item->result_array()
				);
			$this->load->view('inventory/editTransMsk_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function edit_trans_delivery($kd)
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$transKlr = $this->inventory_model->get_det_trans_delivery($kd);
			$item = $this->inventory_model->get_det_produk_delivery($kd);
			$komponen = array(
				'topbar' => $this->html_topbar(),
				'sidebar' => $this->html_navigasi(),
				'footer' => $this->html_footer(),
				'trans' => $transKlr->result_array(),
				'items' => $item->result_array()
				);
			$this->load->view('inventory/editTransKlr_v', $komponen);
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function do_edit_trans_receipt()
	{		
		$kode = $this->input->post('txtnobukti');		
		$dat = array(
			'kd_transmsk' => $kode,
			'kategori' => $this->input->post('cbokat'),
			'tanggal' => $this->input->post('txttgl'),
			'subtotal' => $this->input->post('txttot'),
			'keterangan' => $this->input->post('txtket')
			);
		$cekqty = $this->inventory_model->get_det_produk_receipt($kode)->result_array();
		foreach ($cekqty as $key=>$ct) {					
          $stoktemp[$key] = $ct['qty'];
          $hrgtemp[$key] = $ct['harga'];
          $indikator[$key] = $ct['kode'];
        }
		for ($i=0; $i < count($this->input->post('txtnmbarang')) ; $i++) { 
			$kd = $this->input->post('txtkdbarang')[$i];			  
			$stokmsk = $this->input->post('txtqty')[$i];
			$hrgbeli = $this->input->post('txtharga')[$i];
			$barang[$i] = array(
				'kd_produk' => $kd,
				'satuan' => $this->input->post('txtsatuan')[$i],
				'qty' => $stokmsk,
				'harga' => $hrgbeli,
				'jumlah' => $this->input->post('txtjumlah')[$i],
				'kd_transmsk' => $this->input->post('txtnobukti'),
				);
			if ($stoktemp[$i] != $stokmsk) {
				$st = $this->inventory_model->get_mstprod($kd)->row();
				$stock = $st->stok;			
				$up_stok = array(
					'stok' => $stock + $stokmsk - $stoktemp[$i],
					//'harga_beli' => $hrgbeli,
					);
				$this->inventory_model->update_mststok($kd, $up_stok);	
			}
			if ($hrgtemp[$i] != $hrgbeli) {
				$st = $this->inventory_model->get_mstprod($kd)->row();
				$hrg = $st->harga;			
				$up_stok = array(
					//'stok' => $stokmsk,
					'harga_beli' => $hrg + $hrgbeli,
					);
				$this->inventory_model->update_mststok($kd, $up_stok);	
			}
					
			$this->inventory_model->update_receipt_items($indikator[$i], $barang[$i]);
		}
		$this->inventory_model->update_trans_receipt($kode, $dat);		
		redirect('index.php/inventory/view_trans_receipt');
	}

	public function do_edit_trans_delivery()
	{
		$kode = $this->input->post('txtnobukti');		
		$dat = array(
			'kd_transklr' => $kode,
			'kategori' => $this->input->post('cbokat'),
			'tanggal' => $this->input->post('txttgl'),
			'subtotal' => $this->input->post('txttot'),
			'keterangan' => $this->input->post('txtket')
			);
		$cekqty = $this->inventory_model->get_det_produk_delivery($kode)->result_array();
		foreach ($cekqty as $key=>$ct) {					
          $stoktemp[$key] = $ct['qty'];
          $hrgtemp[$key] = $ct['harga'];
          $indikator[$key] = $ct['kode'];
        }
		for ($i=0; $i < count($this->input->post('txtnmbarang')) ; $i++) { 
			$kd = $this->input->post('txtkdbarang')[$i];			  
			$stokklr = $this->input->post('txtqty')[$i];
			$hrgjual = $this->input->post('txtharga')[$i];
			$barang[$i] = array(
				'kd_produk' => $kd,
				'satuan' => $this->input->post('txtsatuan')[$i],
				'qty' => $stokklr,
				'harga' => $hrgjual,
				'jumlah' => $this->input->post('txtjumlah')[$i],
				'kd_transklr' => $this->input->post('txtnobukti'),
				);
			if ($stoktemp[$i] != $stokklr) {
				$st = $this->inventory_model->get_mstprod($kd)->row();
				$stock = $st->stok;			
				$up_stok = array(
					'stok' => $stock - $stokklr + $stoktemp[$i],
					//'harga_jual' => $hrgjual,
					);
				$this->inventory_model->update_mststok($kd, $up_stok);	
			}
			if ($hrgtemp[$i] != $hrgjual) {
				$st = $this->inventory_model->get_mstprod($kd)->row();
				$hrg = $st->harga;			
				$up_stok = array(
					//'stok' => $stokklr,
					'harga_jual' => $hrg + $hrgjual,
					);
				$this->inventory_model->update_mststok($kd, $up_stok);	
			}
					
			$this->inventory_model->update_delivery_items($indikator[$i], $barang[$i]);
		}
		$this->inventory_model->update_trans_delivery($kode, $dat);		
		redirect('index.php/inventory/view_trans_delivery');
	}

	public function do_delete_trans_receipt($kd)
	{
		if($this->session->userdata('logged_in'))
		{
			$kd_prod = $this->inventory_model->get_det_produk_receipt($kd);
			foreach ($kd_prod->result_array() as $key => $kp) {
				$kd_p[$key] = $kp['kd_produk'];
				$qty_p[$key] = $kp['qty'];
			}
			$query = $this->inventory_model->delete_trans_receipt($kd);
			if ($query) {
				for ($i=0; $i < $kd_prod->num_rows(); $i++) { 
					$st = $this->inventory_model->get_mstprod($kd_p[$i])->row();
					$stock = $st->stok;
					$up_stok = array(
					'stok' => $stock - $qty_p[$i]
					);
				$this->inventory_model->update_mststok($kd_p[$i], $up_stok);	
				}			
				redirect('index.php/inventory/view_trans_receipt');
			}
		}
		else
		{
			redirect('index.php/login');
		}
	}

	public function do_delete_trans_delivery($kd)
	{
		if($this->session->userdata('logged_in'))
		{
			$kd_prod = $this->inventory_model->get_det_produk_delivery($kd);
			foreach ($kd_prod->result_array() as $key => $kp) {
				$kd_p[$key] = $kp['kd_produk'];
				$qty_p[$key] = $kp['qty'];
			}
			$query = $this->inventory_model->delete_trans_delivery($kd);
			if ($query) {
				for ($i=0; $i < $kd_prod->num_rows(); $i++) { 
					$st = $this->inventory_model->get_mstprod($kd_p[$i])->row();
					$stock = $st->stok;
					$up_stok = array(
					'stok' => $stock + $qty_p[$i]
					);
				$this->inventory_model->update_mststok($kd_p[$i], $up_stok);	
				}			
				redirect('index.php/inventory/view_trans_receipt');
			}
		}
		else
		{
			redirect('index.php/login');
		}
	}

}

<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @package Codeigniter
* @subpackage Produk
* @category Controller
* @author Author Name <author@developer.org>
	*/
	class Produk extends CI_Controller
	{
		/**
		* constructor
		*/
		public function __construct()
		{
			parent::__construct();
			$this->load->model('ModelProduk');
			$this->load->model('ModelKategori');
		}
		public function index()
		{
			
		}
		public function kategori()
		{
			switch ($this->uri->segment('3')) {
				case 'kaos':
					$data = array(
						'kategori' => $this->ModelKategori->data_kaos(),
						'judul' => 'Kaos',
						'content'  => 'produk/view_kategori',
					);
					$this->load->view('layout/template', $data);
					break;
				case 'kemeja':
					$data = array(
						'kategori' => $this->ModelKategori->data_kemeja(),
						'judul' => 'Kemeja',
						'content'  => 'produk/view_kategori',
					);
					$this->load->view('layout/template', $data);
					break;
				case 'sweater':
					$data = array(
						'kategori' => $this->ModelKategori->data_sweater(),
						'judul' => 'Sweater',
						'content'  => 'produk/view_kategori',
					);
					$this->load->view('layout/template', $data);
					break;
				case 'jaket':
					$data = array(
						'kategori' => $this->ModelKategori->data_jaket(),
						'judul' => 'Jaket',
						'content'  => 'produk/view_kategori',
					);
					$this->load->view('layout/template', $data);
					break;
				case 'celana':
					$data = array(
						'kategori' => $this->ModelKategori->data_sepatu(),
						'judul' => 'Celana',
						'content'  => 'produk/view_kategori',
					);
					$this->load->view('layout/template', $data);
					break;
				case 'topi':
					$data = array(
						'kategori' => $this->ModelKategori->data_topi(),
						'judul' => 'Topi',
						'content'  => 'produk/view_kategori',
					);
					$this->load->view('layout/template', $data);
					break;
				case 'tas':
					$data = array(
						'kategori' => $this->ModelKategori->data_tas(),
						'judul' => 'Tas',
						'content'  => 'produk/view_kategori',
					);
					$this->load->view('layout/template', $data);
					break;
				default:
				redirect();
					break;
			}
		}
		public function detail()
		{
			$data = array(
				'produk'   => $this->ModelProduk->GetProduk(),
				'content'  => 'produk/detail_produk',
				'detail' => 'Nama Produk'
			);
			$this->load->view('layout/template', $data);
		}

		public function cari()
		{
			$keyword = $this->input->post('keyword');
			$data = array(
					'produk' => $this->ModelProduk->get_keyword(),
					'content' => 'cari'
			);
			$this->load->view('layout/template', $data);
		}
	}
	/* End of file Produk.php */
	/* Location : ./application/controllers/Produk.php */

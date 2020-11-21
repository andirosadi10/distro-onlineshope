<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package Codeigniter
 * @subpackage Page
 * @category Controller
 * @author Author Name <author@developer.org>
 */

class Page extends CI_Controller
{
	/**
	 * constructor
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelProduk');
	}

	public function index()
	{
		$data = array(
				'produk' => $this->ModelProduk->GetProduk(),
				'banner' => 'layout/banner',
				'content' => 'index'

		);

		$this->load->view('layout/template', $data);
	}

	public function tentang_kami()
	{	
		$data['content'] = 'page/tentang_kami';
		$this->load->view('layout/template', $data);
	}

	public function kontak()
	{
		$data['content'] = 'page/kontak';
		$this->load->view('layout/template', $data);
	}
}

/* End of file Page.php */
/* Location : ./application/controllers/Page.php */

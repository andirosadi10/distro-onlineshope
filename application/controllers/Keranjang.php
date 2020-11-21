<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package Codeigniter
 * @subpackage Keranjang
 * @category Controller
 * @author Author Name <author@developer.org>
 */

class Keranjang extends CI_Controller
{
	/**
	 * constructor
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelProduk');
		$this->load->model('ModelKeranjang');
		$this->load->model('ModelInvoice');
	}

	public function index()
	{
		$data = array(
				'produk' => $this->ModelProduk->GetProduk(),
				'banner' => 'layout/banner',
				'content' => 'keranjang/view_keranjang'

		);

		$this->load->view('layout/template', $data);
	}

	public function tambah_ke_keranjang($id)
	{
		$produk = $this->ModelProduk->find($id);
		$data = array(
			'id' 		=> $produk->id_produk,
			'name' 		=> $produk->nm_produk,
			'price'  	=> $produk->harga_jual,
			'qty'  		=> 1,
					
			);
		$this->cart->insert($data);
		redirect();
	}

	public function hapus_item_keranjang($id)
	{
		
		$data = array(
			'rowid' => $id,
			'qty' => 0, 
		);

		$this->cart->update($data);
		redirect('keranjang');
	}

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('keranjang');
	}

	public function checkouts()
	{
		$cart = $this->cart->contents();
            
        foreach ($cart as $item)
            {
                $data_keranjang = array(
                	'id_keranjang' 	=>'',
                    'id_user' 		=> '',
                    'id_produk' 	=> $item['id'],
                    'nm_produk' 	=> $item['name'],
                    'qty' 			=> $item['qty'],
                    'harga' 		=> $item['price'],
                    'subtotal' 		=> $item['subtotal'],
                            );
                $proses = $this->ModelKeranjang->insert('tb_keranjang', $data_keranjang);
            }
        $data['content'] = 'keranjang/view_checkouts';
        $this->load->view('layout/template', $data);
	}

	public function proses_checkouts()
	{
		$is_processed = $this->ModelInvoice->index();
		if ($is_processed) {
			$this->cart->destroy();
			$data = array(
					'content' => 'keranjang/proses_checkouts'

			);
			$this->load->view('layout/template', $data);
		}else{
			echo "Maaf Pesanan Anda Gagal diproses";
		}
		
	}

	
	
}

/* End of file Keranjang.php */
/* Location : ./application/controllers/Keranjang.php */

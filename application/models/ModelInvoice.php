<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package Codeigniter
 * @subpackage ModelInvoice
 * @category Model
 * @author Author Name <author@developer.org>
 */

class ModelInvoice extends CI_Model
{
	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$nama 	= $this->input->post('nama');	
		$alamat = $this->input->post('alamat');	
		$telp = $this->input->post('telp');	
		$kota = $this->input->post('kota');
		$pos = $this->input->post('pos');		

		$invoice = array(
			'nama' 			=> $nama,
			'alamat' 		=> $alamat,
			'tgl_pesan' 	=> date('Y-m-d H:i:s'),
			'batas_bayar' 	=> date('Y-m-d H:i:s', mktime(date('H'),date('i'),date('s'),date('m'),date('d') + 1,date('Y'))),
		);
		$this->db->insert('tb_invoice', $invoice);
		$id_invoice = $this->db->insert_id();

		foreach ($this->cart->contents() as $item) {
			$data = array(
				'id_invoice' => $id_invoice,
				'id_produk'  => $item['id'],
				'nm_produk'  => $item['name'],
				'jumlah' 	 => $item['qty'],
				'harga' 	 => $item['price'],
			);
			$this->db->insert('tb_pesanan', $data);
		}

		$customer = array(
			'id_customer' 	=> '', 
			'id_user'		=> '',
			'nm_customer'	=> $nama,
			'alamat' 		=> $alamat,
			'id_kota' 		=> $kota,
			'telp' 			=> $telp,
			'kode_pos' 		=> $pos,
		);

		$this->db->insert('tb_customer', $customer);
		return TRUE;

	}

	public function tampil_data()
	{
		$result = $this->db->get('tb_invoice');
		if ($result->num_rows() > 0) {
			return $result->result();
		}else{
			return FALSE;
		}
	}
}

/* End of file ModelInvoice.php */
/* Location : ./application/models/ModelInvoice.php */

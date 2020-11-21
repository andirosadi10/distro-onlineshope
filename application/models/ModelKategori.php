<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package Codeigniter
 * @subpackage ModelKategori
 * @category Model
 * @author Author Name <author@developer.org>
 */

class ModelKategori extends CI_Model
{
	public function GetKategori()
	{
		return $this->db->get('tb_kategori')->result_array();
	}

	public function data_kaos()
	{
		$result = $this->db->query('SELECT * FROM tb_produk WHERE id_kategori = 1');
		return $result->result_array();
	}

	public function data_kemeja()
	{
		$result = $this->db->query('SELECT * FROM tb_produk WHERE id_kategori = 2');
		return $result->result_array();
	}

	public function data_sweater()
	{
		$result = $this->db->query('SELECT * FROM tb_produk WHERE id_kategori = 3');
		return $result->result_array();
	}

	public function data_jaket()
	{
		$result = $this->db->query('SELECT * FROM tb_produk WHERE id_kategori = 4');
		return $result->result_array();
	}

	public function data_celana()
	{
		$result = $this->db->query('SELECT * FROM tb_produk WHERE id_kategori = 5');
		return $result->result_array();
	}

	public function data_sepatu()
	{
		$result = $this->db->query('SELECT * FROM tb_produk WHERE id_kategori = 6');
		return $result->result_array();
	}


	public function data_topi()
	{
		$result = $this->db->query('SELECT * FROM tb_produk WHERE id_kategori = 7');
		return $result->result_array();
	}

	public function data_tas()
	{
		$result = $this->db->query('SELECT * FROM tb_produk WHERE id_kategori = 8');
		return $result->result_array();
	}

}

/* End of file Modelid_Kategori.php */
/* Location : ./application/models/ModelKategori.php */

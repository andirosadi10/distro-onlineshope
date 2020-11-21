<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package Codeigniter
 * @subpackage ModelProduk
 * @category Model
 * @author Author Name <author@developer.org>
 */

class ModelProduk extends CI_Model
{
	public function GetProduk()
	{	
		$result = $this->db->query("SELECT * FROM tb_produk GROUP BY id_produk DESC LIMIT 20");
		return $result->result_array(); 
	}

	public function InsertProduk($table, $data)
	{
		return $this->db->insert($table, $data);
	}

	public function edit_produk($where, $table)
	{
		
		return $this->db->get_where($table, $where)->result_array()	;

	}

	public function update($where, $data, $table)
    {
        $this->db->where($where);
		$this->db->update($table, $data);
	}	

	public function DeleteProduk($table, $where)
    {
        return $this->db->delete($table, $where);
	}

	public function get_keyword()
	{
		// $this->db->select('*');
		// $this->db->form('tb_produk');
		// $this->db->like('nm_produk', $keyword);
		// return $this->db->get()->result_array();

		$keyword = $this->input->POST('keyword', TRUE);
		$data = $this->db->query("SELECT * from tb_produk where nm_produk like '%$keyword%' ");
		return $data->result_array();
	}

	public function find($id)
	{
		$result = $this->db->where('id_produk', $id)
						   ->limit(1)
						   ->get('tb_produk');
		if ($result->num_rows() > 0) {
			return $result->row();
		}else{
   			return array();
		}
	}
}

/* End of file ModelProduk.php */
/* Location : ./application/models/ModelProduk.php */

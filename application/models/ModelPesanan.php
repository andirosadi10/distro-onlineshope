<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package Codeigniter
 * @subpackage ModelPesanan
 * @category Model
 * @author Author Na <author@developer.org>
 */

class ModelPesanan extends CI_Model
{
	public function tampil_data()
	{
		$result = $this->db->get('tb_pesanan');
		return $result->result(); 
	}
}

/* End of file ModelPesanan.php */
/* Location : ./application/models/ModelPesanan.php */

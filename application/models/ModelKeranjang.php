<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package Codeigniter
 * @subpackage ModelKeranjang
 * @category Model
 * @author Author Name <author@developer.org>
 */

class ModelKeranjang extends CI_Model
{
	public function insert($table, $data)
	{
		$this->db->insert($table, $data);
	}
}

/* End of file ModelKeranjang.php */
/* Location : ./application/models/ModelKeranjang.php */

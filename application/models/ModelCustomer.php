<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package Codeigniter
 * @subpackage ModelCustomer
 * @category Model
 * @author Author Name <author@developer.org>
 */

class ModelCustomer extends CI_Model
{
	
	public function tampil_data()
	{
		$result = $this->db->get('tb_customer');
		return $result->result();
	}

	
}

/* End of file ModelCustomer.php */
/* Location : ./application/models/ModelCustomer.php */

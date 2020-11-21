<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package Codeigniter
 * @subpackage ModelUser
 * @category Model
 * @author Author Name <author@developer.org>
 */

class ModelUser extends CI_Model
{
	public function tampil_data()
	{
		$result = $this->db->get('tb_user');
		return $result->result();
	}
}

/* End of file ModelUser.php */
/* Location : ./application/models/ModelUser.php */

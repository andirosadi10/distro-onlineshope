<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package Codeigniter
 * @subpackage ModelAuth
 * @category Model
 * @author Author Name <author@developer.org>
 */

class ModelAuth extends CI_Model
{
	public function cek_login()
	{
		$username = set_value('username');
		$password = set_value('password');

		$result = $this->db->where('username', $username)
							->where('password',$password)
							->limit(1)
							->get('tb_user');
		if ($result->num_rows() > 0) {
			return$result->row();
		}else{
			return array();
		}
	}
}

/* End of file ModelAuth.php */
/* Location : ./application/models/ModelAuth.php */

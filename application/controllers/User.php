<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package Codeigniter
 * @subpackage User
 * @category Controller
 * @author Author Name <author@developer.org>
 */

class User extends CI_Controller
{
	/**
	 * constructor
	 */
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		redirect(base_url('user/dashboard'));
	}

	public function dashboard()
	{	
		$data = array(
				'content' => 'user/view_user'
		);
		$this->load->view('layout/template', $data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}

/* End of file User.php */
/* Location : ./application/controllers/User.php */

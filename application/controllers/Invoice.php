<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package Codeigniter
 * @subpackage Invoice
 * @category Controller
 * @author Author Name <author@developer.org>
 */

class Invoice extends CI_Controller
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
		$data = array(
			'invoice' => $this->ModelInvoice->tampil_data()
		);
		$this->load->view('');
	}
}

/* End of file Invoice.php */
/* Location : ./application/controllers/Invoice.php */

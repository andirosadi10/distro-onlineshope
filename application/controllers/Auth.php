 <?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package Codeigniter
 * @subpackage Auth
 * @category Controller
 * @author Author Name <author@developer.org>
 */

class Auth extends CI_Controller
{
	/**
	 * constructor
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelUser');
	}

	public function index()
	{
		
	}

	public function Login()
	{
		if ($this->session->userdata('role_id') == 2){
			redirect(base_url());
		}else{
			$data['content'] = 'auth/login';
		$this->load->view('layout/template', $data);
		}
				
	}

	public function aksi_login()
	{
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() == FALSE) {
			
			redirect('auth/login');

		}else{

			$auth = $this->ModelAuth->cek_login();

			if ($auth == FALSE) {
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>Username / Password anda salah !</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
				redirect('auth/login');
			}else{
				$this->session->set_userdata('username', $auth->username);
				$this->session->set_userdata('role_id', $auth->role_id);
				$this->session->set_userdata('email', $auth->email);

				switch ($auth->role_id) {
					case 1:
						redirect('admin');
						break;
					case 2:
						redirect(base_url());
						break;
					default:
						break;
				}
			}
		}
	}

	public function daftar()
	{
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('username','Usernanme','required');
		$this->form_validation->set_rules('password1','Password','required|matches[password2]',[
			'matches' => 'Password tidak cocok']); 
		$this->form_validation->set_rules('password2','Password','required|matches[password1]',[
			'matches' => 'Password tidak cocok']);
		if ($this->form_validation->run() == FALSE) {
			
			$data['content'] = 'auth/daftar';
			$this->load->view('layout/template', $data);

		}else{

			$email 	  = $this->input->post('email');
			$username = $this->input->post('username');
			$password = $this->input->post('password1');
			$data = array(
				'id_user'    	=> '',
				'email' 	=> htmlspecialchars($email),
				'username'  => htmlspecialchars($username),				
				'password'  => htmlspecialchars($password),
				'role_id'	=> 2,
			);
			$this->db->insert('tb_user', $data);
			$this->session->set_flashdata('daftar','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Data anda berhasil disimpan. Silahkan login !</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('auth/login');
		}
	}
}

/* End of file Auth.php */
/* Location : ./application/controllers/Auth.php */

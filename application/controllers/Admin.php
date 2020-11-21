<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @package Codeigniter
* @subpackage Admin
* @category Controller
* @author Author Name <author@developer.org>
		*/
		class Admin extends CI_Controller
		{
			/**
			* constructor
			*/
			public function __construct()
			{
				parent::__construct();
				$this->load->model('ModelProduk');
				$this->load->model('ModelKategori');
				$this->load->model('ModelInvoice');
				$this->load->model('ModelCustomer');
				$this->load->model('ModelPesanan');
				$this->load->model('ModelUser');
			}
			public function index()
			{
				if ($this->session->userdata('role_id') == 1){
					$data = array(
						'prod' => $this->ModelProduk->GetProduk(),
						'cust'=>  $this->ModelCustomer->tampil_data(),
						'content' => 'admin/_partials/home'
					);
					$this->load->view('admin/_partials/template_admin', $data);
				}else{
				redirect();
			}
				
			}
			public function produk()
			{
				$data = array(
					'produk' => $this->ModelProduk->GetProduk(),
					'content' => 'admin/produk/view_produk'
				);
				$this->load->view('admin/_partials/template_admin', $data);
			}
			public function add_produk()
			{
				$data = array(
					'kategori' => $this->ModelKategori->GetKategori(),
					'content' => 'admin/produk/add_produk'
				);
				$this->load->view('admin/_partials/template_admin', $data);
			}
			public function do_add_produk()
			{
				if (isset($_POST['submit'])) {
					$config['upload_path'] = 'assets/images/produk/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['max_size'] = '1000'; // kb
					$config['encrypt_name'] = TRUE;
					$this->load->library('upload', $config);
					$this->upload->do_upload('gambar');
					$hasil = $this->upload->data();
					if ($hasil['file_name'] == '') {
						$data = array(
									'id_kategori' 	=> $this->input->post('id_kategori'),
									'nm_produk'   	=> htmlspecialchars($this->input->post('nm_produk')),
											'merk'   	  	=> htmlspecialchars($this->input->post('merk')),
									'harga_beli'  	=> htmlspecialchars($this->input->post('harga_beli')),
									'harga_jual'  	=> htmlspecialchars($this->input->post('harga_jual')),
											'stok'   		=> htmlspecialchars($this->input->post('stok')),
											// 'gambar'   		=> $this->input->post(''),
											'ket'   		=> htmlspecialchars($this->input->post('ket'))
							
						);
					} else {
						$data = array(
									'id_kategori' 	=> htmlspecialchars($this->input->post('id_kategori')),
									'nm_produk'   	=> htmlspecialchars($this->input->post('nm_produk')),
											'merk'   	  	=> htmlspecialchars($this->input->post('merk')),
									'harga_beli'  	=> htmlspecialchars($this->input->post('harga_beli')),
									'harga_jual'  	=> htmlspecialchars($this->input->post('harga_jual')),
											'stok'   		=> htmlspecialchars($this->input->post('stok')),
											'gambar' 		=> $hasil['file_name'],
											'ket'   		=> htmlspecialchars($this->input->post('ket'))
											
						);
					}
					$this->ModelProduk->InsertProduk('tb_produk', $data);
					redirect('admin/produk');
				} else {
					redirect('admin/add_produk');
				}
			}
			public function edit_produk($id)
			{
				$where = array('id_produk' => $id );
				$data = array(
					'produk' => $this->ModelProduk->edit_produk($where,'tb_produk'),
					'content' => 'admin/produk/edit_produk'
				);
				
				$this->load->view('admin/_partials/template_admin', $data);
			}
			public function update_produk()
			{
				if (isset($_POST['submit'])) {
					$data = array(
								'id_kategori' 	=> $this->input->post('id_kategori'),
								'nm_produk'   	=> $this->input->post('nm_produk'),
										'merk'   	  	=> $this->input->post('merk'),
								'harga_beli'  	=> $this->input->post('harga_beli'),
								'harga_jual'  	=> $this->input->post('harga_jual'),
										'stok'   		=> $this->input->post('stok'),
										'ket'   		=> $this->input->post('ket'),
										// 'gambar'   		=> $this->input->post('gambar'),
					);
					$where = array('id_produk' => $this->input->post('id'));
					$this->ModelProduk->update($where, $data, 'tb_produk');
					redirect('admin/produk');
				} else {
					redirect('admin/produk');
				}
			}
			public function delete()
			{
				$id = array('id_produk' => $this->uri->segment(3));
				$this->ModelProduk->DeleteProduk('tb_produk', $id);
				redirect('admin/produk');
			}
			public function logout()
			{
				$this->session->sess_destroy();
				redirect(base_url());
			}
			public function kategori_produk()
			{
				$data = array(
					'kategori' => $this->ModelKategori->GetKategori(),
					'content' => 'admin/kategori_produk/view_kategori'
				);
				$this->load->view('admin/_partials/template_admin', $data);
			}
			public function invoice()
			{
				$data = array(
					'invoice' => $this->ModelInvoice->tampil_data(),
					'content' => 'admin/invoice/view_invoice'
				);
				$this->load->view('admin/_partials/template_admin', $data);
			}
			public function customer()
			{
				$data = array(
					'customer' => $this->ModelCustomer->tampil_data(),
					'content' => 'admin/customer/view_customer'
				);
				$this->load->view('admin/_partials/template_admin', $data);
			}
			public function pesanan()
			{
				$data = array(
					'pesan' => $this->ModelPesanan->tampil_data(),
					'content' => 'admin/pesanan/view_pesanan'
				);
				$this->load->view('admin/_partials/template_admin', $data);
			}
			public function user()
			{
				$data = array(
					'user' => $this->ModelUser->tampil_data(),
					'content' => 'admin/users/view_users'
				);
				$this->load->view('admin/_partials/template_admin', $data);
			}
		}
		/* End of file Admin.php */
		/* Location : ./application/controllers/Admin.php */

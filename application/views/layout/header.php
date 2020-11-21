<!DOCTYPE html>
<html lang="en">

<head>
	<title>Distro Immortal</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/DataTables/css/jquery.dataTables.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/DataTables/css/dataTables.bootstrap4.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/home.css'); ?>">  
	
			
</head>

<body style="background-color: #e0ece4;"> 
	<div class="container-fluid">

		<!-- navigasi --> 
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top">
			<a class="navbar-brand" href="<?php echo base_url(); ?>">IMMORTAL<small>Shope</small></a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent"><br>
				<div class="col-lg-5">
					<form action="<?= base_url('produk/cari') ?>" method="post">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Cari.." name="keyword">
							<div class="input-group-append">
								<button class="btn btn-light" type="submit">
									<span class="fa fa-search"></span>
								</button>
							</div>							
						</div>							
					</form>				
				</div>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a href="<?php echo base_url('produk/kategori/kaos'); ?>" class="dropdown-item">Kaos</a>
							<a href="<?php echo base_url('produk/kategori/kemeja'); ?>" class="dropdown-item">Kemeja</a>
							<a href="<?php echo base_url('produk/kategori/sweater'); ?>" class="dropdown-item">Sweater</a>
							<a href="<?php echo base_url('produk/kategori/jaket'); ?>" class="dropdown-item">Jaket</a>
							<a href="<?php echo base_url('produk/kategori/celana'); ?>" class="dropdown-item">Celana</a>							
							<a href="<?php echo base_url('produk/kategori/sepatu'); ?>" class="dropdown-item">Sepatu</a>
							<a href="<?php echo base_url('produk/kategori/topi'); ?>" class="dropdown-item">Topi</a>
							<div class="dropdown-divider"></div>
							<a href="<?php echo base_url('produk/kategori/tas'); ?>" class="dropdown-item">Tas</a>
						</div>	
					</li><!-- 
					<li class="nav-item">
						<a href="<?php echo base_url('page/keranjang'); ?>" class="nav-link">Keranjang</a>
					</li> -->
					<li class="nav-item">
						<a href="<?php echo base_url('page/tentang_kami'); ?>" class="nav-link">Tentang Kami</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url('page/kontak'); ?>" class="nav-link">Kontak</a>
					</li>
				</ul>
				<div>
					<a href="<?= base_url('keranjang') ?><?php $keranjang; ?>" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Keranjang Belanja">
						<span class="badge badge-sm badge-light">
							<?php $keranjang = $this->cart->total_items(); ?> <?= $keranjang; ?></span>
						<i class="fa fa-cart-plus fa-lg"></i>
					</a>
					<?php if ($this->session->userdata('role_id') == 2) { ?>
						<a href="<?= base_url('user/dashboard') ?>" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Data User">
							<i class="fa fa-user fa-lg"></i>
						</a>
					<?php } else { ?>
						<a href="<?= base_url('auth/login') ?>" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Login">
							<i class="fa fa-user fa-lg"></i>
						</a>
					<?php } ?>
				</div><!-- 
				<div class="btn-group">
					<a href="<?php echo base_url('auth/login'); ?>" class="btn btn-outline-dark btn-sm">Login</a>
					<a href="<?php echo base_url('auth/daftar'); ?>" class="btn btn-outline-dark btn-sm">Daftar</a>
				</div> -->
			</div>
		</nav>
			
		

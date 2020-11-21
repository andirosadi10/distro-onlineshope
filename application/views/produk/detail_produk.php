<br>
<div class="mt-5 shadow-sm">
	<nav aria-label="breadcrumb ">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?= base_url('produk/kategori'); ?>"><strong>Home</strong></a></li>
	    <li class="breadcrumb-item active" aria-current="page"><strong><?= $detail; ?></strong></li>
	  </ol>
	</nav>
</div>
	
<main class="row mb-5">
	

	<div class="col-sm-3 my-2">
		<div class="card shadow">
			<h5 class="card-header bg-info text-light text-center ">Kaos</h5>
			<a href="<?= base_url('produk/detail') ?>"><img src="<?php echo base_url('assets/images/kaos/ka2.png') ?>" class="img-fluid" alt=""></a>
			<div class="card-footer">
				<div class="row justify-content-center">
					<span>Rp. 150.000</span>
					<h4 class="badge badge-danger ml-1 mr-5">Stok 15</h4>
					<a class="btn btn-success btn-sm mr-1" href="<?php echo base_url('login'); ?>"  data-toggle="tooltip" data-placement="top" title="Tambah Ke keranjang!">
						<span class="fa fa-cart-plus"></span></a>
					<a class="btn btn-primary btn-sm" href="<?php echo base_url('login'); ?>">Beli</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-sm-9 my-2">
		<div class="jumbotron shadow">
			<div class="card-body">
				<h1>Detail Produk</h1>
			</div>
		</div>
	</div>

</main>	

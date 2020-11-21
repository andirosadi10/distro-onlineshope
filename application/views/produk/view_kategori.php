<!-- <br>
<div class="card bg-info col-md shadow-lg mt-5">
	<h3 class="text-dark">Kategori><?= $kategori; ?></h3>
</div> -->
<br>
<div class="mt-5 shadow-sm">
	<nav aria-label="breadcrumb ">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="<?= base_url('produk/kategori'); ?>"><strong>Kategori</strong></a></li>
	    <li class="breadcrumb-item active" aria-current="page"><strong><?= $judul; ?></strong></li>
	  </ol>
	</nav>
</div>
	
<main class="row mb-5">
	
	<?php 

	if (empty($kategori)) {
	 	echo "<h1 class='col-md 5 text-dark text-center my-5'>PRODUK BELUM TERSEDIA !<h1>";
	 } ?>
	<?php 
	foreach ($kategori as $d) : ?>
	<div class="col-sm-3 my-2">
		<div class="card shadow">
			<span class="card-header bg-info text-light text-center small"><?= $d['nm_produk']; ?></span>
			<a href="<?= base_url('produk/detail') ?>"><img src="<?= base_url('assets/images/produk/'). $d['gambar']; ?>" class="img-fluid" alt="Gambar Produk"></a>
			<div class="card-footer">
				<div class="row justify-content-center">
					<span>Rp. <?= number_format($d['harga_jual'],0,',','.'); ?></span>
					<h4 class="badge badge-danger ml-1 mr-5">Stok <?= $d['stok']; ?></h4>
					<a class="btn btn-success btn-sm mr-1" href="<?= base_url('keranjang/tambah_ke_keranjang/').$d['id_produk']; ?>"  data-toggle="tooltip" data-placement="top" title="Tambah Ke keranjang!">
						<span class="fa fa-cart-plus"></span></a>
					<a class="btn btn-primary btn-sm" href="<?= base_url('keranjang'); ?>">Beli</a>
				</div>
			</div>
		</div>
	</div>
	
	<?php endforeach; ?>

</main>	

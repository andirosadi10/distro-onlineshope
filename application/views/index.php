<?php $this->load->view($banner); ?>

<main class="container">
	<div class="shadow-sm mt-2">
		<nav aria-label="breadcrumb ">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active" aria-current="page"><h5><strong>Produk Terbaru</strong></h5></li>
			</ol>
		</nav>
	</div>
	<div class="row mb-5">

		<?php
		foreach ($produk as $i) : ?>
		
		<div class="col-lg-2 col-md-3 col-sm-4 rounded my-2">
			<div class="card shadow-sm" id="card-produk" style="height: 280px;">
				<!-- <span class="card-header bg-info text-center text-light small"><?= $i['nm_produk']; ?></span> -->
				<a href="<?= base_url('produk/detail/').$i['id_produk']; ?>"><img src="<?= base_url('
				assets/images/produk/').$i['gambar']; ?>" class="img-fluid rounded-top" alt="Gambar Produk" style="height: 160px; width: 100%;"></a>
				<div class="card-footer">
					<div class="row" style="height: 40px; width: 100%;">
						<span class="text-cente text-dark small"><?= character_limiter($i['nm_produk'], 25); ?></span>
					</div>
					<div class="row">
						<div class="text-dark small"><?= "Rp.".number_format($i['harga_jual'],0,',','.'); ?></div>
						<h5 class="badge badge-danger mx-1"><?= "Stok ".$i['stok']; ?></h5>
					</div>
					<div class="row">
						<?php if ($i['stok'] == 0) { ?>
							<button class="add_cart btn btn-success btn-sm btn-block mr-1" disabled>
								<small>Tambah Ke keranjang</small>
							</button>
						<?php } else { ?>
						<a href="<?= base_url('keranjang/tambah_ke_keranjang/').$i['id_produk']; ?>" class="add_cart btn btn-success btn-sm btn-block" data-toggle="tooltip" data-placement="top" title="Tambah Ke keranjang!"
							><small>Tambah Ke keranjang</small>
						</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>

		<?php endforeach; ?>
	</div>	  
</main>


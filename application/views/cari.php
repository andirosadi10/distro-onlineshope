<main class="container">
	<div class="shadow-sm mt-5">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active" aria-current="page"><h5><strong>Hasil Pencarian</strong></h5></li>
			</ol>
		</nav>
	</div>
	<div class="row mb-5">
	<?php

		if(count($produk)>0)
		{
			foreach ($produk as $i) { ?>


			<div class="col-lg-2 col-md-3 col-sm-4 rounded my-2">
				<div class="card shadow-sm" id="card-produk" style="height: 312px;>
					<a href="<?= base_url('produk/detail/').$i['id_produk']; ?>"><img src="<?= base_url('
					assets/images/produk/').$i['gambar']; ?>" class="img-fluid rounded-top" alt="Gambar Produk" style="height: 160px; width: 100%;"></a>
					<div class="card-footer">
						<div class="row">
							<span class="text-cente text-dark small"><?php  echo $i['nm_produk']; ?></span>
						</div><hr>
						<div class="row">
							<div class="text-dark"><?php  echo "Rp.".number_format($i['harga_jual'],0,',','.'); ?></div>
							<h5 class="badge badge-danger mx-1"><?php  echo "Stok ".$i['stok']; ?></h5>
						</div>
						<div class="row">
							<?php if ($i['stok'] == 0) { ?>
								<button class="add_cart btn btn-success btn-sm btn-block mr-1" disabled>
									<small>Tambah Ke keranjang</small>
								</button>
							<?php } else { ?>
							<a href="<?= base_url('keranjang/tambah_ke_keranjang/').$i['id_produk']; ?>" class="add_cart btn btn-success btn-sm btn-block mr-1" data-toggle="tooltip" data-placement="top" title="Tambah Ke keranjang!"
								><small>Tambah Ke keranjang</small>
							</a>
							<!-- <a class="btn btn-primary btn-sm" href="<?php echo base_url('keranjang'); ?>">Beli</a> -->
							<?php } ?>
						</div>
					</div>
				</div>
			</div>


			<?php  } ?>

		<?php }

		else
		{
			echo "Data tidak ditemukan";
		}

	?>

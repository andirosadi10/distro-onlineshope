<div class="content-wrapper mt-3">
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Edit Produk</h3>
						</div>
						
						<?php foreach ($produk as $d) { ?>
						
						<form action="<?= base_url('admin/update_produk') ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
							<div class="card-body">
								<input type='hidden' name='id' value='<?= $d['id_produk']; ?>'>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Kategori</label>
									<div class="col-sm-6">
										<input type="text" name='id_kategori' class='form-control' value="<?= $d['id_kategori']; ?>" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Nama Produk</label>
									<div class="col-sm-6">
										<input type='text' class='form-control' name='nm_produk' value="<?= $d['nm_produk']; ?>" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Merk</label>
									<div class="col-sm-6">
										<input type='text' class='form-control' name='merk' value="<?= $d['merk']; ?>" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Harga Beli</label>
									<div class="col-sm-6">
										<input type='number' class='form-control' name='harga_beli' value="<?= $d['harga_beli']; ?>" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Harga Jual</label>
									<div class="col-sm-6">
										<input type='number' class='form-control' name='harga_jual' value="<?= $d['harga_jual']; ?>" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Stok</label>
									<div class="col-sm-6">
										<input type='number' class='form-control' name='stok' value="<?= $d['stok']; ?>" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Keterangan</label>
									<div class="col-sm-10">
										<textarea rows="5" id="summernote" class='form-control' name='ket' value="<?= $d['ket']; ?>"></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Ganti Gambar</label>
									<div class="col-sm-6">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="customFileLangHTML" name="g">
											<label class="custom-file-label" for="customFileLangHTML" data-browse="Cari">Pilih gambar...</label>
										</div>
									</div>
								</div>
								 <?php
                				if ($d['gambar'] != '') { ?>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Gambar</label>
									<div class="col-sm-2">
										<img src="<?= base_url('assets/images/produk/'). $d['gambar'];  ?>" alt="Gambar Produk" class="img-fluid">
									</div>
								</div>
								<?php } ?>
								<div class="float-right mb-2">	
									<button type='submit' name='submit' class='btn btn-primary btn-sm'>Simpan</button>
									<a href='<?= base_url('admin/produk') ?>'><button type='button' class='btn btn-secondary btn-sm ml-2'>Batal</button></a>
								</div>
							</div>
						</form>

						<?php } ?>

					</div>
				</div>
			</div>
		</div>
	</section>
</div>

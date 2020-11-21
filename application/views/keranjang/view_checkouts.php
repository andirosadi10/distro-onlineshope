<div class="row">
	<div class="col-md-8 mx-auto mt-5">
		<div class="card shadow my-5">
			<div class="card-header bg-info">
				<h1 class="text-dark text-center">
				<?php $grand_total = 0;
					if ($keranjang = $this->cart->contents())
					{
						foreach ($keranjang as $item) {
							$grand_total = $grand_total + $item['subtotal'];
						}
					echo "Total Belanja Anda  : "."Rp. " .number_format($grand_total,0,',','.');  ?>
				
				</h1>
			</div>
			<div class="card-body">
				<div>
					<form action="<?= base_url('keranjang/proses_checkouts'); ?>" method="post">
						<div class="form-group">
							<label for="nama">Nama Lengkap</label>
							<input type="text"  name="nama" class="form-control" placeholder="Nama Lengkap Anda" autofocus required>
						</div>
						<div class="form-group">
							<label for="alamat">Alamat Lengkap</label>
							<input type="text"  name="alamat" class="form-control" placeholder="Alamat Lengkap Anda" required>
						</div>
						<div class="form-group">
							<label for="kota">Kabupaten / Kota</label>
							<select name="kota" id="" class="form-control">
								<option >- Pilih Kota -</option>
								<option value="1">PURWAKARTA</option>
								<option value="2">JAKARTA</option>
								<option value="3">BOGOR</option>
								<option value="4">BEKASI</option>
							</select>
						</div>
						<div class="form-group">
							<label for="telp">No.Telpon</label>
							<input type="telp" maxlength="12" name="telp" class="form-control" placeholder="No. Telpon Anda" required>
						</div>
						<div class="form-group">
							<label for="kurir">Jasa Pengiriman</label>
							<select name="kirir" id="" class="form-control">
								<option >- Pilih Jasa Pengiriman -</option>
								<option value="1">JNE</option>
								<option value="2">JNT</option>
								<option value="3">POS</option>
								<option value="4">SICEPAT</option>
							</select>
						</div>
						<div class="form-group">
							<label for="bank">Pilih BANK</label>
							<select name="bank" id="" class="form-control">
								<option >- Pilih BANK -</option>
								<option value="1">BNI</option>
								<option value="2">BRI</option>
								<option value="3">BCA</option>
								<option value="4">MANDIRI</option>
							</select>
						</div>						
						<div class="form-group">
							<label for="pos">Kode Pos</label>
							<input type="number"  name="pos" class="form-control" placeholder="Kode Pos" style="width: 110px;" required>
						</div>
						<div class="float-right">
							<button type="submit" class="btn btn-primary">Pesan</button>
							<a href="<?= base_url(); ?>" class="btn btn-danger">Batal</a>
						</div>
					</form>

				<?php  }else{
					echo "Keranjang Belanja Anda Kosong !";
				} ?>
				</div>
			</div>
		</div>
	</div>
</div>

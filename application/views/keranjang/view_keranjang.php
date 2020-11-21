<br>
<div class="col-sm text-dark my-5 mx-auto">
	<div class="card">
		<div class="card-header">
			<h4>Keranjang Belanja<i class="fa fa-cart-plus"></i></h4>
		</div>
		<div class="card-body table-responsive">
			<table class="table table-striped table-bordered table-hover text-dark mb-3">
				<thead class="bg-info">
					<tr align="center">
						<th>No</th>
						<th>Produk</th>
						<th>Harga</th>
						<th>Qty</th>
						<th>Subtotal</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($this->cart->contents() as $items) : ?>
					<tr>
						<input type="hidden" value="<? $items['rowid']; ?>" name="id">
						<td align="center"><?= $no++; ?></td>
						<td><?= $items['name']; ?></td>
						<td>Rp. <?= number_format($items['price'],0,',','.'); ?></td>
						<td align="center">
							<input type="number" value="<?= $items['qty']; ?>" class="form-control form-control-sm" min="1" max="1000" style="width: 80px;">
						</td>
						<td>Rp. <?= number_format($items['subtotal'],0,',','.'); ?></td>
						<td align="center">
							<a href="<?= base_url('keranjang/hapus_item_keranjang/'). $items['rowid']; ?>" class="btn btn-danger">Hapus</a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
				<tfoot>
				<tr>
					<th class="text-right" colspan="4">Total Harga</th>
					<th colspan="2">Rp. <?= number_format($this->cart->total(),0,',','.') ?></th>
				</tr>
				</tfoot>
			</table>
			
		</div>
		<div class="card-footer">
			<div class="button-group float-right">
				<a href="<?= base_url(); ?>" class="btn btn-primary">Lanjut Belanja</a>
				<a href="<?= base_url('keranjang/hapus_keranjang'); ?>" class="btn btn-danger">Kosongkan Keranjang</a>
				<a href="<?= base_url('keranjang/checkouts'); ?>" class="btn btn-success">Ceckouts</a>
			</div>
		</div>
	</div>
	
	
</div>

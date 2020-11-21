<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between">
		<h1 class="h3 mb-2 text-gray-800"><strong>Menu Pesanan</strong></h1>
	</div>

		<!-- DataTales Example -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Data Pesanan</h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" cellspacing="0">
						<thead>
							<tr>
								<th>No</th>
								<th>ID Invoice	</th>
								<th>ID Produk</th>
								<th>Nama Produk</th>
								<th>Jumlah</th>
								<th>Harga</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$no = 1;
							foreach ($pesan as $d) : ?>
								<tr>
									<td><?= $no++; ?></td>
									<td><?= $d->id_invoice ?></td>
									<td><?= $d->id_produk ?></td>
									<td><?= $d->nm_produk ?></td>
									<td><?= $d->jumlah ?></td>
									<td><?= $d->harga ?></td>
									<td class="text-center">
	                	<a href="<?= base_url('admin/edit_pesan/').$d->id_pesan ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit data" ><i class="fa fa-edit"></i></a>
	                	<span>|</span>
	                	<a href="<?= base_url('admin/delete_pesan/').$d->id_pesan ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus data" ><i class="fa fa-eraser"></i></a>
	                </td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
	<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between">
		<h1 class="h3 mb-2 text-gray-800"><strong>Menu Users</strong></h1>
	</div>
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Data Users</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Username  </th>
							<th>Email User</th>
							<th>Password</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($user as $d) : ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $d->username ?></td>
							<td><?= $d->email ?></td>
							<td><input type="password" value="<?= md5($d->password) ?>" class="form-control disabled"></td>
							<td class="text-center">
								<a href="<?= base_url('admin/edit_user/').$d->id_user ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit data" ><i class="fa fa-edit"></i></a>
								<span>|</span>
								<a href="<?= base_url('admin/delete_user/').$d->id_user ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus data" ><i class="fa fa-eraser"></i></a>
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

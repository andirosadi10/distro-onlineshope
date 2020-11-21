<!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
		<h1 class="h3 mb-2 text-gray-800"><strong>Menu Customer</strong></h1>
	</div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Customer</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Customer</th>
                <th>Alamat</th>
                <th>Kabupaten/Kota</th>
                <th>No. Telpon</th>
                <th>Kode Pos</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
            	<?php foreach ($customer as $cust) : ?>
	              <tr>
	                <td><?= $cust->id_customer ?></td>
	                <td><?= $cust->nm_customer ?></td>
	                <td><?= $cust->alamat ?></td>
	                <td><?= $cust->id_kota ?></td>
	                <td><?= $cust->telp ?></td>
	                <td><?= $cust->kode_pos ?></td>
	                <td class="text-center">
	                	<a href="<?= base_url('admin/edit_customer/').$cust->id_customer ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit data" ><i class="fa fa-edit"></i></a>
	                	<span>|</span>
	                	<a href="<?= base_url('admin/delete_customer/').$cust->id_customer ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus data" ><i class="fa fa-eraser"></i></a>
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



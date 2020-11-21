<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
			<h1 class="h3 mb-2 text-gray-800"><strong>Menu Kategori Produk</strong></h1>
			<a href="<?= site_url('admin/add_produk') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
				<i class="fas fa-download fa-sm text-white-50"></i>Tambah Data</a>
		</div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Kategori Produk</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
            	<?php $i = 1; ?>
            	<?php foreach ($kategori as $d) { ?>

              <tr>
                <td><?= $i++ ?></td>
                <td><?= $d['nm_kategori']; ?></td>
                <td class="text-center">
                	<a href="<?= site_url('admin/edit_produk') ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit data"><i class="fa fa-edit"></i></a>
                	<span>|</span>
                	<a href="<?= site_url('admin/hapus_produk') ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus data"><i class="fa fa-eraser"></i></a>
                </td>

              <?php } ?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



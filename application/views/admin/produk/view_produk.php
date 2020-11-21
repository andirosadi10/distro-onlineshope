<!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
			<h1 class="h3 mb-2 text-gray-800"><strong>Menu Produk</strong></h1>
			<a href="<?= site_url('admin/add_produk') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
				<i class="fas fa-download fa-sm text-white-50"></i>Tambah Data</a>
		</div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Merk</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Stok</th>                
                <th>Keterangan</th><!-- 
                <th>Gambar</th> -->
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
            	<?php $i = 1; ?>
            	<?php foreach ($produk as $d) { ?>

              <tr>
                <td><?= $i++ ?></td>
                <td><?= $d['nm_produk']; ?></td>
                <td><?= $d['id_kategori']; ?></td>
                <td><?= $d['merk']; ?></td>
                <td align="right">Rp. <?= number_format($d['harga_beli'],0,',','.'); ?></td>
                <td align="right">Rp. <?= number_format($d['harga_jual'],0,',','.'); ?></td>
                <td><?= $d['stok']; ?></td>
                <td><?= $d['ket']; ?></td><!-- 
                <td><?= $d['gambar']; ?></td> -->
                <td class="text-center">
                	<a href="<?= base_url('admin/edit_produk/').$d['id_produk']; ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit data" ><i class="fa fa-edit"></i></a>
                	<span>|</span>
                	<a href="<?= base_url('admin/delete/').$d['id_produk']; ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus data" ><i class="fa fa-eraser"></i></a>
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



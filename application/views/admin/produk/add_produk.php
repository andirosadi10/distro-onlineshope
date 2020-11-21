<div class="content-wrapper mt-3">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tambah Produk</h3>
            </div>

            <form action="<?= base_url('admin/do_add_produk') ?>" method="post" class="form-horizontal" enctype="multipart/form-data">

              <div class="card-body">

                <input type='hidden' name='id' value=''>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Kategori</label>
                  <div class="col-sm-6">
                    <select name='id_kategori' class='form-control select2' required>
                      <option value='' selected>- Pilih Kategori Produk -</option>
                      <?php
                      foreach ($kategori as $d) { ?>
												
												<option value="<?= $d['id_kategori']; ?>"><?= $d['nm_kategori']; ?></option>
                        
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama Produk</label>
                  <div class="col-sm-6">
                    <input type='text' class='form-control' name='nm_produk' required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Merk</label>
                  <div class="col-sm-6">
                    <input type='text' class='form-control' name='merk' required>
                  </div>
                </div>

               <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Harga Beli</label>
                  <div class="col-sm-6">
                    <input type='number' class='form-control' name='harga_beli' required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Harga Jual</label>
                  <div class="col-sm-6">
                    <input type='number' class='form-control' name='harga_jual' required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Stok</label>
                  <div class="col-sm-6">
                    <input type='number' class='form-control' name='stok' required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Keterangan</label>
                  <div class="col-sm-10">
                    <textarea rows="5" id="summernote" class='form-control' name='ket'></textarea>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Gambar</label>
                  <div class="col-sm-6">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFileLangHTML" name="gambar">
                      <label class="custom-file-label" for="customFileLangHTML" data-browse="Cari">Pilih gambar...</label>
                    </div>
                  </div>
                </div>
								
								<div class="float-right mb-2">
									 <button type='submit' name='submit' class='btn btn-primary btn-sm'>Simpan</button>
                	<a href='<?= base_url('admin/produk') ?>'><button type='button' class='btn btn-secondary btn-sm'>Batal</button></a>
								</div>
           
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

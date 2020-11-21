		
		<!-- footer -->
		<footer class="row bg-info text-light p-3 ">
			<div Class="col-md-4 text-center">
				<h3>Tentang Kami</h3>
				
				<p>Distro Immortal adalah situs penjualan online yang diperkenalkan
				pada Maret 2020. Dan menawarkan produk-produk yang murah dan berkualitas.
				</p>
			</div>
			<div Class="col-md-4">
				<h3 class="row ml-3">Kategori</h3>
				<ul>
					<li><a href="<?php echo base_url('produk/kategori/kaos'); ?>" class="text-light">Kaos</a></li>
					<li><a href="<?php echo base_url('produk/kategori/kemeja'); ?>" class="text-light">Kemeja</a></li>
					<li><a href="<?php echo base_url('produk/kategori/sweater'); ?>" class="text-light">Sweater</a></li>
					<li><a href="<?php echo base_url('produk/kategori/jaket'); ?>" class="text-light">Jaket</a></li>
					<li><a href="<?php echo base_url('produk/kategori/celana'); ?>" class="text-light">Celana</a></li>
					<li><a href="<?php echo base_url('produk/kategori/sepatu'); ?>" class="text-light">Sepatu</a></li>
					<li><a href="<?php echo base_url('produk/kategori/topi'); ?>" class="text-light">Topi</a></li>
					<li><a href="<?php echo base_url('produk/kategori/tas'); ?>" class="text-light">Tas</a></li>
				</ul>
			</div>
			<div Class="col-md-4">
				<h3>Kontak</h3>
				<p><span class="fa fa-phone"> 081310202020 (WA)</span></p>
				<p><span class="fa fa-envelope"> Distro_Immortal@gmail.com</span></p>
				<p><span class="fa fa-facebook"> Distro Immortal</span></p>
				<p><span class="fa fa-instagram"> Distro_Immortal</span></p>
			</div>
			<div class="ml-auto">
				<h4 class="small">Copyright 2020 Andi Rosadi</h4>
			</div>
		</footer>
	</div>
	
	<!-- Tooltip untuk tombol keranjang -->
	<script>
		$(document).ready(function(){
		  $('[data-toggle="tooltip"]').tooltip();   
		});

		handleCart() {
			alert('hallo');
		}
	</script>	
	<!-- End Tooltip -->

	<script src="<?= base_url('assets/js/jquery-1.9.1.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
	<script src="<?= base_url('assets/DataTables/js/jquery.dataTables.js'); ?>"></script>
	<script src="<?= base_url('assets/DataTables/js/dataTables.bootstrap4.js'); ?>"></script>

	
	<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script src="<?= base_url('https://cdn.jsdelivr.net/npm/sweetalert2@10'); ?>"></script>

</body>
</html>

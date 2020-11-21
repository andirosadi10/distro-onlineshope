<br>
<main class="row mb-5 mt-5">
	<div class="col-lg-5 bg-light border rounded shadow my-2 mx-auto">
		<h1 class="card bg-info text-center text-light shadow mt-2 mb-5">FORM LOGIN</h1>

		<div class="mx-auto mb-5">
			<!-- notif gagal login -->
			<?= $this->session->flashdata('pesan'); ?>	
			<?= $this->session->flashdata('daftar'); ?>
			<!-- end notif -->
			<form action="<?php echo base_url('auth/aksi_login'); ?>" method="post">
				<div class="form-group">
					<label for="Username">Username</label>
					<input type="text" class="form-control" name="username" placeholder="Username Anda .." autofocus required>
				</div>
				<div class="form-group">
					<label for="Password">Password</label>
					<input type="password" class="form-control" name="password" placeholder="Passsword Anda .." required>
				</div>
				<div class="mt-5">
					<input class="btn btn-primary" type="submit" value="Login"></input>
					<p class="float-right mr-5">Belum punya akun? <a href="<?= base_url('auth/daftar') ?>" class="text-danger justify-content-center">Daftar akun baru</a></p>
				</div>
				
			</form>
		</div>
	</div>
</main>	 

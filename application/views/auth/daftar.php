<br>
<main class="row mt-5 mb-5">
	<div class="col-lg-5 bg-light rounded  shadow my-2 mx-auto">
		<h3 class="card bg-info text-center text-light shadow-lg mt-2 mb-5">DAFTAR</h3>
		<div class="mx-auto mb-5">
			<form action="<?php echo base_url('auth/daftar')?>" class="" method="post">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" name="username" placeholder="Isi username anda.." autofocus required>
				</div>				
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" placeholder="Isi email anda .." required>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password1" placeholder="Isi password anda .." required>
					<?= form_error('password1','<div class="text-danger">','</div>'); ?>
				</div>

				<div class="form-group">
					<label for="Ulangi Password">Ulangi Password</label>
					<input type="password" class="form-control" name="password2" placeholder="Ulangi password anda .." required>
					<?= form_error('password2','<div class="text-danger">','</div>'); ?>
				</div>
				<div>
					<label for="role_id"></label>
					<input type="hidden" class="form-control" name="role_id" value="2" required>
				</div>	
				<div class="float-left">
					<button class="btn btn-primary" type="submit">Daftar</button>
				</div>				
				<h5 class="float-right mr-4 mb-5"><a href="<?= base_url('auth/login') ?>" class="text-dark">Sudah punya akun ?</a></h5>
			</form>
		</div>
	</div>
</main>	

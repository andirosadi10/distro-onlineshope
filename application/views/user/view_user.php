<br><br>
<div class="row">
	<div class="col-md-5 my-5 mx-auto">
		<div class="card shadow" style="margin-bottom:100px;">
			<div class="card-header bg-info">
				<h1 class="text-dark text-center">Data User</h1>
			</div>
			<div class="card-body">
				<table class="table table-striped table-hover text-dark">
					<tr>
						<th>Username</th>
						<td>:</td>
						<td><?= $this->session->userdata('username'); ?></td>
					</tr>
					<tr>
						<th>Email</th>
						<td>:</td>
						<td><?= $this->session->userdata('email'); ?></td>
					</tr>
				</table>
			</div>
			<div class="card-footer">
				<a href="<?= base_url('user/logout'); ?>" class="btn btn-danger float-right">Logout</a>
			</div>
		</div>
	</div>
</div>


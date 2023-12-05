<div id="hilang">
	<?= $this->session->flashdata('alert'); ?>
</div>
<div class="col-lg-12 col-md-12">
	<div class="mt-1 mb-3">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
			Tambah User
		</button>

		<!-- Modal -->
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
			aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			   <div class="modal-dialog modal-md" role="document">
				<form action="<?= site_url('admin/user/simpan') ?>" method="post">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Tambah User</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Nama</label>
									<input type="text" class="form-control" placeholder="Nama" name="nama" required />
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Username</label>
									<input type="text" class="form-control" placeholder="Username" name="username"
										required />
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Password</label>
									<input type="password" class="form-control" placeholder="Password" name="password"
										required />
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Level</label>
									<select name="level" class="form-control">
										<option value="Admin">Admin</option>
										<option value="Kontributor">Kontributor</option>
									</select>
								</div>
							</div>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
						<!-- <div class="modal-footer"> -->
						<!-- </div> -->
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
<div class="card">
	<div class="card-body">
		<h4 class="card-title">Data Pengguna</h4>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Username</th>
						<th scope="col">Nama</th>
						<th scope="col">Level</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($user as $aa) {?>
					<tr>
						<td><?= $aa['username'] ?></td>
						<td><?= $aa['nama'] ?></td>
						<td><?= $aa['level'] ?></td>
						<td>
							<a href="<?php echo base_url('admin/user/delete_data/'.$aa['id_user']);?>"
								class="btn btn-sm btn-danger"
								onClick="return confirm('are you sure you want to delete it?')"><span
									class="fa fa-trash"></span></a>
							<button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
								data-target="#edit<?= $aa['id_user'] ?>">
								<i class="fa fa-edit"></i>
							</button>
							<div class="modal fade" id="edit<?= $aa['id_user'] ?>" tabindex="-1" role="dialog"
			aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							<div class="modal-dialog modal-md " role="document">
								<form action="<?= base_url('admin/user/update') ?>" method="post">
								<input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>"> 
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLongTitle">Perbarui Nama User</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col mb-3">
													<label class="form-label">Nama</label>
													<input type="text" class="form-control" value=<?= $aa['nama'] ?>
														name="nama" />
												</div>
											</div>
											<div class="row">
												<div class="col mb-3">
													<label class="form-label">Username</label>
													<input type="text" class="form-control" value=<?= $aa['username'] ?>
														name="username" readonly />
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary"
												data-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Simpan</button>
										</div>
									</div>
								</form>
							</div>
					</div>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

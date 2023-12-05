<div id="hilang">
	<?= $this->session->flashdata('alert'); ?>
</div>
<div class="col-lg-12 col-md-12">
	<div class="mt-1 mb-3">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
			Tambah Kategori
		</button>

		<!-- Modal -->
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
			aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-md" role="document">
				<form action="<?= site_url('admin/kategori/simpan') ?>" method="post">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Tambah Kategori</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Nama_kategori</label>
									<input type="text" class="form-control" placeholder="Nama" name="nama_kategori"
										required />
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
		<h4 class="card-title">Kategori konten</h4>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama Kategori Konten</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach($kategori as $aa) {?>
					<tr>
						<td><?= $no;?></td>
						<td><?= $aa['nama_kategori'] ?></td>
						<td>
							<a href="<?php echo site_url('admin/kategori/delete_data/'.$aa['id_kategori']) ?>"
								class="btn btn-sm btn-danger"
								onClick="return confirm('are you sure you want to delete it?')"><i
									class="fa fa-trash"></i></a>
							<button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
								data-target="#edit<?= $aa['id_kategori'] ?>">
								<i class="fa fa-edit"></i>
							</button>
							<div class="modal fade" id="edit<?= $aa['id_kategori'] ?>" tabindex="-1" role="dialog"
								aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-md " role="document">
									<form action="<?= site_url('admin/kategori/update') ?>" method="post">
										<input type="hidden" name="id_kategori" value="<?= $aa['id_kategori'] ?>">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">Perbarui Kategori
												</h5>
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col mb-3">
														<label class="form-label">Nama Kategori Konten </label>
														<input type="text" class="form-control"
															value=<?= $aa['nama_kategori'] ?> name="nama_kategori" />
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
					<?php $no++; } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

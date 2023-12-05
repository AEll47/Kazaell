<div id="hilang">
	<?= $this->session->flashdata('alert'); ?>
</div>
<div class="col-lg-12 col-md-12">
	<div class="mt-1 mb-3">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
			Tambah Konten
		</button>

		<!-- Modal -->
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
			aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-md" role="document">
				<form action="<?= site_url('admin/konten/simpan') ?>" method="post" enctype='multipart/form-data'>
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Tambah Konten</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Judul</label>
									<input type="text" class="form-control" placeholder="Nama" name="judul" required />
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Kategori</label>
									<select name="id_kategori" class="form-control">
										<?php $no=1; foreach($kategori as $aa) { ?>
										<option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Keterangan</label>
									<textarea name="keterangan" class="form-control"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Foto</label>
									<input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
								</div>
							</div>
						</div>
						<div class="modal-footer">
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
<div class="card">
	<div class="card-body">
		<h4 class="card-title">konten</h4>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Judul</th>
						<th scope="col">Kategori Konten</th>
						<th scope="col">Tanggal</th>
						<th scope="col">Kreator</th>
						<th scope="col">Foto</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach($konten as $aa) {?>
					<tr>
						<td><?= $no;?></td>
						<td><?= $aa['judul'] ?></td>
						<td><?= $aa['nama_kategori'] ?></td>
						<td><?= $aa['tanggal'] ?></td>
						<td><?= $aa['nama'] ?></td>
						<td>
							<a href="<?= base_url('assets/upload/konten/'.$aa['foto']) ?>" target="_blank">
								<i class="fa fa-search"></i>lihat foto
							</a>
						</td>
						<td>
							<a href="<?= base_url('admin/konten/delete_data/'.$aa['foto']) ?>"
								class="btn btn-sm btn-danger"
								onClick="return confirm('are you sure you want to delete it?')"><i
									class="fa fa-trash"></i></a>

							<!-- Button trigger modal -->
							<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
								data-target="#konten<?= $aa['id_konten']; ?>"><i class="fa fa-edit"></i>
							</button>
						</td>
					</tr>
					<!-- Modal -->
					<div class="modal fade" id="konten<?= $aa['id_konten']; ?>" tabindex="-1" role="dialog"
						aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-md" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle"><?= $aa['judul'] ?>
									</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form action="<?= base_url('admin/konten/update') ?>" method="post"
									enctype="multipart/form-data">
									<div class="modal-content">
									<div class="modal-body">
										<input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
										<div class="row">
											<div class="col mb-3">
												<label class="form-label">Judul</label>
												<input type="text" class="form-control" value="<?= $aa['judul'] ?>"
													name="judul" />
											</div>
										</div>
										<div class="row">
											<div class="col mb-3">
												<label class="form-label">Kategori</label>
												<select name="id_kategori" class="form-control">
													<?php foreach($kategori as $uu) { ?>
													<option
														<?php if($uu['id_kategori']==$aa['id_kategori']){ echo"selected"; } ?>
														value="<?= $uu['id_kategori'] ?>">
														<?= $uu['nama_kategori'] ?></option>
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="row">
											<div class="col mb-3">
												<label class="form-label">Keterangan</label>
												<textarea name="keterangan" class="form-control"><?= $aa['keterangan'] ?></textarea>
											</div>
										</div>
										<div class="row">
											<div class="col mb-3">
												<label class="form-label">Foto</label>
												<input type="file" name="foto" class="form-control"
													accept="image/png, image/jpeg, image/jpg">
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary"
											data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Simpan</button>
									</div>
									<!-- <div class="modal-footer"> -->
									</div> 
								</form>
							</div>
						</div>
					</div>
					<?php $no++; } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

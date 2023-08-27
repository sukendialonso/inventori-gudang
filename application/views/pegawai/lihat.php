<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('partials/head.php') ?>
</head>

<body id="page-top">
	<div id="wrapper">
		<!-- load sidebar -->
		<?php $this->load->view('partials/sidebar.php') ?>

		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content" data-url="<?= base_url('pegawai') ?>">
				<!-- load Topbar -->
				<?php $this->load->view('partials/topbar.php') ?>

				<div class="container-fluid">
				<div class="clearfix">
					<div class="float-left">
						<h1 class="h3 m-0 text-gray-800"><?= $title ?></h1>
					</div>
					<div class="float-right">
						<?php if ($this->session->login['role'] == 'admin'): ?>
							<a href="<?= base_url('pegawai/export') ?>" target="_blank" class="btn btn-danger btn-sm"><i class="fa fa-file-pdf"></i>&nbsp;&nbsp;Export</a>
							<a href="<?= base_url('pegawai/tambah') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</a>
						<?php endif ?>
					</div>
				</div>
				<hr>
				<?php if ($this->session->flashdata('success')) : ?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<?= $this->session->flashdata('success') ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php elseif($this->session->flashdata('error')) : ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<?= $this->session->flashdata('error') ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif ?>
				<div class="card shadow">
					<div class="card-header"><strong>Daftar Data Pegawai</strong></div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<td>No</td>
										<td>NIP</td>
										<td>Nama Pegawai</td>
										<td>Telepon</td>
										<td>Email</td>
										<td>Alamat</td>
										<td>Jenis Kelamin</td>
										<td>Jabatan</td>
										
										<?php if ($this->session->login['role'] == 'admin'): ?>
											<td>Aksi</td>
										<?php endif ?>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($all_pegawai as $pegawai): ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $pegawai->nip ?></td>
										<td><?= $pegawai->nama_pegawai ?></td>
										<td><?= $pegawai->telepon ?></td>
										<td><?= $pegawai->email ?></td>
										<td><?= $pegawai->alamat ?></td>
										<td><?= $pegawai->jenis_kelamin ?></td>
										<td><?= $pegawai->jabatan ?></td>
										<?php if ($this->session->login['role'] == 'admin'): ?>
										<td>
											<a href="<?= base_url('pegawai/ubah/' . $pegawai->nip) ?>" class="btn btn-success btn-sm"><i class="fa fa-pen"></i></a>
											<a onclick="return confirm('apakah anda yakin?')" href="<?= base_url('pegawai/hapus/' . $pegawai->nip) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
										</td>
										<?php endif ?>
									</tr>	
								<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>				
				</div>
				</div>
			</div>
			<!-- load footer -->
			<?php $this->load->view('partials/footer.php') ?>
		</div>
	</div>
	<?php $this->load->view('partials/js.php') ?>
	<script src="<?= base_url('sb-admin/js/demo/datatables-demo.js') ?>"></script>
	<script src="<?= base_url('sb-admin') ?>/vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url('sb-admin') ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>
</body>
</html>
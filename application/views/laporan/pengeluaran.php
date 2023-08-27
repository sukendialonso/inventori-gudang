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
			<div id="content" data-url="<?= base_url('pengeluaran') ?>">
				<!-- load Topbar -->
				<?php $this->load->view('partials/topbar.php') ?>

				<div class="container-fluid">
				<div class="clearfix">
					<div class="float-left">
						<h1 class="h3 m-0 text-gray-800"><?= $title ?></h1>
					</div>
					<div class="float-right">
						<form action="<?= base_url('Laporan_pengeluaran/cek_tanggal') ?>" method="POST">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Tanggal Awal</label>
                                    <input type="date" name="tanggalawal" class="form-control" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Tanggal Ahkir</label>
                                    <input type="date" name="tanggalakhir" class="form-control" required>
                                </div>
                                <div class="from-group col-md-4">
                                    <input class="btn btn-primary" target="_blank" style="margin-top: 30px;" type="submit" value="Cek Laporan">
                                </div>
                            </div>
                        </form>
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
					</div><td>No</td>
				<?php endif ?>
				<div class="card shadow">
					<div class="card-header"><strong>Daftar Barang Keluar</strong></div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
									<td>No</td>
									<td>No Keluar</td>
									<td>Nama Admin</td>
									<td>Nama User</td>
									<td>Tanggal Keluar</td>
									<td>Jam Keluar</td>
									<td>Tanggal Input</td>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($all_pengeluaran as $pengeluaran): ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $pengeluaran->no_keluar ?></td>
											<td><?= $pengeluaran->nama ?></td>
											<td><?= $pengeluaran->nama_user ?></td>
											<td><?= $pengeluaran->tgl_keluar ?> </td>
											<td><?= $pengeluaran->jam_keluar ?></td>
											<td><?= $pengeluaran->tanggal ?></td>
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
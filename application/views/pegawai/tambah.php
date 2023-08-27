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
						<a href="<?= base_url('pegawai') ?>" class="btn btn-secondary btn-sm"><i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
					</div>
				</div>
				<hr>
				<!-- partial -->
                    <div class="row">
                        <div class="col-md-9">
                                <div class="card shadow">
                                <div class="card-header"><strong>Isi Form Dibawah Ini!</strong></div>
							        <div class="card-body">
								<form action="<?= base_url('pegawai/proses_tambah') ?>" id="form-tambah" method="POST" class="forms-sample" autocomplete="off">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="nip"><strong>NIP</strong></label>
													<input type="text" name="nip" placeholder="Masukkan NIP Pegawai" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="nama_pegawai"><strong>Nama Pegawai</strong></label>
													<input type="text" name="nama_pegawai" placeholder="Masukkan Nama Pegawai" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="jenis_kelamin"><strong>Jenis Kelamin</strong></label>
                                                <select class="form-control" name="jenis_kelamin" required>
                                                    <option value=""> Pilih </option>
                                                    <option value="Laki-Laki"> Laki-Laki </option>
                                                    <option value="Perempuan"> Perempuan </option>
                                                </select>
                                            </div>
                                              <div class="col-md-4">
                                                <label for="jabatan"><strong>Jabatan</strong></label>
                                                <select id="jabatan" class="form-control" name="jabatan" required>
                                                    <option value=""> Pilih </option>
                                                    <option value="Worker">Worker</option>
                                                    <option value="Admin">Admin</option>
                                                    <option value="Leader">Leader</option>
                                                    <option value="Section Head">Section Head</option>
                                                    <option value="Manajer">Manajer</option>
                                                </select>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-4">
                                                <p><div class="form-group">
                                                    <label for="telepon"><strong>Telepon</strong></label>
                                                    <input type="number" class="form-control" name="telepon" placeholder="Masukan Nomor Telepon" required>
                                                </div></p>
                                            </div>
                                            <div class="col-md-4">
                                                <p><div class="form-group">
                                                    <label for="email"><strong>Email</strong></label>
                                                    <input type="text" class="form-control" name="email" placeholder="Masukan Email"required>
                                                </div></p>
                                            </div>
                                        </div>
									<div class="form-group">
										<label for="alamat"><strong>Alamat</strong></label>
										<textarea type="text" class="form-control" name="alamat" style="resize: none;" placeholder="Masukkan Alamat"></textarea>
									</div>
                                    <hr>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
										<button type="reset" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © sukendi 2023</span>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
			<!-- load footer -->
			<?php $this->load->view('partials/footer.php') ?>
		</div>
	</div>
	<?php $this->load->view('partials/js.php') ?>
</body>
</html>
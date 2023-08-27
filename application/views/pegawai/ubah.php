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
				<div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                <h4 class="card-title"><strong>Form Ubah Data Pegawai</strong></h4>
								<form action="<?= base_url('pegawai/proses_ubah/' . $pegawai->nip) ?>" id="form-tambah" method="POST" >
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p><div class="form-group">
                                                    <label for="nip"><strong>NIP</strong></label>
													<input type="text" name="nip" placeholder="Masukkan NIP Pegawai" autocomplete="off"  class="form-control" required value="<?= $pegawai->nip ?>" readonly>
                                                </div></p>
                                            </div>
                                            <div class="col-md-4">
                                                <p><div class="form-group">
                                                    <label for="nama_pegawai"><strong>Nama Pegawai</strong></label>
													<input type="text" name="nama_pegawai" placeholder="Masukkan Nama Pegawai" autocomplete="off"  class="form-control" required value="<?= $pegawai->nama_pegawai ?>">
                                                </div></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="jenis_kelamin"><strong>Jenis Kelamin</strong></label>
												<select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
													<option value="">-- Silahkan Pilih --</option>
													<option value="Laki-Laki" <?= $pegawai->jenis_kelamin == 'laki-laki' ? 'selected' : '' ?>>Laki-Laki</option>
													<option value="Perempuan" <?= $pegawai->jenis_kelamin == 'perempuan' ? 'selected' : '' ?>>Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="jabatan"><strong>Jabatan</strong></label>
												<select name="jabatan" id="jabatan" class="form-control" required>
													<option value="">-- Silahkan Pilih --</option>
													<option value="Worker" <?= $pegawai->jabatan == 'worker' ? 'selected' : '' ?>>Worker</option>
													<option value="Admin" <?= $pegawai->jabatan == 'admin' ? 'selected' : '' ?>>Admin</option>
													<option value="Leader" <?= $pegawai->jabatan == 'leader' ? 'selected' : '' ?>>Leader</option>
													<option value="Section Head" <?= $pegawai->jabatan == 'section_head' ? 'selected' : '' ?>>Section Head</option>
													<option value="Manajer" <?= $pegawai->jabatan == 'manajer' ? 'selected' : '' ?>>Manajer</option>
                                                </select>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-4">
                                                <p><div class="form-group">
                                                    <label for="telepon"><strong>Telepon</strong></label>
													<input type="number" name="telepon" placeholder="Masukkan Nomor Telepon" autocomplete="off"  class="form-control" required value="<?= $pegawai->telepon ?>">
                                                </div></p>
                                            </div>
                                            <div class="col-md-4">
                                                <p><div class="form-group">
                                                    <label for="email"><strong>Email</strong></label>
													<input type="email" name="email" placeholder="Masukkan Email" autocomplete="off"  class="form-control" required value="<?= $pegawai->email ?>">
                                                </div></p>
                                            </div>
                                        </div>
									<div class="form-group">
										<label for="alamat"><strong>Alamat</strong></label>
										<textarea name="alamat" id="alamat" style="resize: none;" class="form-control" placeholder="Masukkan Alamat"><?= $pegawai->alamat ?></textarea>
									</div>
									<div>
										<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
										<button type="reset" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
									</div>
									</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
                <!-- content-wrapper ends -->
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
			<!-- load footer -->
			<?php $this->load->view('partials/footer.php') ?>
		</div>
	</div>
	<?php $this->load->view('partials/js.php') ?>
</body>
</html>
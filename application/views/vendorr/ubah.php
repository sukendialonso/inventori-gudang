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
			<div id="content" data-url="<?= base_url('vendorr') ?>">
				<!-- load Topbar -->
				<?php $this->load->view('partials/topbar.php') ?>

				<div class="container-fluid">
				<div class="clearfix">
					<div class="float-left">
						<h1 class="h3 m-0 text-gray-800"><?= $title ?></h1>
					</div>
					<div class="float-right">
						<a href="<?= base_url('vendorr') ?>" class="btn btn-secondary btn-sm"><i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
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
                                <h4 class="card-title"><strong>Form Ubah Data Vendor Barang</strong></h4>
								<form action="<?= base_url('vendorr/proses_ubah/' . $vendorr->kode_vendorr) ?>" id="form-tambah" method="POST">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <p><div class="form-group">
                                                    <label for="kode_vendorr"><strong>Kode Vendor</strong></label>
													<input type="text" name="kode_vendorr" placeholder="Masukan Kode Vendor" autocomplete="off"  class="form-control" required value="<?= $vendorr->kode_vendorr ?>" readonly>
                                                </div></p>
                                            </div>
                                            <div class="col-md-2">
                                                <p><div class="form-group">
                                                    <label for="nama_vendorr"><strong>Nama Vendor</strong></label>
													<input type="text" name="nama_vendorr" placeholder="Masukan Nama Vendor" autocomplete="off"  class="form-control" required value="<?= $vendorr->nama_vendorr ?>">
                                                </div></p>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-4">
                                                <p><div class="form-group">
                                                    <label for="telepon"><strong>Telepon</strong></label>
													<input type="number" name="telepon" placeholder="Masukkan Nomor Telepon" autocomplete="off"  class="form-control" required value="<?= $vendorr->telepon ?>">
                                                </div></p>
                                            </div>
                                            <div class="col-md-4">
                                                <p><div class="form-group">
                                                    <label for="email"><strong>Email</strong></label>
													<input type="email" name="email" placeholder="Masukkan Email" autocomplete="off"  class="form-control" required value="<?= $vendorr->email ?>">
                                                </div></p>
                                            </div>
										</div>
									<div class="form-group">
										<label for="alamat"><strong>Alamat</strong></label>
										<textarea name="alamat" id="alamat" style="resize: none;" class="form-control" placeholder="Masukkan Alamat"><?= $vendorr->alamat ?></textarea>
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
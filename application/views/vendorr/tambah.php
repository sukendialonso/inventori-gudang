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
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card shadow">
                                <div class="card-header"><strong>Isi Form Dibawah Ini!</strong></div>
							        <div class="card-body">
								<form action="<?= base_url('vendorr/proses_tambah') ?>" id="form-tambah" method="POST" class="forms-sample" autocomplete="off">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p><div class="form-group">
                                                    <label for="kode_vendorr"><strong>Kode Vendor</strong></label>
													<input type="text" name="kode_vendorr" placeholder="Masukan Kode Vendor" class="form-control" required value="<?= mt_rand(1000, 10000) ?>" maxlength="8" readonly>
                                                </div></p>
                                            </div>
                                            <div class="col-md-5">
                                                <p><div class="form-group">
                                                    <label for="nama_vendorr"><strong>Nama Vendor</strong></label>
													<input type="text" name="nama_vendorr" placeholder="Masukan Nama Vendor" class="form-control" required>
                                                </div></p>
                                            </div>
										</div>
										<div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="telepon"><strong>Telepon</strong></label>
                                                    <input type="number" class="form-control" name="telepon" placeholder="Masukan Nomor" required>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="email"><strong>Email</strong></label>
                                                    <input type="text" class="form-control" name="email" placeholder="Masukan Email"required>
                                                </div>
                                            </div>
                                        </div>
										<div class="form-group">
										<label for="alamat"><strong>Alamat</strong></label>
										<textarea type="text" class="form-control" name="alamat" style="resize: none;" placeholder="Masukan Alamat"></textarea>
									</div>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
										<button type="reset" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
                                    </form>
                                </div>
                            </div>
                        

                    </div>
                </div>
            
            <!-- main-panel ends -->
        <!-- page-body-wrapper ends -->
    </div>
			<!-- load footer -->
			<?php $this->load->view('partials/footer.php') ?>
		</div>
	</div>
	<?php $this->load->view('partials/js.php') ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
	<link href="<?= base_url('sb-admin') ?>/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
	<div class="row">
		<div class="col text-center">
			<h3 class="h3 text-dark"><?= $title ?></h3>
		</div>
	</div>
	<hr>
	<div class="row">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<td width="20px">No</td>
					<td>NIP</td>
					<td>Nama Pegawai</td>
					<td>Telepon</td>
					<td>Email</td>
					<td>Alamat</td>
					<td>Jenis Kelamin</td>
					<td>Jabatan</td>
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
				</tr>	
			<?php endforeach ?>
			</tbody>
		</table>
	</div>
</body>
</html>
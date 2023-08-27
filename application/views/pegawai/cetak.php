<!DOCTYPE html>
<html>
<head>
	<title>Data User PT. Gajah Tunggal Tbk.</title>
</head>
<body>
	<style>
		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		td, th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #dddddd;
		}
		.tulisan{
			font-size: 30px;
			margin-top: 10px;
			margin-bottom: 10px;
			text-align: center;
		}
	</style>
	<img src="<?= base_url('sb-admin') ?>/img/kopgt.jpeg">
	<p class="tulisan"><strong>Data Pegawai</strong></p>
	<hr>
	<table>
		<tr>
			<th>NIP</th>
			<th>Nama Pegawai</th>
			<th>Email</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Jabatan</th>
		</tr>
		<?php foreach ($laporan_pegawai as $data): ?>
			<tr>
				<td><?php echo $data->nip;?></td>
				<td><?php echo $data->nama_pegawai;?></td>
				<td><?php echo $data->email;?></td>
				<td><?php echo $data->alamat;?></td>
				<td><?php echo $data->jenis_kelamin;?></td>
				<td><?php echo $data->jabatan;?></td>
			</tr>
		<?php endforeach ?>
	</table>
</body>

<script type="text/javascript">
	window.print();
</script>
</html>
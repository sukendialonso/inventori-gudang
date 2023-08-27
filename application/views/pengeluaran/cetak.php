<!DOCTYPE html>
<html>
<head>
	<title>Data Barang Keluar</title>
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
	<p class="tulisan"><strong>Transaksi Data Barang Keluar</strong></p>
	<hr>
	<table>
		<tr>
			<td>No</td>
			<td>No Keluar</td>
			<td>Nama Admin</td>
			<td>Nama User</td>
			<td>Tanggal Keluar</td>
			<td>Jam Keluar</td>
			<td>Tanggal Input</td>
		</tr>

		<?php
		$no = 1; 
		foreach ($laporan_pengeluaran as $data): ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?php echo $data->no_keluar;?></td>
				<td><?php echo $data->nama;?></td>
				<td><?php echo $data->nama_user;?></td>
				<td><?php echo $data->tgl_keluar;?></td>
                <td><?php echo $data->jam_keluar;?></td>
                <td><?php echo $data->tanggal;?></td>
			</tr>
		<?php endforeach ?>
	</table>
</body>

<script type="text/javascript">
	window.print();
</script>
</html>
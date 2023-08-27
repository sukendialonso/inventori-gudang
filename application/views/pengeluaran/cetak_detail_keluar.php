<!DOCTYPE html>
<html>
<head>
	<title>Cetak Detail Barang Keluar</title>
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
	<p class="tulisan"><strong>Detail Transaksi Data Barang Keluar</strong></p>
	<hr>
	<table>
    <tr>
		<td><strong>No keluar</strong></td>
		<td>:</td>
		<td><?= $pengeluaran->no_keluar ?></td>
	</tr>
		<tr>
		<td><strong>Nama User</strong></td>
		<td>:</td>
		<td><?= $pengeluaran->nama_user ?></td>
		</tr>
	<tr>
		<td><strong>Nama Customer</strong></td>
		<td>:</td>
		<td><?= $pengeluaran->nama_customer ?></td>
	</tr>
	<tr>
		<td><strong>Waktu keluar</strong></td>
		<td>:</td>
		<td><?= $pengeluaran->tgl_keluar ?> - <?= $pengeluaran->jam_keluar ?></td>
	</tr>
	<tr>
		<td>No</td>
		<td>Nama Barang</td>
		<td>Jumlah</td>
	</tr>
		<?php 
		$no = 1;
		foreach ($all_detail_pengeluaran as $detail_pengeluaran): ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?php echo $data->nama_barang;?></td>
		    	<td><?php echo $data->jumlah;?></td>
			</tr>
		<?php endforeach ?>
	</table>
</body>

<script type="text/javascript">
	window.print();
</script>
</html>
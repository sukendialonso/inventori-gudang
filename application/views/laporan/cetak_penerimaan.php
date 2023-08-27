<!DOCTYPE html>
<html>
<head>
	<title>Laporan Barang Masuk</title>
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
	<p class="tulisan"><strong>Transaksi Data Barang Masuk</strong></p>
	<hr>
	<table>
		<tr>
		<td>No</td>
		<td>No Terima</td>
		<td>Nama Vendor</td>
		<td>Nama User</td>
		<td>Tanggal Terima</td>
		<td>Jam Terima</td>
		<td>Tanggal Input</td>
		</tr>
		<?php 
		$no = 1;
		foreach ($laporan_penerimaan as $data): ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?php echo $data->no_terima;?></td>
				<td><?php echo $data->nama_vendorr;?></td>
				<td><?php echo $data->nama;?></td>
				<td><?php echo $data->tgl_terima;?>
				<td><?php echo $data->jam_terima;?></td>
                <td><?php echo $data->tanggal;?></td>
			</tr>
		<?php endforeach ?>
	</table>
</body>

<script type="text/javascript">
	window.print();
</script>
</html>
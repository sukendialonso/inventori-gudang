<!DOCTYPE html>
<html>
<head>
	<title>Master Data Barang Gudang Ban Radial PT Gajah Tunggal Tbk</title>
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
	<p class="tulisan"><strong>Master Data Stok Barang</strong></p>
	<hr>
	<table>
		<tr>
			<th>No</th>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Stok</th>
			<th>Keterangan</th>
			<th>Tanggal</th>
			
		</tr>
		<?php 
		$no = 1;
		foreach ($laporan_barang as $data): ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?php echo $data->kode_barang;?></td>
				<td><?php echo $data->nama_barang;?></td>
				<td><?php echo $data->stok;?><?php echo $data->satuan;?></td>
				<td><?php echo $data->keterangan;?></td>
				<td><?php echo $data->tanggal;?>
				
			</tr>
		<?php endforeach ?>
	</table>
</body>

<script type="text/javascript">
	window.print();
</script>
</html>
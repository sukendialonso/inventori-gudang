<!DOCTYPE html>
<html>
<head>
	<title>Laporan Barang</title>
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
	<p class="tulisan"><strong>Laporan Data Stok Barang</strong></p>
	<hr>
	<table>
		<tr>
        <td>No</td>
		<td>Kode Barang</td>
		<td>Nama Barang</td>
		<td>Stok</td>
		<td>Keterangan</td>
		<td>Tanggal</td>
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
                <td><?php echo $data->tanggal;?></td>
			</tr>
		<?php endforeach ?>
	</table>
</body>

<script type="text/javascript">
	window.print();
</script>
</html>
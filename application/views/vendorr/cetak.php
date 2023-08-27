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
	<p class="tulisan"><strong>Data Vendor Barang</strong></p>
	<hr>
	<table>
		<tr>
			<th>No</th>
			<th>Kode Vendor</th>
			<th>Nama Vendor</th>
			<th>Telepon</th>
			<th>Email</th>
			<th>Alamat</th>
		</tr>
		<?php 
		$no = 1;
		foreach ($laporan_vendorr as $data): ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?php echo $data->kode_vendorr;?></td>
				<td><?php echo $data->nama_vendorr;?></td>
				<td><?php echo $data->telepon;?></td>
				<td><?php echo $data->email;?></td>
				<td><?php echo $data->alamat;?></td>
			</tr>
		<?php endforeach ?>
	</table>
</body>

<script type="text/javascript">
	window.print();
</script>
</html>
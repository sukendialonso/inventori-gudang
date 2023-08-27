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
	<p class="tulisan"><strong>Data User</strong></p>
	<hr>
	<table>
		<tr>
			<th>No</th>
			<th>NIP</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Password</th>
		</tr>

		<?php 
		$no = 1;
		foreach ($laporan_user as $data): ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?php echo $data->nip;?></td>
				<td><?php echo $data->nama;?></td>
				<td><?php echo $data->username;?></td>
				<td><?php echo $data->password;?></td>
			</tr>
		<?php endforeach ?>
	</table>
</body>

<script type="text/javascript">
	window.print();
</script>
</html>
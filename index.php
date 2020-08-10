<?php
include 'functions.php';
$db_buku = query("SELECT * FROM db_buku");

// M Fikri Dzakir A
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="icon.ico" type="image/x-icon">
	<title>GoPerpus - Website Peminjaman Buku</title>
</head>

<style type="text/css">

	* {
		font-family: sans-serif;
		margin: 0 auto;
		padding: 0;
	}

	body {
		background-color: #0F0E20;
		background-size: cover;
		background-attachment: fixed;
	}

	h1 {
		margin-top: 40px;
		color: #ffffff;
	}

	a {
		text-decoration: none;
	}

	.content-table {
		border-collapse: collapse;
		background-color: #ffffff;
		margin: 25px 0;
		font-size: 0.9em;
		min-width: 400px;
		border-radius: 5px 5px 0 0;
		overflow: hidden;
		box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
	}

	.content-table thead tr {
		background-color: #335EF7;
		color: #ffffff;
		text-align: left;
		font-weight: bold;
	}

	.content-table th,
	.content-table td {
		padding: 12px 15px;
	}

	.content-table tbody tr {
		border-bottom: 1px solid #dddddd;
	}

	.content-table tbody tr:nth-of-type(even) {
		background-color: #f3f3f3;
	}

	.content-table tbody tr.active-row {
		font-weight: bold;
		color: #009879;
	}

	a {
		text-decoration: none;
	}

	.link {
		margin-top: 12px;
	}

	.balik {
		border: none;
		border-radius: 4px;
		padding: 7px;
		background-color: #1ABC9C;
		color: #ffffff;
	}

	.ubah {
		border: none;
		border-radius: 4px;
		padding: 7px;
		background-color: #dc3545;
		color: #ffffff;
	}

	.link {
		margin-top: 20px;
	}

	button {
		border: none;
		border-radius: 4px;
		padding: 7px;
		background-color: #FF915F;
		color: #ffffff;
	}

</style>


<body>
<center>
	<h1>DAFTAR PEMINJAMAN BUKU</h1>

	<div class="link">
		<a href="tambah.php"><button>Tambah data Peminjaman</button></a>
	</div>

	<table class="content-table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Alamat</th>
				<th>No. Telp</th>
				<th>Judul Buku</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<?php $i = 1; ?>
		<?php foreach ($db_buku as $row) : ?>
		<tbody>
			<tr>
				<td><?= $i; ?></td>
				<td><?= $row["nama"]; ?></td>
				<td><?= $row["email"]; ?></td>
				<td><?= $row["alamat"]; ?></td>
				<td><?= $row["no_telp"]; ?></td>
				<td><?= $row["judul_buku"]; ?></td>
				<td>
					<a href="ubah.php?id=<?= $row["id"]; ?>">
						<button class="ubah">Mengubah</button>
					</a>|
					<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin?');">
						<button class="balik">Mengembalikan</button>
					</a>
				</td>
			</tr>
		</tbody>

		<?php $i++; ?>
		<?php endforeach; ?>
		
	</table>
</center>
</body>
</html>
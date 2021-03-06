<?php 
include 'functions.php';

// Cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"]) ) {
	
	// Cek apakah data berhasil di tambahkan atau tidak
	if (tambah ($_POST) > 0) {
		echo "
			<script>
				alert('Data berhasil di tambahkan !');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data gagal di tambahkan !');
				document.location.href = 'index.php';
			</script>
		";
	}
// M Fikri Dzakir A
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="icon.ico" type="image/x-icon">
	<title>Tambah data Peminjaman</title>
</head>
<style type="text/css">
	
	* {
		margin: 0 auto;
		padding: 0;
		font-family: sans-serif;
		color:#0F0E20;
	}

	body {
		background-color:#0F0E20;
		background-size: cover;
		background-attachment: fixed;
	}

	h1 {
		padding-top: 40px;
	}

	input {
		border-top: none;
		border-left: none;
		border-right: none;
		border-color: #0F0E20;
		background-color: #ffffff;
		outline: none;
		font-size:25px;
	}

	.form-register {
		background-color: #ffffff;
		margin-top: 120px;
		height: 460px;
		width: 40%;
		border-radius: 10px;
		box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
	}

	.nama {
		margin-top: 14px;
		margin-left: 10px;
	}

	.email {
		margin-top: 5px;
		margin-left: 12px;
	}

	.alamat {
		margin-top: 5px;
		margin-left: 10px;
		margin-right: 8px;
	}

	.no_telp {
		margin-top: 5px;
		margin-left: 10px;
		margin-right: 38px;	
	}

	.judul_buku {
		margin-top: 5px;
		margin-left: 10px;
		margin-right: 37px;
	}

	button {
		border: none;
		border-radius: 4px;
		padding: 10px 20px 10px 20px;;
		color: #fff;
		background-color:#FF915F;
		margin-top: 15px;
		margin-left: 60%; 
	}

	button:hover{
		border: none;
		border-radius: 4px;
		padding: 10px 20px 10px 20px;;
		color: #fff;
		background-color:#0F0E20;
		margin-top: 15px;
		margin-left: 60%; 
		cursor: pointer;
	}

</style>
<body>
	<center>
		<form action="" method="post" class="form-register">
			<h1>Masukan Data Anda</h1>

			<br>
				<label for="nama">Nama</label>
				<input class="nama" type="text" name="nama"  id="nama" required="" autocomplete="off">
			</br>
			<br>
				<label for="email">Email</label>
				<input class="email" type="email" name="email" id="email" required="" autocomplete="off">
			</br>
			<br>
				<label for="alamat">Alamat</label>
				<input class="alamat" type="text" name="alamat" id="alamat" required="" autocomplete="off">
				</br>
			<br>
				<label for="no_telp">Nomor Telp</label>
				<input class="no_telp" type="text" name="no_telp"  id="no_telp" required="" autocomplete="off">
			</br>
			<br>
				<label for="judul_buku">Judul Buku</label>
				<input class="judul_buku" type="text" name="judul_buku" id="judul_buku" required="" autocomplete="off">
			</br>
			<br>
				<button type="submit" name="submit">Submit</button>
			</br>

		</form>
	</center>
</body>
</html>
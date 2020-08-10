<?php 

// M Fikri Dzakir A

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "perpustakaan");


function query($query) {
	global $conn;

	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}

function tambah($data) {
	global $conn;

	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$no_telp = htmlspecialchars($data["no_telp"]);
	$judul_buku = htmlspecialchars($data["judul_buku"]);

	$query = "INSERT INTO db_buku VALUES 
		('', '$nama', '$email', '$alamat', '$no_telp', '$judul_buku')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id) {
	global $conn;

	mysqli_query($conn, "DELETE FROM db_buku WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;

	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$no_telp = htmlspecialchars($data["no_telp"]);
	$judul_buku = htmlspecialchars($data["judul_buku"]);

	$query = "UPDATE db_buku SET
			nama = '$nama',
			email = '$email',
			alamat = '$alamat',
			no_telp = '$no_telp',
			judul_buku = '$judul_buku'
			WHERE id = $id";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
?>
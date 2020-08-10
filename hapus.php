<?php
include 'functions.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
	echo "
		<script>
		alert('Terima Kasih Telah Mengembalikan Buku !');
		document.location.href = 'index.php';
		</script>
	";
} else {
	echo "
		<script>
		alert('Maaf, Proses Pengembalian Gagal !');
		document.location.href = 'index.php';
		</script>
	";
}

// M Fikri Dzakir Asyraf
?>
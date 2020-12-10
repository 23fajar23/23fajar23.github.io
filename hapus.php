<?php
	include 'koneksi.php';

	$id = $_GET['id'];
	$query = "DELETE FROM product WHERE id = '$id' ";
	$result = mysqli_query($connect, $query);

	if ($result) {
		echo "Data berhasil dihapus";
?>

<a href="homeCRUD.php">Lihat data</a>

<?php
	}else{
		echo "Data gagal dihapus" . mysqli_error($connect);
	}
?>
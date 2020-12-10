<?php
	$namaHost = "localhost";
	$username = "root";
	$password = "";

	$connect = mysqli_connect($namaHost,$username,$password);

	if ($connect) {
		echo "Koneksi ke MySQL berhasil ";
	}else{
		echo "Koneksi ke MySQL gagal" . mysqli_connect_error();
	}

	$sql = "CREATE DATABASE prakwebdb";
	if (mysqli_query($connect, $sql)) {
		echo "Database berhasil dibuat";
	}else{
		echo "Database gagal dibuat <br>" . mysqli_error($connect);
	}

	mysqli_close($connect);

?>
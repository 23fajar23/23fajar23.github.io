<?php
	$namaHost = "localhost";
	$username = "root";
	$password = "";
	$database = "prakwebdb";

	$connect = mysqli_connect($namaHost,$username,$password,$database);

	if ($connect) {
		echo "Koneksi ke MySQL berhasil <br>";
	}else{
		echo "Koneksi ke MySQL gagal" . mysqli_connect_error();
	}

	$sql = "CREATE TABLE product(
				id INT PRIMARY KEY,
				product_name VARCHAR(30) NOT NULL,
				harga INT NOT NULL			
			)";



	if (mysqli_query($connect, $sql)) {
		echo "Tabel Product berhasil dibuat";
	}else{
		echo "Tabel Product gagal dibuat <br>" . mysqli_error($connect);
	}

	mysqli_close($connect);

?>
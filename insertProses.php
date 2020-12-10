<?php
	include 'koneksi.php';

	$id = $_POST['id'];
	$nama = $_POST['name'];
	$harga = $_POST['price'];
	
	$target_path = "uploads/";
	
	if(!file_exists($target_path)) {
    	mkdir($target_path, 0755, true);
    	echo "The directory was created ";
	}

	$target_path = $target_path . basename(
	$_FILES['upload']['name']);
	$tmp_name = $_FILES['upload']['tmp_name'];

	if (move_uploaded_file($_FILES['upload']['tmp_name'], $target_path)) {
		echo "The file " . basename($_FILES['upload']['name'] . " has been uploaded");
	}else{
		echo "There was an error uploading the file, please try again";
	}

	$sql = "INSERT INTO product(id,product_name,harga,url_foto)
			VALUES('$id','$nama','$harga','$target_path')";

	if (mysqli_query($connect, $sql)) {
		echo "Data berhasil ditambahkan";
	}else{
		echo "Data gagal ditambahkan <br>" . mysqli_error($connect);
	}

	mysqli_close($connect);
?>
<?php
	include "koneksi.php";

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

	$query = "UPDATE product SET product_name = '$nama', harga = '$harga', url_foto = '$target_path' WHERE id = '$id' ";
	$result = mysqli_query($connect, $query);

	if ($result) {
		echo "Berhasil update data";
?>

	<a href="homeCRUD.php">Lihat data</a>
	
<?php
	}else{
		echo "Gagal update data" . mysqli_error($connect);
	}

?>
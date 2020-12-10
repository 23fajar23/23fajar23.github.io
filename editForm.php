<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$query = "SELECT * FROM product WHERE id = '$id'";
	$result = mysqli_query($connect, $query);
?>

<form action="prosesEdit.php" method="POST" enctype="multipart/form-data">
	<table>
		<?php
			while ($row = mysqli_fetch_array($result)) {
		?>
		<tr>
			<td> Id: </td>
			<td> <input type="text" name="id" value="<?php echo $row['id']; ?>"> </td>
		</tr>
		<tr>
			<td> Nama Produk: </td>
			<td> <input type="text" name="name" value="<?php echo $row['product_name']; ?>"> </td>
		</tr>
		<tr>
			<td> Harga: </td>
			<td> <input type="number" name="price" value="<?php echo $row['harga']; ?>"> </td>
		</tr>
		<tr>
			<td> Foto: </td>
			<td> <input type="file" name="upload" value="<?php echo $row['url_foto']; ?>"> </td>
		</tr>

		<tr>
			<td><input type="submit" name="simpan" value="Simpan"> </td>
		</tr>
		<?php
			}
		?>
	</table>


</form>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Form Edit Kamera</title>
</head>
<body>
	<h2>Form Edit Kamera</h2>
	
	<?php 
	include_once("config.php");
	$id = $_GET['id'];
	$show = mysqli_query($mysqli, "SELECT * FROM kameraku WHERE id_kamera = '$id'");
    if(mysqli_num_rows($show) == 0){
	}
	else{
		$kamera = mysqli_fetch_assoc($show);
	}
	?>
	<form action="prosesEdit.php" method="post">
		<input type="hidden" name="id_kamera" value="<?php echo $id; ?>">
		<table cellpadding="5" cellspacing="0">
			<tr>
				<td>Id</td>
				<td>
                    <input type="text" value="<?php echo $kamera['id_kamera']; ?>" name="id_kamera" readonly>
                </td>
			</tr>
			<tr>
				<td>Nama Kamera</td>
				<td>
                    <input type="text" value="<?php echo $kamera['nama_kamera']; ?>" name="nama_kamera" required>
                </td>
			</tr>
            <tr>
				<td>Brand Kamera</td>
				<td>
                    <input type="text" value="<?php echo $kamera['brand_kamera']; ?>" name="brand_kamera" required>
                </td>
			</tr>
            <tr>
				<td>Harga Kamera</td>
				<td>
                    <input type="text" value="<?php echo $kamera['harga_kamera']; ?>" name="harga_kamera" required>
                </td>
			</tr>
            <tr>
				<td>Stock Kamera</td>
				<td>
                    <input type="text" value="<?php echo $kamera['stock_kamera']; ?>" name="stock_kamera" required>
                </td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td>
                    <a href="index.php">Kembali</a>
					<input type="submit" value="Simpan" name="simpan">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
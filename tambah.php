<!DOCTYPE html>
<html>
<head>
	<title>Tambah Kamera</title>
</head>
<body>
	<h2>Form Tambah Kamera</h2>
	<form action="prosesTambah.php" method="post">
		<table cellpadding="5" cellspacing="0">
			<tr>
				<td>Id</td>
				<td><input type="text" name="id_kamera" required></td>
			</tr>
			<tr>
				<td>Nama Kamera</td>
				<td><input type="text" name="nama_kamera" required></td>
			</tr>
            <tr>
				<td>Brand Kamera</td>
				<td><input type="text" name="brand_kamera" required></td>
			</tr>
            <tr>
				<td>Harga Kamera</td>
				<td><input type="text" name="harga_kamera" required></td>
			</tr>
            <tr>
				<td>Stock Kamera</td>
				<td><input type="text" name="stock_kamera" required></td>
			</tr>
			<tr>
				<td colspan="1"></td>
				<td>
                    <a href="index.php">Kembali</a>
					<input type="submit" value="TAMBAH" name="tambah">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
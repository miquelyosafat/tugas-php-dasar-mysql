<?php
		include_once("config.php");

        $query = mysqli_query($mysqli, "SELECT * FROM kameraku ORDER BY id_kamera DESC");
?>
<!DOCTYPE html>
<html>
<head>
	<title>DATA KAMERA</title>
</head>
<body>
	<h2>Data Kamera</h2>
	<p><a href="tambah.php">Tambah Kamera</a></p>
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#ccc">
            <th>Id</th> 
            <th>Nama Kamera</th> 
            <th>Brand</th> 
            <th>Harga</th> 
            <th>Stock</th> 
            <th>Action</th>
		</tr>
		<?php
			while($kamera = mysqli_fetch_assoc($query)){
            ?>
            <tr>
			<td><?php echo $kamera['id_kamera'] ?></td>
			<td><?php echo $kamera['nama_kamera'] ?></td>
			<td><?php echo $kamera['brand_kamera'] ?></td>
			<td><?php echo $kamera['harga_kamera'] ?></td>
			<td><?php echo $kamera['stock_kamera'] ?></td>
			<td><a href="edit.php?id=<?php echo $kamera['id_kamera'] ?>">Edit</a> 
                <a href="hapus.php?id=<?php echo $kamera['id_kamera'] ?>">Hapus</a></td>
            </tr>
            <?php
            }
            ?>
		
	</table>
</body>
</html>
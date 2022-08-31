<?php
	if(isset($_POST['id_kamera']) && isset($_POST['nama_kamera']) && isset($_POST['brand_kamera']) && isset($_POST['harga_kamera']) && isset($_POST['stock_kamera']) && isset($_POST['simpan']))
	{
		include_once('config.php');

		$id = $_POST['id_kamera'];
		$nama = $_POST['nama_kamera'];
		$brand = $_POST['brand_kamera'];
		$harga = $_POST['harga_kamera'];
		$stock = $_POST['stock_kamera'];

		$edit = mysqli_query($mysqli, "UPDATE kameraku SET nama_kamera = '$nama', brand_kamera = '$brand', harga_kamera = '$harga', stock_kamera = '$stock' WHERE id_kamera = '$id'");

		if($edit){
			echo "DATA BERHASIL DI UPDATE";
			echo "<a href='index.php'><p>Liat List</p></a>";
		}
	}
?>
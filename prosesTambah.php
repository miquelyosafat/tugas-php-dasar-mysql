<?php
	if(isset($_POST['id_kamera']) && isset($_POST['nama_kamera']) && isset($_POST['brand_kamera']) && isset($_POST['harga_kamera']) && isset($_POST['stock_kamera']) && isset($_POST['tambah']))
	{
		include_once('config.php');

		$id = $_POST['id_kamera'];
		$nama = $_POST['nama_kamera'];
		$brand = $_POST['brand_kamera'];
		$harga = $_POST['harga_kamera'];
		$stock = $_POST['stock_kamera'];

		$tambah = mysqli_query($mysqli, "INSERT INTO kameraku(nama_kamera,brand_kamera,harga_kamera,stock_kamera) 
        VALUES('$nama','$brand','$harga','$stock')");

		if($tambah){
			echo "DATA BERHASIL DITAMBAHKAN";
			echo "<a href='index.php'><p>Lihat List</p></a>";
        }
	}
?>
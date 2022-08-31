<?php

include_once("config.php");
 
$id = $_GET['id'];
 
$result = mysqli_query($mysqli, "DELETE FROM kameraku WHERE id_kamera=$id");

header("Location:index.php");
?>
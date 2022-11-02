<?php
	include '../koneksi/connection.php';
	$id_menu = $_POST['id'];

	$rowMenu = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM laptop WHERE id_laptop='$id_menu'"));

	$hargaBarang = $rowMenu['harga_laptop'];

	echo json_encode(array('harga_laptop' => $hargaBarang));
?>
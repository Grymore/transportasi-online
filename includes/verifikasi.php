<?php

include_once('../config.php');
session_start();
if(isset($_GET['email'])){
	$id_adm = $_SESSION['id_adm'];
	$email = $_GET['email'];
	$status = $_GET['status'];

	$query = "UPDATE verifikasi SET status = '$status', id_adm = '$id_adm' WHERE email = '$email';";

	if(mysqli_query($koneksi, $query)){
		berhasil('../admin/verifikasi.php');
	}else{
		gagal();
	}
}else{
	halaman_tidak_ditemukan();
}

?>
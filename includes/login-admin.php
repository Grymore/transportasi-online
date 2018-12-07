<?php

include_once('../config.php');

if(isset($_POST['login'])){
	$id_adm = $_POST['id_adm'];
	$pass = $_POST['password'];

	$query = "SELECT * FROM admin WHERE BINARY id_adm='$id_adm' AND BINARY password='$pass';";

	$hasil = mysqli_query($koneksi, $query);

	if(mysqli_num_rows($hasil) == 1){
		session_start();
		$_SESSION['id_adm'] = $id_adm;
		header('location:../admin');
	}else{
		gagal();
	}
}else{
	halaman_tidak_ditemukan();
}

?>
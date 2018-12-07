<?php

if(isset($_GET['email'])){

	include_once('../config.php');
	$email = $_GET['email'];

	$query = "DELETE FROM pendaftar WHERE email = '$email';";

	if(mysqli_query($koneksi, $query)){
		berhasil('../admin/data-pendaftar.php');
	}else{
		gagal();
	}

}else{
	halaman_tidak_ditemukan();
}


?>
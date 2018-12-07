<?php

include_once('../config.php');

if(isset($_POST['login'])){

	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$query = "SELECT * FROM pendaftar WHERE BINARY email='$email' AND BINARY password='$pass';";

	$hasil = mysqli_query($koneksi, $query);

	if(mysqli_num_rows($hasil) == 1){
		session_start();
		$_SESSION['email'] = $email;
		header('location:../user');
	}else{
		gagal();
	}

}else{
	halaman_tidak_ditemukan();
}

?>
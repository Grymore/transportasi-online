<?php

include_once('../config.php');

if(isset($_POST['tambah'])){

	$email = $_POST['email'];
	$namad = $_POST['namad'];
	$namab = $_POST['namab'];
	$nama = $namad.' '.$namab;
	$nomor = $_POST['nomor'];
	$kota = $_POST['kota'];
	$password = $_POST['password'];
	$flowtype = $_POST['flowtype'];
	$sim = $_POST['sim'];
	$ktp = $_POST['ktp'];
	$skck = $_POST['skck'];
	$stnk = $_POST['stnk'];
	$rek = $_POST['rek'];

	$query = "INSERT INTO pendaftar (email, nama, nomor, kota, password, flowtype, sim, ktp, skck, stnk, rekening)
						VALUES ('$email', '$nama', '$nomor', '$kota', '$password', '$flowtype', '$sim', '$ktp', '$skck', '$stnk', '$rek');";

	$query .= "INSERT INTO verifikasi (email, status)
						VALUES ('$email', 'waiting');";

	if(mysqli_multi_query($koneksi, $query)){
		berhasil('../admin/data-pendaftar.php');
	}else{
		gagal();	
	}

}else{
	halaman_tidak_ditemukan();
}

?>
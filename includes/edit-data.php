<?php

include_once('../config.php');

if(isset($_POST['edit'])){

	$email = $_GET['email'];
	$nama = $_POST['nama'];
	$nomor = $_POST['nomor'];
	$kota = $_POST['kota'];
	$password = $_POST['password'];
	$flowtype = $_POST['flowtype'];
	$sim = $_POST['sim'];
	$ktp = $_POST['ktp'];
	$skck = $_POST['skck'];
	$stnk = $_POST['stnk'];
	$rek = $_POST['rek'];

	$query = "UPDATE pendaftar SET nama='$nama', nomor='$nomor', kota='$kota', password='$password', flowtype='$flowtype', 
						sim='$sim', ktp='$ktp', skck='$skck', stnk='$stnk', rekening='$rek'
						WHERE email = '$email';";

	if(mysqli_query($koneksi, $query)){
		berhasil('../admin/data-pendaftar.php');
	}else{
		gagal();	
	}

}else{
	halaman_tidak_ditemukan();
}

?>
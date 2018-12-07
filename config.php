<?php

$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db = 'pendaftaran_faisal';

$koneksi = mysqli_connect($host, $user, $pass, $db);

function berhasil($link){
	$link1 = $link;
	echo "
	<script>
	alert('Berhasil');
	window.location.href='$link1';
	</script>
	";
}

function gagal(){
	echo "
	<script>
	alert('Gagal');
	window.history.back();
	</script>
	";
}

function halaman_tidak_ditemukan(){
	echo "
	<script>
	alert('Halaman Tidak Ditemukan');
	window.history.back();
	</script>
	";
}

function login_dulu($login){
	echo "
	<script>
	alert('Silahkan Login Dulu!');
	window.location.href='$login';
	</script>
	";
}


?>
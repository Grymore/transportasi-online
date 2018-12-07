<?php

include('../config.php');
session_start();
if(!isset($_SESSION['email'])){
  login_dulu('../login.php');
}
else{
  $email = $_SESSION['email'];
  $query = "SELECT * FROM pendaftar WHERE email='$email';";

  $hasil = mysqli_query($koneksi, $query);

  while($data = mysqli_fetch_array($hasil))
  {
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Faisal Akbar
      <?php
        switch ($hal) {
          case 'index':
            echo " | Status";
            break;
          case 'cetak':
            echo " | Cetak";
            break;
          case 'data':
            echo " | ".$data['nama'];
            break;
          default:
            echo " | Utama";
            break;
        }
      ?>
    </title>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 sticky-top">
  <div class="container">
    <a class="navbar-brand text-warning" href="index.php">Transportasi Online</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item
        <?php
          if($hal == 'index'){
            echo 'active';
          }
        ?>
        ">
          <a class="nav-link" href="../user/">
            <i class="fa fa-info"></i> 
            Status Pendaftaran
          </a>
        </li>
        <li class="nav-item
        <?php
          if($hal == 'data'){
            echo 'active';
          }
        ?>
        ">
          <a class="nav-link" href="data.php">
            <i class="fa fa-user"></i> 
            <?=$data['nama']?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">
            <i class="fa fa-sign-out"></i> 
            Logout
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php
}
}
?>
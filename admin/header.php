<?php

include('../config.php');
session_start();
if(!isset($_SESSION['id_adm'])){
  login_dulu('login.php');
}
else{
  $id_adm = $_SESSION['id_adm'];
  }
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
          case 'pendaftar':
            echo " | Pendaftar";
            break;
          case 'tambah-pendaftar':
            echo " | Tambah Pendaftar";
            break;
          case 'verifikasi':
            echo " | Verifikasi";
            break;
          default:
            echo " | Dashboard Admin";
            break;
        }
      ?>
    </title>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 sticky-top">
  <div class="container">
    <a class="navbar-brand text-warning" href="index.php">Pendaftaran Transportasi Online</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown
        <?php
          if($hal == 'pendaftar'){
            echo 'active';
          }
        ?>
        ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-users"></i> 
            Data Pendaftar
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="data-pendaftar.php"><i class="fa fa-user"></i> Data Pendaftar</a>
            <a class="dropdown-item" href="tambah-data.php"><i class="fa fa-plus"></i> Tambah Data</a>
          </div>
        </li>
        <li class="nav-item
        <?php
          if($hal == 'verifikasi'){
            echo 'active';
          }
        ?>
        ">
          <a class="nav-link" href="verifikasi.php"><i class="fa fa-paperclip"></i> Verifikasi User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <title>Pendafataran Online
      <?php
        switch ($hal) {
          case 'pendaftaran':
            echo " | Pendaftaran Online";
            break;
          case 'login':
            echo " | Login";
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
    <a class="navbar-brand text-warning" href="index.php">Pendafataran Transportasi Online</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item
        <?php
          if($hal == 'pendaftaran'){
            echo 'active';
          }
        ?>
        ">
          <a class="nav-link" href="pendaftaran-online.php">Pendaftaran Online</a>
        </li>
        <li class="nav-item
        <?php
          if($hal == 'login'){
            echo 'active';
          }
        ?>
        ">
          <a class="nav-link" href="login.php">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


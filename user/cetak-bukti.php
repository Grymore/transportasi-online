<?php

  include_once('../config.php');
  session_start();
  if(!isset($_SESSION['email'])){
    login_dulu('../login.php');
  }
  else{
    $email = $_SESSION['email'];

    $query = "SELECT * FROM pendaftar WHERE email = '$email';";

    $hasil = mysqli_query($koneksi, $query);

?>
  <script>
    window.print();
  </script>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Faisal Akbar | Cetak Bukti
    </title>
  </head>
  <body>

<div class="container my-5 d-flex flex-column justify-content h-100">
  <p class="display-4 text-center">
    Bukti Pendaftaran
  </p>


    <?php

    while($data = mysqli_fetch_array($hasil)){

    ?>
  <p>
    Verifikasi berhasil atas data  :
  </p>
    <table width="100%" class="text-center">

      <tbody>
        <tr>
          <td width="30%">Nama</td>
          <td>:</td>
          <td width="50%" class="text-capitalize"><?=$data['nama']?></td>
        </tr>
        <tr>
          <td width="30%">Email</td>
          <td>:</td>
          <td width="50%"><?=$data['email']?></td>
        </tr>
        <tr>
          <td width="30%">Nomor Telpon</td>
          <td>:</td>
          <td width="50%" class="text-capitalize"><?=$data['nomor']?></td>
        </tr>
        <tr>
          <td width="30%">Kota</td>
          <td>:</td>
          <td width="50%" class="text-capitalize"><?=$data['kota']?></td>
        </tr>
        <tr>
          <td width="30%">Flowtype</td>
          <td>:</td>
          <td width="50%" class="text-capitalize"><?=$data['flowtype']?></td>
        </tr>
      </tbody>
    </table>
<p>
    Telah berhasil mendaftar
  </p>
    <?php

    }

    ?>

</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
    function cetak() {
      window.print();
    }
  </script>
  </body>
</html>


<?php
}

?>

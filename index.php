<?php
  $hal = 'index';
  require_once('header.php');
?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="media/banner/slide1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="media/banner/slide2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="media/banner/slide3.jpg" alt="Third slide">
    </div>
  </div>
</div>

<div class="container my-5">
  <div class="row text-center">
    <div class="col-sm">
      <img src="media/picture/4.jpg" alt="..." class="rounded-circle">
      <p class="my-2">
        Cara termudah untuk anda
        <p>
Satu klik dan mobil datang langsung ke Anda. Anda tahu persis ke mana harus pergi.</p>
      </p>
    </div>
    <div class="col-sm">
      <img src="media/picture/uang.jpg" alt="..." class="rounded-circle">
      <p class="my-2">
        Dapatkan penghasilan tambahan
        <p>Jangan sia-siakan waktu yang berharga anda dan dapatkan penghasilan lebih untuk itu.
        </p>
      </p>
    </div>
    <div class="col-sm">
      <img src="media/picture/maps.png" alt="..." class="rounded-circle" width="200px" height="200px">
      <p class="my-2">
        Memberikan rute yang efektif
        <p>Memberikan rute navigasi terbaik untuk menghindari terjebak kemacetan</p>
      </p>
    </div>
  </div>
</div>

<?php
  require_once('footer.php');
?>

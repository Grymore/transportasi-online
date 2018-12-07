<?php
  $hal = 'index';
  header('location:data-pendaftar.php');
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
      <img class="d-block w-100" src="media/banner/banner-1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="media/banner/banner-2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="media/banner/banner-3.jpg" alt="Third slide">
    </div>
  </div>
</div>

<div class="container my-5">
  <div class="row text-center">
    <div class="col-sm">
      <img src="media/picture/1.jpg" alt="..." class="rounded-circle">
      <p class="my-2">
        Konten pertama
      </p>
    </div>
    <div class="col-sm">
      <img src="media/picture/2.jpg" alt="..." class="rounded-circle">
      <p class="my-2">
        Konten kedua
      </p>
    </div>
    <div class="col-sm">
      <img src="media/picture/3.jpg" alt="..." class="rounded-circle">
      <p class="my-2">
        Makan makan
      </p>
    </div>
  </div>
</div>

<?php
  require_once('footer.php');
?>

<?php
  $hal = 'index';
  require_once('header.php');
?>

<div class="container my-5">
  <p class="display-4 text-center my-5">
    <i class="fa fa-info"></i> 
    Status Pendaftaran
  </p>

<?php
  include_once('../config.php');
  $query = "SELECT * FROM verifikasi WHERE email = '$email'";

  $hasil = mysqli_query($koneksi, $query);

  while($data = mysqli_fetch_array($hasil)){
    $status = $data['status'];

    switch ($status) {
      case 'waiting':
        echo '
          <div class="d-flex align-items-center flex-column justify-content-center h-100 my-5">
            <div class="text-center">
              <i class="fa fa-repeat fa-5x o-notch fa-spin fa-fw my-5"></i>
              <p class="my-5>"> 
                Menungggu verifikasi dari Admin. <br>
                <a href="data.php">Klik disini</a> untuk mengubah data.
              </p>
            </div>
            <button type="button" class="btn btn-success btn-lg my-5">
              <i class="fa fa-print"></i>
              Cetak Bukti
            </button>
          </div>
        ';
        break;
      case 'success':
        echo '
          <div class="d-flex align-items-center flex-column justify-content-center h-100 my-5">
            <div class="text-center text-success">
              <i class="fa fa-motorcycle fa-5x fa-fw my-5"></i>
              <p class="my-5>"> 
                Verifikasi Berhasil.
              </p>
            </div>
            <a class="btn btn-success btn-lg my-5" href="cetak-bukti.php" target="_blank">
              <i class="fa fa-print"></i>
              Cetak Bukti
            </a>
          </div>
        ';
        break;
      case 'failed':
        echo '
          <div class="d-flex align-items-center flex-column justify-content-center h-100 my-5">
            <div class="text-center text-danger">
              <i class="fa fa-times fa-5x fa-fw my-5"></i>
              <p class="my-5>"> 
                Verifikasi gagal, silahkan langsung datang ke kantor.
              </p>
            </div>
          </div>
        ';
        break;
      default:
        echo '
          <div class="d-flex align-items-center flex-column justify-content-center h-100 my-5">
            <div class="text-center">
              <i class="fa fa-repeat fa-5x o-notch fa-spin fa-fw my-5"></i>
              <p class="my-5>"> 
                Menungggu verifikasi dari Admin. <br>
                <a href="data.php">Klik disini</a> untuk mengubah data.
              </p>
            </div>
            <button type="button" class="btn btn-success btn-lg my-5">
              <i class="fa fa-print"></i>
              Cetak Bukti
            </button>
          </div>
        ';
        break;
    }
?>
 
  </div>



<?php
}
  require_once('footer.php');
?>
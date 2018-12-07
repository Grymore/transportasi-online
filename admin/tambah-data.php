<?php
  $hal = 'pendaftar';
  require_once('header.php');
?>

<div class="container my-5">
  <p class="display-4 text-center my-5">
    Tambah Data
  </p>

  <form action="../includes/tambah-data.php" method="POST" accept-charset="utf-8">
    
    <div class="form-group my-2 row">
      <input class="form-control form-control-lg" type="email" placeholder="Email" required="" name="email">
    </div>
    <div class="form-group my-2 row">
      <input class="form-control form-control-lg col mr-2" type="text" placeholder="Nama Depan" name="namad" required="">
      <input class="form-control form-control-lg col ml-2" type="text" placeholder="Nama Belakang" name="namab" required="">
    </div>
    <div class="form-group my-2 row">
      <input class="form-control form-control-lg" type="text" placeholder="Nomor Telepon" name="nomor" required="">
    </div>
    <div class="form-group my-2 row">
      <input class="form-control form-control-lg" type="text" placeholder="Kota" name="kota" required="">
    </div>
    <div class="form-group my-2 row">
      <input class="form-control form-control-lg" type="password" placeholder="Password" name="password" required="">
    </div>
    <div class="form-group my-2 row">
      <select class="custom-select form-control-lg" name="flowtype" required="">
        <option selected disabled="">Tipe Kendaraan</option>
        <option value="motor">Motor</option>
        <option value="mobil">Mobil</option>
      </select>
    </div>
    <div class="form-group my-2 row">
      <label for="exampleFormControlFile1">Pilih SIM</label>
      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="sim" required="">
    </div>
    <div class="form-group my-2 row">
      <label for="exampleFormControlFile1">Pilih KTP</label>
      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="ktp" required="">
    </div>
    <div class="form-group my-2 row">
      <label for="exampleFormControlFile1">Pilih SKCK</label>
      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="skck" required="">
    </div>
    <div class="form-group my-2 row">
      <label for="exampleFormControlFile1">Pilih STNK</label>
      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="stnk" required="">
    </div>
    <div class="form-group my-2 row">
      <label for="exampleFormControlFile1">Pilih Rekening</label>
      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="rek" required="">
    </div>
    <br>
    <div class="my-2 row">
      <button type="submit" class="btn btn-lg btn-info form-control btn-block" name="tambah">Tambah</button>
    </div>

  </form>
</div>

<?php
  require_once('footer.php');
?>

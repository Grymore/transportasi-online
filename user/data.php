<?php
  $hal = 'data';
  require_once('header.php');

  include_once('../config.php');

  if(isset($email)){

    $query = "SELECT * FROM pendaftar WHERE email = '$email';";

    $hasil = mysqli_query($koneksi, $query);

?>

<div class="container my-5">
  <p class="display-4 text-center my-5">
    Edit Data
  </p>

  <form action="../includes/update-data.php?email=<?=$email?>" method="POST" accept-charset="utf-8">
    <?php

    while($data = mysqli_fetch_array($hasil)){

      $flowtype = $data['flowtype'];

    ?>
    <div class="form-group my-2 row">
      <input class="form-control form-control-lg" type="email" placeholder="Email" required="" name="email" value="<?=$data['email']?>" disabled>
    </div>
    <div class="form-group my-2 row">
      <input class="form-control form-control-lg" type="text" placeholder="Nama Lengkap" required="" name="nama" value="<?=$data['nama']?>">
    </div>
    <div class="form-group my-2 row">
      <input class="form-control form-control-lg" type="text" placeholder="Nomor Telepon" name="nomor" required="" value="<?=$data['nomor']?>">
    </div>
    <div class="form-group my-2 row">
      <input class="form-control form-control-lg" type="text" placeholder="Kota" name="kota" required="" value="<?=$data['kota']?>">
    </div>
    <div class="form-group my-2 row">
      <input class="form-control form-control-lg" type="password" placeholder="Password" name="password" required="" value="<?=$data['password']?>">
    </div>
    <div class="form-group my-2 row">
      <select class="custom-select form-control-lg" name="flowtype" required="" disabled="">
        <option disabled="">Tipe Kendaraan</option>
        <option value="motor"
        <?php
        if($flowtype == 'motor'){
          echo "selected";
        }
        ?>
        >Motor</option>
        <option value="mobil"
        <?php
        if($flowtype == 'mobil'){
          echo "selected";
        }
        ?>
        >Mobil</option>
      </select>
    </div>
    
    <br>
    <div class="my-2 row">
      <button type="submit" class="btn btn-lg btn-warning form-control btn-block" name="edit">Simpan</button>
      <a class="btn btn-lg btn-primary form-control btn-block" href="../user/">Batal</a>
    </div>
    <?php

    }

    ?>
  </form>
</div>

<?php
  require_once('footer.php');
}else{
  halaman_tidak_ditemukan();
}
?>

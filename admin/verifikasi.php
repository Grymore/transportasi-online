<?php
  $hal = 'verifikasi';
  require_once('header.php');
?>

<div class="container my-5">
  <p class="display-4 text-center my-5">
    <i class="fa fa-paperclip"></i> Verifikasi
  </p>
  <table class="table table-hover text-center">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Flowtype</th>
        <th scope="col">SIM</th>
        <th scope="col">STNK</th>
        <th scope="col">KTP</th>
        <th scope="col">SKCK</th>
        <th scope="col">Rekening</th>
        <th scope="col">Verifikasi</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <?php

    include_once('../config.php');
    $query = "SELECT pendaftar.*, verifikasi.status
              FROM pendaftar
              JOIN verifikasi ON pendaftar.email = verifikasi.email
              WHERE verifikasi.status = 'waiting' OR verifikasi.status = 'failed'
              ORDER BY verifikasi.status DESC;";

    $hasil = mysqli_query($koneksi, $query);
    $no = 1;

    while($data = mysqli_fetch_array($hasil)){

    ?>
    <tbody>
      <tr>
        <td><?=$no;?></td>
        <td><?=$data['nama'];?></td>
        <td><?=$data['flowtype'];?></td>
        <td><a href="../upload/<?=$data['sim'];?>">Lihat</a></td>
        <td><a href="../upload/<?=$data['stnk'];?>">Lihat</a></td>
        <td><a href="../upload/<?=$data['ktp'];?>">Lihat</a></td>
        <td><a href="../upload/<?=$data['skck'];?>">Lihat</a></td>
        <td><a href="../upload/<?=$data['rekening'];?>">Lihat</a></td>
        <td class="text-light">
          <a class="btn btn-success btn-sm" href="../includes/verifikasi.php?email=<?=$data['email'];?>&status=success"><i class="fa fa-check"></i></a>
          <a class="btn btn-danger btn-sm" href="../includes/verifikasi.php?email=<?=$data['email'];?>&status=failed"><i class="fa fa-times"></i></a>
        </td>
        <td><?=$data['status'];?></td>
      </tr>
    </tbody>
    <?php
      $no++;
    }
    ?>
  </table>
</div>

<?php
  require_once('footer.php');
?>

<?php
  $hal = 'pendaftar';
  require_once('header.php');
?>

<div class="container my-5">
  <p class="display-4 text-center my-5">
    <i class="fa fa-users"></i> Data Pendaftar
  </p>
  <table class="table table-hover text-center">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Nomor Telpon</th>
        <th scope="col">Kota</th>
        <th scope="col">Flowtype</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <?php

    include_once('../config.php');
    $query = "SELECT * FROM pendaftar ORDER BY email;";

    $hasil = mysqli_query($koneksi, $query);
    $no = 1;

    while($data = mysqli_fetch_array($hasil)){

    ?>
    <tbody>
      <tr>
        <td><?=$no;?></td>
        <td><?=$data['nama'];?></td>
        <td><?=$data['email'];?></td>
        <td><?=$data['nomor'];?></td>
        <td><?=$data['kota'];?></td>
        <td><?=$data['flowtype'];?></td>
        <td class="text-light">
          <a class="btn btn-primary btn-sm" href="edit-data.php?email=<?=$data['email'];?>"><i class="fa fa-pencil-square-o"></i></a>
          <a class="btn btn-danger btn-sm" href="../includes/hapus-data.php?email=<?=$data['email'];?>"><i class="fa fa-trash-o"></i></a>
        </td>
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

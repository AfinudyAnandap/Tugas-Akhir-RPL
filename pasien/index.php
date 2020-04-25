<?php

include '../koneksi.php';

$sql = "SELECT * FROM pasien ORDER BY nama";

$res=mysqli_query($koneksi, $sql);

$pasien=array();

while ($data=mysqli_fetch_assoc($res)) {
  $pasien[]=$data;
}

include '../aset/header.php';
?>

<div class="container">
  <div class="row mt-4">
    <div class="col-md">
      
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h2 class="card-title"><i class="fas fa-user"></i> Data Pasien <a href="tambah.php"><button type="button" class="btn btn-outline-info"><i class="fas fa-plus"></i></button></a></h2>
       </div>
  <div class="card-body">
  
    <table class="table table-striped">
  <thead>
  <thead>
    <tr>
      <th scope="col" width="50">#</th>
      <th scope="col" width="100">Nama</th>
      <th scope="col" width="100">umur</th>
      <th scope="col" width="100">Nomor Telp</th>
      <th scope="col" width="100">Alamat</th>
       <th scope="col" width="100">Gejala</th>
        <th scope="col" width="100">Suhu</th>
        <th scope="col" width="100">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php
      $no = 1;
      foreach($pasien as $p) { ?>

        <tr>
          <th scope="row"><?= $no ?></th>
          <td><?= $p['nama'] ?></td>
          <td><?= $p['umur'] ?></td>
          <td><?= $p['telp'] ?></td>
          <td><?= $p['alamat'] ?></td>
          <td><?= $p['Gejala'] ?></td>
          <td><?= $p['suhu'] ?>°C</td>

          <td>
        <a href="detail.php?id_pasien=<?php echo $p['id_pasien'] ?>"; class="badge badge-success">Detail</a>
        <a href="edit.php?id_pasien=<?php echo $p['id_pasien'] ?>"; class="badge badge-danger">Edit</a>
        <a href="hapus.php?id_pasien=<?php echo $p['id_pasien'] ?>"; class="badge badge-warning">Hapus</a>
          </td>
        </tr>
    <?php 
  $no++;
}
    ?>
    </tbody>
</table>
  </div>
</div>

<?php
include '../aset/footer.php';
?>
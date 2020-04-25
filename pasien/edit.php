<?php 
include '../aset/header.php';
include '../koneksi.php';

$id_pasien = $_GET['id_pasien'];

$sql = mysqli_query($koneksi, "SELECT * FROM pasien INNER JOIN level on pasien.id_level = level.id_level where id_pasien = $id_pasien");
$pasien = mysqli_fetch_assoc($sql);

?>
<html lang="en">
<head>
	<title>Edit Data pasien</title>
</head>
<body>
<div class="container">
 <div class="row mt-4">
  <div class="col-md-9">
   <div class="card">
   <center>

    <div class="card-header">
    <h2>Edit Data pasien</h2>
    
    </div>
    </center>
    <div class="card-body">
         <form method="post" action="proses-edit.php">
            <input type="hidden" name="id_pasien" value="<?= $pasien['id_pasien'];?>">
                <div class="form-group">
                 <label for="pasien">nama</label>
                 <input type="text" class="form-control" name="nama" value="<?= $pasien['nama'];?>">
                </div>

                <div class="form-group">
                 <label for="pasien">Umur</label>
                 <input type="number" class="form-control" name="umur"  value="<?= $pasien['umur'];?>">
                </div>  

                <div class="form-group">
                 <label for="pasien">Nomor Telp</label>
                 <input type="number" class="form-control" name="telp"  value="<?= $pasien['telp'];?>">
                </div>

                <div class="form-group">
                 <label for="pasien">Alamat</label>
                 <input type="text" class="form-control" name="alamat"  value="<?= $pasien['alamat'];?>">
                </div>

                  <div class="form-group">
                 <label for="pasien">Suhu Badan</label>
                 <input type="number" class="form-control" name="suhu"  value="<?= $pasien['suhu'];?>">
                </div>
                
                <div class="form-group">
                 <label for="pasien">Gejala</label>
                 <textarea  type="textarea" name="Gejala"  class="form-control" value="<?= $pasien['Gejala'];?>" required><?= $pasien['Gejala']; ?></textarea>
                </div>
                <button type="submit" class="btn btn-outline-success" name="simpan">Tambah</button>&nbsp&nbsp<button type="simpan" class="btn btn-outline-primary" name="kembali">Kembali</button>

                </form>
                </div>
                </div>
                </div>
                </div>
                </div>
</body>
</html>

<?php 
include '../aset/footer.php'
?>
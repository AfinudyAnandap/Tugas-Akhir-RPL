<?php 
include '../aset/header.php';
?>
<html>
<head>
	<title>Tambah Data Pasien</title>
</head>
<body>
<div class="container">
 <div class="row mt-4">
  <div class="col-md-9">
   <div class="card">
   <center>

    <div class="card-header">
    <h2>Tambah Data pasien</h2>
    
    </div>
    </center>
    <div class="card-body">
         <form method="post" action="proses-tambah.php">
                <div class="form-group">
                 <label for="pasien">Nama</label>
                 <input type="text" class="form-control" name="nama" placeholder="Masukkan nama">
                </div>

                <div class="form-group">
                 <label for="pasien">Umur</label>
                 <input type="number" class="form-control" name="umur"  placeholder="Masukkan umur">
                </div>  

                <div class="form-group">
                 <label for="pasien">Nomor Telp</label>
                 <input type="number" class="form-control" name="telp"  placeholder="Masukkan no telp">
                </div>

                <div class="form-group">
                 <label for="pasien">Alamat</label>
                 <input type="text" class="form-control" name="alamat"  placeholder="Masukkan alamat">
                </div>

                <div class="form-group">
                 <label for="pasien">Gejala</label>
                 <textarea name="Gejala"  class="form-control"></textarea>
                </div>

                 <div class="form-group">
                 <label for="pasien">Suhu Badan</label>
                 <input type="number" class="form-control" name="suhu"  placeholder="Masukkan Suhu">
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
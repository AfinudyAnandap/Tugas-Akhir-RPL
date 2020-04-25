<?php 
include '../aset/header.php';
include '../koneksi.php';

$id_pasien = $_GET["id_pasien"];

$sql = "SELECT * FROM pasien inner join level on pasien.id_level = level.id_level where id_pasien = $id_pasien";
$res = mysqli_query($koneksi,$sql);
$detail = mysqli_fetch_assoc($res);


?>

<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
		</div>
		</div>
		</div>

		<center>
			<h2>Detail pasien</h2>
			<hr class="bg-light">
			  <div class="card-body">

                <table class="table">
					<tr>
						<td width="100px">Nama</td>
						<td width="500px"><?= $detail['nama'] ?></td>
					</tr>
					<tr>
						<td width="100px">Umur</td>
						<td width="500px"><?= $detail['umur'] ?></td>
					</tr>
					<tr>
						<td width="100px">Telp</td>
						<td width="500px"><?= $detail['telp'] ?></td>
					</tr>
					<tr>
						<td width="100px">alamat</td>
						<td width="500px"><?= $detail['alamat'] ?></td>
					</tr>
					<tr>
						<td width="100px">Gejala</td>
						<td width="500px"><?= $detail['Gejala'] ?></td>
					</tr>
					<tr>
						<td width="100px">Suhu</td>
						<td width="500px"><?= $detail['suhu'] ?></td>
					</tr>
					<tr>
						<td></td>
						<td>
						<a href="edit.php?id_pasien=<?= $detail['id_pasien']?>" class="btn btn-outline-warning" style="width:80px">Edit</a>&nbsp&nbsp
						<a href="hapus.php?id_pasien=<?= $detail['id_pasien']?>" class="btn btn-outline-danger" style="width:80px">Hapus</a>&nbsp&nbsp
						<a href="index.php?id_pasien=<?= $detail['id_pasien']?>" class="btn btn-outline-primary" style="width:80px">Kembali</a></td>
					</tr>
				</table>
				</th></tr></table>
				</div>
	
<?php
include '../aset/footer.php';
?>

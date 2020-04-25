<?php 
include '../aset/header.php';
include '../koneksi.php';

$id_petugas = $_GET["id_petugas"];

$sql = "SELECT * FROM users inner join level on users.id_level = level.id_level where id_petugas = $id_petugas";
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
			<h2>Detail petugas</h2>
			<hr class="bg-light">
			  <div class="card-body">

                <table class="table">
					<tr>
						<td width="100px">Nama</td>
						<td width="500px"><?= $detail['nama_petugas'] ?></td>
					</tr>
					<tr>
						<td width="100px">Username</td>
						<td width="500px"><?= $detail['username'] ?></td>
					</tr>
					<tr>
						<td width="100px">Password</td>
						<td width="500px"><?= $detail['password'] ?></td>
					</tr>
					<tr>
						<td width="100px">Nomor Telp</td>
						<td width="500px"><?= $detail['telp'] ?></td>
					</tr>
					<tr>
						<td></td>
						<td>
						<a href="edit.php?id_petugas=<?= $detail['id_petugas']?>" class="btn btn-outline-warning" style="width:80px">Edit</a>&nbsp&nbsp
						<a href="hapus.php?id_petugas=<?= $detail['id_petugas']?>" class="btn btn-outline-danger" style="width:80px">Hapus</a>&nbsp&nbsp
						<a href="index.php?id_petugas=<?= $detail['id_petugas']?>" class="btn btn-outline-primary" style="width:80px">Kembali</a></td>
					</tr>
				</table>
				</th></tr></table>
				</div>
	
<?php
include '../aset/footer.php';
?>

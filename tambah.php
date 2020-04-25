
<!DOCTYPE html>
<html lang="en">

<head>
    
<script src="http://localhost/COVID/aset/jquery.js"></script>
  <link rel="stylesheet" href="http://localhost/COVID/aset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/COVID/aset/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="http://localhost/COVID/aset/logad.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="proses-tambah.php" role="login">
            <CENTER>
            <H2>Registrasi</H2>
            </CENTER>
            <input type="text" name="nama_petugas" class="form-control nb"  aria-describedby="emailHelp" placeholder="Maukan Nama">
           <input type="text" name="username" class="form-control nb"  aria-describedby="emailHelp" placeholder="Username">
           <input type="text" class="form-control nb" name="password"  placeholder="Password">
           <input type="number" class="form-control nb" name="telp"  placeholder="Masukan Nomoe Telp">
         
          <div class="pwstrength_viewport_progress"></div>
          <button type="submit" class="btn btn-lg btn-primary btn-block" name="simpan">Registrasi</button>
          <div class="form-group mt-2">
          <p class="semibold-text mb-0">Account Already?<a href="../index.php"> Sign in</a></p>
          </div>
        </form>
      </section>  
      </div>
      <div class="col-md-4"></div>
  </div>
  </div>
 
  <script>
        feather.replace()
    </script>
</body>
  

</html>

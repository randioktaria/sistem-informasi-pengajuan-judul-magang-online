<!DOCTYPE html>
<html lang="en">

<head>
  <title>SISTEM INFORMASI AKADEMIK</title>
 
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
  <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  
  <link href="../assets/css/sb-admin.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login Dosen</div>
      <div class="card-body">
        <form method="POST" action="">
          <div class="form-group">
            <label for="kd_dosen">Username</label>
            <input class="form-control" type="text" placeholder="Kode Dosen" name="kd_dosen">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" placeholder="Password" name="password">
          </div>
          <input type="submit" name="login" value="Login" class="btn btn-primary btn-block">
        </form>
      </div>
    </div>
  </div>
  
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

<?php
include 'koneksi.php';
if(isset($_POST['login'])){
  $cek = mysqli_query($kon, "select * from dosen where kd_dosen = '$_POST[kd_dosen]' and password = '$_POST[password]'");
  $data = mysqli_fetch_array($cek);

  if(mysqli_num_rows($cek) > 0){
    session_start();
    $_SESSION["kd_dosen"] = $data["kd_dosen"];
    $_SESSION["password"] = $data["password"];
    echo "<script>window.location.href='index.php';</script>";
  }
}
?>
</html>

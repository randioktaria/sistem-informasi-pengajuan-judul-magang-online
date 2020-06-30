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
      <div class="card-header">Login Administrator</div>
      <div class="card-body">
        <form method="POST" action="">
          <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" type="text" placeholder="Username" name="username">
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
include "koneksi.php";
if(isset($_POST["login"])){
  $qry_cek = mysqli_query($kon, "SELECT * FROM admin WHERE username='$_POST[username]' AND password='$_POST[password]'");

  $data = mysqli_fetch_array($qry_cek);
  $row  = mysqli_num_rows($qry_cek);

  if($row > 0){
    session_start();
    $_SESSION["username"] = $data["username"];
    $_SESSION["password"] = $data["password"];
  
    echo "<script>window.location.href='menu.php';</script>";
  }
}
?>

</html>

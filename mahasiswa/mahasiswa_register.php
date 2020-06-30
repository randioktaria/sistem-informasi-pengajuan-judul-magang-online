<!DOCTYPE html>
<html lang="en">

<head>
  <title>SISTEM INFORMASI AKADEMIK</title>
 
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../assets/css/sb-admin.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Halaman Registrasi Mahasiswa</div>
      <div class="card-body">
        <form method="POST" action="">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
              <label for="nobp">Nobp</label>
              <input type="text" name="nobp" class="form-control" required>
            </div>
          <div class="col-md-6">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" required>
          </div>
        </div>
      </div>
          <div class="form-group">
            <label for="jns_kelamin">Jenis Kelamin</label>
            <select name="jns_kelamin" class="form-control">
              <option value="">Pilih Jenis Kelamin</option>
              <option value="L">Laki-Laki</option>
              <option value="P">Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="semester">Semester</label>
                <input type="text" name="semester" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label for="jml_sks">Total sks yg telah diambil</label>
                <input type="text" name="jml_sks" class="form-control" required>
              </div>
            </div>
          </div>
          <div class="form-group"> 
            <div class="form-row">
              <div class="col-md-6">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label for="konfimpass">Konfirmasi Password</label>
                <input type="password" name="konfimpass" class="form-control" required>
              </div>
            </div>
          </div>
          <input type="submit" name="registrasi" value="Registrasi" class="btn btn-primary btn-block">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="mahasiswa_login.php">Halaman Login</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

<?php
include 'koneksi.php';
if(isset($_POST['registrasi'])){
  if($_POST['jml_sks'] < 105){
    echo "<script>alert('Registrasi Gagal karena Total SKS Anda Belum Mencukupi');window.location.href='mahasiswa_register.php';</script>";
  }else{
    if($_POST['password'] == $_POST['konfimpass']){
      $reg = mysqli_query($kon, "INSERT INTO mahasiswa(nobp,nama,jns_kelamin,semester,jml_sks,status,password)VALUE('$_POST[nobp]','$_POST[nama]','$_POST[jns_kelamin]','$_POST[semester]','$_POST[jml_sks]','-','$_POST[password]')");
      if($reg){
        echo "<script>alert('Registrasi Berhasil');window.location.href='mahasiswa_register.php';</script>";
      }else{
        echo "<script>alert('Registrasi Gagal');window.location.href='mahasiswa_register.php';</script>";
      }
    }else{
      echo "<script>alert('Konfirmasi Password Berbeda');window.location.href='mahasiswa_register.php';</script>";
    }
  }
}
?>

</html>

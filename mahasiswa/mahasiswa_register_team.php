<?php
include 'koneksi.php';
$query = mysqli_query($kon, "select kd_pkl,password from mahasiswa where nobp = '$_SESSION[nobp]'");
$data = mysqli_fetch_array($query);

$cek = mysqli_query($kon, "select kd_pkl from pkl where kd_pkl = '$data[kd_pkl]'");
if(mysqli_num_rows($cek) > 0){
  echo "<h5><u><i>Maaf anda tidak dapat mengakses halaman ini . . . . !!!</i></u></h5>";
}else{
?>
<div class="container">
    <p><h3 align="center">Daftarkan Teman</h3></p>
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
              <input type="text" name="password" class="form-control" value="<?php echo $data['password'];?>" hidden>
          </div>
          <div class="form-group">
              <input type="text" name="kd_pkl" class="form-control" value="<?php echo $data['kd_pkl'];?>" hidden>
          </div>
          <input type="submit" name="daftarkan" value="DAFTARKAN" class="btn btn-primary btn-block">
        </form>
      </div>
  </div>


<?php
include 'koneksi.php';
if(isset($_POST['daftarkan'])){
  if($_POST['jml_sks'] < 105){
    echo "<script>alert('Daftar Gagal karena Total SKS Anda Belum Mencukupi');window.location.href='mahasiswa_register.php';</script>";
  }else{
      $reg = mysqli_query($kon, "insert into mahasiswa(nobp,nama,jns_kelamin,semester,jml_sks,status,password,kd_pkl)VALUE('$_POST[nobp]','$_POST[nama]','$_POST[jns_kelamin]','$_POST[semester]','$_POST[jml_sks]','-','$_POST[password]','$_POST[kd_pkl]')");
      if($reg){
        echo "<script>alert('Berhasil');window.location.href='?p=pengajuan_judul_team';</script>";
      }else{
        echo "<script>alert('Gagal');window.location.href='?p=pengajuan_judul_team';</script>";
      }
    }
  }
}
?>


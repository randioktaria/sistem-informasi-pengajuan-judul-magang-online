<div class="row">
	<div class="col-lg-12">
		<div class="page-header">
			<h1 align="center">Ganti Password</h1>
		</div>
		<form method="POST" action="">
			<div class="form-group">
				<label for="password">Password Lama</label>
				<input type="text" name="password" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="pass_new">Password Baru</label>
				<input type="text" name="pass_new" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="pass_new2">Konfirmasi Password baru</label>
				<input type="text" name="pass_new2" class="form-control" required>
			</div>
			<div class="form-group">
				<input type="submit" name="ganti" value="GANTI" class="btn btn-info btn-block">
			</div>
		</form>
	</div>
</div>

<?php
if(isset($_POST['ganti'])){
	include 'koneksi.php';
	$password  = $_POST['password'];
	$pass_new  = $_POST['pass_new'];
	$pass_new2 = $_POST['pass_new2'];

	$cek = mysqli_query($kon, "select * from admin where password = '$password' and username = '$_SESSION[username]'");

	if(mysqli_num_rows($cek) > 0){
		if($pass_new == $pass_new2){
			$ganti = mysqli_query($kon, "update admin set password = '$pass_new' where username = '$_SESSION[username]'");
			if($ganti){
				echo "<script>alert('Password Berhasil Diganti');window.location.href='?p=gantipassadm';</script>";
			}else{
				echo "<script>alert('Password Gagal Diganti');window.location.href='?p=gantipassadm';</script>";
			}
		}else{
			echo "<script>alert('Konfirmasi Password Berbeda');window.location.href='?p=gantipassadm';</script>";
		}
	}else{
		echo "<script>alert('Password Lama Salah');window.location.href='?p=gantipassadm';</script>";
	}
}
?>
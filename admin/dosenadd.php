<div class="row">
	<div class="col-lg-12">
		<div class="page-header"><h1 align="center">Tambah Data Dosen</h1></div>
			<form method="POST" action="" enctype="multipart/form-data">
				<p>
					<div class="form-group">
						<label for="kd_dosen">Kode Dosen</label>
						<input type="text" name="kd_dosen" class="form-control" required>
					</div>
				</p>
				<p>
					<div class="form-group">
						<label for="nm_dosen">Nama Dosen</label>
						<input type="text" name="nm_dosen" class="form-control" required>
					</div>
				</p>
				<p>
					<div class="form-group">
						<label for="jns_kelamin">Jenis Kelamin</label>
						<select name="jns_kelamin" class="form-control">
							<option value="">Pilih Jenis Kelamin</option>
							<option value="L">Laki-Laki</option>
							<option value="P">perempuan</option>
						</select>
					</div>
				</p>
				<p>
					<div class="form-group">
						<label for="foto">foto</label>
						<input type="file" name="foto" class="form-control">
					</div>
				</p>
				<p>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="text" name="password" class="form-control" required>
					</div>
				</p>
				<p>
					<div class="form-group">
						<input type="submit" name="simpan" value="SIMPAN" class="btn btn-info btn-block">
					</div>
				</p>
			</form>
	</div>		
</div>
<?php 
include 'koneksi.php';
if (isset($_POST['simpan'])) {
	$nmfoto  = $_FILES['foto']['name'];
	$lokfoto = $_FILES['foto']['tmp_name'];

	$tujuan = "../img/dosen/$nmfoto";

	if(is_uploaded_file($lokfoto)){
		move_uploaded_file($lokfoto,$tujuan);
	}

	$simpan = mysqli_query($kon, "INSERT INTO dosen(kd_dosen,nm_dosen,jns_kelamin,foto,password)VALUE('$_POST[kd_dosen]','$_POST[nm_dosen]','$_POST[jns_kelamin]','$nmfoto','$_POST[password]')");

	if($simpan){
		echo "<script>alert('Data Berhasil Disimpan');window.location.href='?p=dosen';</script>";
	}else{
		echo "<script>alert('Data Gagal Disimpan');window.location.href='?p=dosen';</script>";
	}
}
 ?>

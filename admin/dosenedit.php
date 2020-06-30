<?php
include 'koneksi.php';
$tampil = mysqli_query($kon, "SELECT * FROM dosen WHERE kd_dosen = '$_GET[kd_dosen]'");
$data = mysqli_fetch_array($tampil);

if($data['jns_kelamin'] == "L"){
	$jk = "Laki-Laki";
}else if($data['jns_kelamin'] == "P"){
	$jk = "Perempuan";
}

if(empty($data['foto']) && $data['jns_kelamin'] == "L"){
	$foto = "<img class='img-fluid img-profile rounded-circle mx-auto mb-2' src='../img/avatar/dosenl.png' width='120px'>"; 
}else if(empty($data['foto']) && $data['jns_kelamin'] == "P"){
	$foto = "<img class='img-fluid img-profile rounded-circle mx-auto mb-2' src='../img/avatar/dosenp.jpeg' width='120px'>"; 
}else{
	$foto = "<img class='img-fluid img-profile rounded-circle mx-auto mb-2' src='../img/dosen/$data[foto]' width='120px'>"; 
}
?>

<div class="row">
	<div class="col-lg-12">
		<div class="page-header"><h1 align="center">Tambah Data Dosen</h1></div>
			<form method="POST" action="" enctype="multipart/form-data">
				<p>
					<div class="form-group">
						<label for="kd_dosen">Kode Dosen</label>
						<input type="text" name="kd_dosen" class="form-control" value="<?php echo $data['kd_dosen'];?>" required>
					</div>
				</p>
				<p>
					<div class="form-group">
						<label for="nm_dosen">Nama Dosen</label>
						<input type="text" name="nm_dosen" class="form-control" value="<?php echo $data['nm_dosen'];?>" required>
					</div>
				</p>
				<p>
					<div class="form-group">
						<label for="jns_kelamin">Jenis Kelamin</label>
						<select name="jns_kelamin" class="form-control">
							<option value="<?php echo $data['jns_kelamin'];?>"><?php echo $jk;?></option>
								<?php 
								if($jk == "Laki-Laki"){
									echo "<option value='P'>Perempuan</option>";
								}else if($jk == "Perempuan"){
									echo "<option value='L'>Laki-Laki</option>";
								}?>
						</select>
					</div>
				</p>
				<p>
					<div class="form-group">
						<label for="foto">foto</label>
						<p>
							<?php echo $foto;?>	
						</p>
						<input type="file" name="foto" class="form-control">
					</div>
				</p>
				<p>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="text" name="password" class="form-control" value="<?php echo $data['password'];?>" required>
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
if(isset($_POST['simpan'])){
	$nmfoto  = $_FILES['foto']['name'];
	$lokfoto = $_FILES['foto']['tmp_name'];

	$tujuan = "../img/dosen/$nmfoto";

	if(is_uploaded_file($lokfoto)){
		move_uploaded_file($lokfoto,$tujuan);
	}

	if (empty($nmfoto)) {
		$nmfoto = $data['foto'];
	}

	$update = mysqli_query($kon, "UPDATE dosen SET kd_dosen = '$_POST[kd_dosen]',nm_dosen = '$_POST[nm_dosen]',jns_kelamin = '$_POST[jns_kelamin]',foto = '$nmfoto' WHERE kd_dosen = '$_GET[kd_dosen]'");

	if($update){
		echo "<script>alert('Data Berhasil diupdate');window.location.href='?p=dosen';</script>";
	}else{
		echo "<script>alert('Data Gagal diupdate');window.location.href='?p=dosen';</script>";
	}
}
?>
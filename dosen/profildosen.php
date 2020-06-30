<?php
include "koneksi.php";
$tampil = mysqli_query($kon, "SELECT * FROM dosen WHERE kd_dosen = '$_SESSION[kd_dosen]'");
$data = mysqli_fetch_array($tampil);

if(empty($data['foto'])){
	$foto = "<img class='img-fluid img-profile rounded-circle mx-auto mb-2' src='../img/avatar/admin.png' width='120px'>"; 
}else{
	$foto = "<img class='img-fluid img-profile rounded-circle mx-auto mb-2' src='../img/dosen/$data[foto]' width='120px'>"; 
}

?>
<div class="row">
	<div class="col-lg-12">
		<div class="page-header"><p><h1 align="">Profil Dosen</h1></p></div>
			<p><?php echo $foto; ?></p>
				<div class="table-responsive">
					<table class="table" border="0">
						<tr>
							<td width="15%"><strong>Nama</strong></td>
							<td width="1%"><strong>:</strong></td>
							<td width="84%"><?php echo $data['nm_dosen'];?></td>
						</tr>
						<tr>
							<td><strong>Username</strong></td>
							<td><strong>:</strong></td>
							<td><?php echo $data['kd_dosen'];?></td>
						</tr>
						<tr>
							<td><strong>Password</strong></td>
							<td><strong>:</strong></td>
							<td><i><?php echo $data['password'];?></i></td>
						</tr>
						<tr>
							<td colspan="3">
							<a class="btn btn-success btn-sm" href="?p=profildosen&tmb_foto&kd_dosen=<?php echo $data['kd_dosen'];?>"><i class="fa fa-edit fa-fw"></i> Tambah foto</a></td>
						</tr>
					</table>
			</div>
	</div>
</div>


<div class="row">
	<div class="col-lg-12">
<?php
if(isset($_GET['tmb_foto'])){?>
	<form method="POST" action="" enctype="multipart/form-data">
		<div class="form-group">
			<input type="file" name="foto" class="form-control" required>
		</div>
		<div class="form-group">
			<center>
			<input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-sm">
			<a href="?p=adminprofil" class="btn btn-danger btn-sm">Batal</a>
			</center>
		</div>
	</form>

<?php 
if($_POST['simpan']){
	include 'koneksi.php';
	$nmfoto  = $_FILES['foto']['name'];
	$lokfoto = $_FILES['foto']['tmp_name'];

	$tujuan = "../img/dosen/$nmfoto";

	if(is_uploaded_file($lokfoto)){
		move_uploaded_file($lokfoto,$tujuan);
	}

	$simpan = mysqli_query($kon, "update dosen set foto = '$nmfoto' where kd_dosen = '$_GET[kd_dosen]'");

	if(!simpan){
		echo "<script>alert('Gagal');window.location.href='?p=profildosen';</script>";
	}else{
		echo "<script>window.location.href='?p=profildosen';</script>";
	}
}

} ?>

</div>
</div>
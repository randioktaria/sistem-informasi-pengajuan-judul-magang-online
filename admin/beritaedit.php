<?php
include 'koneksi.php';
$tampil = mysqli_query($kon, "SELECT * FROM berita WHERE kd_berita = '$_GET[kd_berita]'");
$data = mysqli_fetch_array($tampil);

if(empty($data['foto_berita'])){
	$foto = "<img src='../img/berita/26.jpg' width='200px'>";
}else{
	$foto = "<img src='../img/berita/$data[foto_berita]' width='200px'>";
}
?>

<div class="row">
	<div class="col-lg-12">
		<div class="page-header"><h1 align="center">Tambah Data Berita</h1></div>
			<form method="post" enctype="multipart/form-data">
				<p>
					<div class="from-group">
						<label for="judul_berita">Judul Berita</label>
						<input type="text" name="judul_berita" class="form-control" value="<?php echo $data['judul_berita'];?>" required>
					</div>
				</p>
				<p>
					<div class="from-group">
						<label for="kepala_berita">Kepala Berita</label>
						<textarea name="kepala_berita" class="form-control" rows="5"><?php echo $data['kepala_berita'];?></textarea>
					</div>
				</p>
				<p>
					<div class="from-group">
						<label for="foto_berita">Foto</label>
						<p>
						<?php echo $foto; ?>
						</p>
						<input type="file" name="foto_berita" class="form-control">
					</div>
				</p>
				<p>
					<div class="from-group">
						<label for="isi_berita">Isi Berita</label>
						<textarea name="isi_berita" class="form-control" rows="10"><?php echo $data['isi_berita'];?></textarea>
					</div>
				</p>
				<p>
					<div class="from-group">
						<input type="submit" name="simpan" value="SIMPAN" class="btn btn-info btn-block">
					</div>
				</p>
			</form>
	</div>
</div>

<?php
if(isset($_POST['simpan'])){
	$nmfoto  = $_FILES['foto_berita']['name'];
	$lokfoto = $_FILES['foto_berita']['tmp_name'];

	$tujuan = "../img/berita/$nmfoto";

	if(is_uploaded_file($lokfoto)){
		move_uploaded_file($lokfoto,$tujuan);
	}

	if(empty($nmfoto)){
		$nmfoto = $data['foto_berita'];
	}

	$update = mysqli_query($kon, "UPDATE berita SET judul_berita = '$_POST[judul_berita]',kepala_berita = '$_POST[kepala_berita]',foto_berita = '$nmfoto',isi_berita = '$_POST[isi_berita]' WHERE kd_berita = '$_GET[kd_berita]'");

	
	if($update){
		echo "<script>alert('Data Berhasil diupdate');window.location.href='?p=berita';</script>";
	}else{
		echo "<script>alert('Data Gagal diupdate');window.location.href='?p=berita';</script>";
	}
}
?>
<div class="row">
	<div class="col-lg-12">
		<div class="page-header"><h1 align="center">Tambah Data Berita</h1></div>
			<form method="post" enctype="multipart/form-data">
				<p>
					<div class="from-group">
						<label for="judul_berita">Judul Berita</label>
						<input type="text" name="judul_berita" class="form-control" required>
					</div>
				</p>
				<p>
					<div class="from-group">
						<label for="kepala_berita">Kepala Berita</label>
						<textarea name="kepala_berita" class="form-control" rows="5" required></textarea>
					</div>
				</p>
				<p>
					<div class="from-group">
						<label for="isi_berita">Isi Berita</label>
						<textarea name="isi_berita" class="form-control" rows="10" required></textarea>
					</div>
				</p>
				<p>
					<div class="from-group">
						<label for="foto_berita">Foto</label>
						<input type="file" name="foto_berita" class="form-control">
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
include 'koneksi.php';
if(isset($_POST['simpan'])){
	$nmfoto  = $_FILES['foto_berita']['name'];
	$lokfoto = $_FILES['foto_berita']['tmp_name'];

	$tujuan  = "../img/berita/$nmfoto";

	if(is_uploaded_file($lokfoto)){
		move_uploaded_file($lokfoto,$tujuan);
	}

	$kepala_berita = nl2br($_POST['kepala_berita']);
	$isi_berita    = nl2br($_POST['isi_berita']);

	$simpan = mysqli_query($kon, "INSERT INTO berita (judul_berita,kepala_berita,isi_berita,foto_berita,tgl_post)VALUE('$_POST[judul_berita]','$kepala_berita','$isi_berita','$nmfoto',NOW())");

	if($simpan){
		echo "<script>alert('Data Berhasil disimpan');window.location.href='?p=berita';</script>";
	}else{
		echo "<script>alert('Data Gagal disimpan');window.location.href='?p=berita';</script>";
	}
}
?>

<div class="row">
	<div class="col-lg-12">
		<div class="page-header"><h1 align="center">Tambah Data Pengumuman</h1></div>
			<form method="post" enctype="multipart/form-data">
				<p>
					<div class="from-group">
						<label for="judul_pengumuman">Judul Pengumuman</label>
						<input type="text" name="judul_pengumuman" class="form-control" required>
					</div>
				</p>
				<p>
					<div class="from-group">
						<label for="isi_pengumuman">Isi Pengumuman</label>
						<textarea name="isi_pengumuman" class="form-control" rows="10" required></textarea>
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
	$simpan = mysqli_query($kon, "INSERT INTO pengumuman(judul_pengumuman,isi_pengumuman,tgl_post)VALUE('$_POST[judul_pengumuman]','$_POST[isi_pengumuman]',NOW())");

	if($simpan){
		echo "<script>alert('Data Berhasil disimpan');window.location.href='?p=pengumuman';</script>";
	}else{
		echo "<script>alert('Data Gagal disimpan');window.location.href='?p=pengumuman';</script>";
	}
}

?>
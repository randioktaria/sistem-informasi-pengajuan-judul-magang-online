<?php
include 'koneksi.php';
$tampil = mysqli_query($kon, "SELECT * FROM pengumuman WHERE kd_pengumuman = '$_GET[kd_pengumuman]'");
$data = mysqli_fetch_array($tampil);
?>
<div class="row">
	<div class="col-lg-12">
		<div class="page-header"><h1 align="center">Tambah Data Pengumuman</h1></div>
			<form method="post" enctype="multipart/form-data">
				<p>
					<div class="from-group">
						<label for="judul_pengumuman">Judul Pengumuman</label>
						<input type="text" name="judul_pengumuman" class="form-control" value=<?php echo $data['judul_pengumuman'];?> required>
					</div>
				</p>
				<p>
					<div class="from-group">
						<label for="isi_pengumuman">Isi Pengumuman</label>
						<textarea name="isi_pengumuman" class="form-control" rows="10" required><?php echo $data['isi_pengumuman'];?></textarea>
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
if (isset($_POST['simpan'])) {
 	$update = mysqli_query($kon, "UPDATE pengumuman SET judul_pengumuman = '$_POST[judul_pengumuman]',isi_pengumuman = '$_POST[isi_pengumuman]' WHERE kd_pengumuman = '$_GET[kd_pengumuman]'");

 	if($update){
		echo "<script>alert('Data Berhasil diupdate');window.location.href='?p=pengumuman';</script>";
	}else{
		echo "<script>alert('Data Gagal diupdate');window.location.href='?p=pengumuman';</script>";
	}
 } 
?>
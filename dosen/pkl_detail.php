<?php
include 'koneksi.php';
$tampil = mysqli_query($kon, "select * from pkl where id = '$_GET[id]'")or die (error);
$data = mysqli_fetch_array($tampil);

$tampil2 = mysqli_query($kon, "select * from mahasiswa,pkl where mahasiswa.kd_pkl = pkl.kd_pkl and pkl.kd_pkl = '$data[kd_pkl]'") or die (error);
$data2 = mysqli_fetch_array($tampil2);

$tampil3 = mysqli_query($kon, "select * from mahasiswa,pkl where mahasiswa.kd_pkl = pkl.kd_pkl and mahasiswa.nobp <> '$data2[nobp]' and pkl.kd_pkl = '$data[kd_pkl]'") or die (error);
$data3 = mysqli_fetch_array($tampil3);
?>

<div class="row">
	<div class="col-lg-12">
		<p><h3 align="center">Pengajuan Judul</h3></p><br>
		<div class="table-responsive">
			<table class="table table-bordered">
				<tr>
					<td width="15%"><strong>Nobp</strong></td>
					<td width="1%"><strong>:</strong></td>
					<td width="34%"><strong><?php echo $data2['nobp'];?></strong></td>
					<td width="50%"><strong><?php echo $data3['nobp'];?></strong></td>
				</tr>
				<tr>
					<td><strong>Nama</strong></td>
					<td><strong>:</strong></td>
					<td><strong><?php echo $data2['nama'];?></strong></td>
					<td><strong><?php echo $data3['nama'];?></strong></td>
				</tr>
			</table>
			<br>


			<table class="table" border="0">
				<tr>
					<td width="15%"><strong>Judul</strong></td>
					<td width="1%"><strong>:</strong></td>
					<td width="84%"><?php echo $data['judul_pkl'];?></td>
				</tr>
				<tr>
					<td><strong>Tema</strong></td>
					<td><strong>:</strong></td>
					<td><?php echo $data['tema_pkl'];?></td>
				</tr>
				<tr>
					<td><strong>Objek</strong></td>
					<td><strong>:</strong></td>
					<td><?php echo $data['objek_pkl'];?></td>
				</tr>
				<tr>
					<td><strong>Latar Belakang</strong></td>
					<td><strong>:</strong></td>
					<td><?php echo $data['latarbelakang_pkl'];?></td>
				</tr>
				<tr>
					<td><strong>Judul Ke</strong></td>
					<td><strong>:</strong></td>
					<td><?php echo $data['judul_ke'];?></td>
				</tr>
				<tr>
					<?php
					$lihat = mysqli_query($kon, "select * from pkl where status = 'ACC' and kd_pkl = '$data[kd_pkl]'");
					if(mysqli_num_rows($lihat) > 0){ ?>

					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>
						<p><?php echo "<i><b>Judul Dengan Kode PKL Yang Sama Sudah Diterima . . . .!!!</b></i>";?></p>
						<a href="?p=pkl_detail&terima&id=<?php echo $data['id'];?>" class="btn btn-primary btn-sm" hidden>Terima</a>
						<a href="?p=pkl_detail&tolak&id=<?php echo $data['id'];?>" class="btn btn-danger btn-sm">Tolak</a>
						<a href="?p=pkl_detail&perbaiki&id=<?php echo $data['id'];?>" class="btn btn-success btn-sm" hidden>Perbaiki</a>
					</td>

					<?php }else{ ?>

					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td><a href="?p=pkl_detail&terima&id=<?php echo $data['id'];?>" class="btn btn-primary btn-sm">Terima</a>
						<a href="?p=pkl_detail&tolak&id=<?php echo $data['id'];?>" class="btn btn-danger btn-sm">Tolak</a>
						<a href="?p=pkl_detail&perbaiki&id=<?php echo $data['id'];?>" class="btn btn-success btn-sm">Perbaiki</a>
					</td>

					<?php } ?>
				</tr>
			</table>
		</div>
	</div>
</div>


<?php
if(isset($_GET['perbaiki'])){ ?>
	<form method="post" action="">
		<div class="form-group">
			<div class="col-lg-6">
				<label for="ket"><strong>Komentar</strong></label>
				<textarea name="ket" class="form-control" rows="5" placeholder="Komentar tentang Perbaikan Judul. . . . . "></textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="col-lg-6">
				<input type="submit" name="kirim" value="Kirim & Perbaiki" class="btn btn-success btn-sm">
			</div>
		</div>
	</form>

<?php 
	if($_POST['kirim']){
		$sqlp = mysqli_query($kon, "update pkl set tgl_diperiksa = NOW(),status = 'PERBAIKI',ket = '$_POST[ket]' where id = '$_GET[id]'");

		if($sqlp){
			echo "<script>alert('Berhasil');window.location.href='?p=pkl_diajukan';</script>";
		}else{
			echo "<script>alert('Gagal');window.location.href='?p=pkl_diajukan';</script>";
		}
	}
} 


if(isset($_GET['terima'])){
	$ketterima = "Selamat Judul Anda Telah Diterima Silahkan Cetak Judul Diterima Untuk Mengambil Surat Pengambilan Data . . . . !!!";

	$sqlte = mysqli_query($kon, "update pkl set tgl_diperiksa = NOW(),status = 'ACC',ket = '$ketterima' where id = '$_GET[id]'");

	if($sqlte){
			echo "<script>alert('Berhasil');window.location.href='?p=pkl_diajukan';</script>";
	}else{
			echo "<script>alert('Gagal');window.location.href='?p=pkl_diajukan';</script>";
	}
}

if(isset($_GET['tolak'])){
	$kettolak = "Maaf Judul Anda Ditolak Silahkan Cari Judul Lain Untuk Pengajuan Judul berikutnya . . . . !!!";

	$sqlto = mysqli_query($kon, "update pkl set tgl_diperiksa = NOW(),status = 'TOLAK',ket = '$kettolak' where id = '$_GET[id]'");

	if($sqlto){
			echo "<script>alert('Berhasil');window.location.href='?p=pkl_diajukan';</script>";
	}else{
			echo "<script>alert('Gagal');window.location.href='?p=pkl_diajukan';</script>";
	}
}

?>
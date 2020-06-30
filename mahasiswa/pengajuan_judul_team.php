<?php
include 'koneksi.php';
// mengambil data mahasiswa dari table mahasiswa berdasarkan nobp
$tampil = mysqli_query($kon, "select * from mahasiswa where nobp = '$_SESSION[nobp]'");
$data = mysqli_fetch_array($tampil);

// menghitung jumlah kode pkl yang sama pada tabel mahasiswa
$hitung = mysqli_query($kon, "select count(kd_pkl) as kdpkl from mahasiswa where kd_pkl = '$data[kd_pkl]'");
$hasil = mysqli_fetch_array($hitung);

if($hasil['kdpkl'] == 1){
	include 'mahasiswa_register_team.php';
}else{


$tampil2 = mysqli_query($kon, "select * from mahasiswa where kd_pkl = '$data[kd_pkl]' and nobp <> '$_SESSION[nobp]' and status='$data[status]'");
$data2 = mysqli_fetch_array($tampil2);

if(mysqli_num_rows($tampil2) == 0){
	echo "<h5><u><i>menunggu validasi dari Dosen . . . . !!!</i></u></h5>";
}else{


$lihat = mysqli_query($kon, "select * from pkl where status = 'acc' and kd_pkl = '$data[kd_pkl]'");

// menghitung jumlah kode pkl yang sama yang terdapat pada table pkl
$hitung2 = mysqli_query($kon, "select count(kd_pkl) as kdpkl from pkl where kd_pkl = '$data[kd_pkl]'");
$hasil2 = mysqli_fetch_array($hitung2);

if($hasil2['kdpkl'] == 0){
	$judul = "Pertama";
	$jdl = 1;
}else if($hasil2['kdpkl'] == 1){
	$judul = "Kedua";
	$jdl = 2;
}else if($hasil2['kdpkl'] == 2){
	$judul = "Ketiga";
	$jdl = 3;
}

if(mysqli_num_rows($lihat) > 0){
	echo "<h5><u><i>Maaf anda tidak dapat mengakses halaman ini karena judul ada telah di ACC silahkan cetak judul ACC . . . . !!!</i></u></h5>";
}else

// jika mahasiswa sudah melakukuan penajuan judul sebanyak tiga kali maka mahasiswa tidak diperbolehkan mengajukan judul kembali
if($hasil2['kdpkl'] == 3){
	echo "<h5><u><i>Maaf anda tidak dapat mengakses halaman ini karena anda telah melakukan 3 kali pengajuan judul . . . . !!!</i></u></h5>";
}else{


?>
<div class="row">
	<div class="col-lg-12">
		<div class="page-header"><h2 align="center">PENGAJUAN JUDUL</h2></div>
			<p><small><u><i>Pengajuan Judul <?php echo $judul;?></i></u></small></p>
			<form method="post" action="" enctype="multipart/form-data">
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="nobp"><strong>NOBP</strong></label>
							<input type="text" name="#" class="form-control" value="<?php echo $data['nobp'];?>" readonly>
						</div>
					</div>
					<div class="col-lg-6">	
						<div class="form-group">
							<label for="nobp"><strong>NAMA</strong></label>
							<input type="text" name="#" class="form-control" value="<?php echo $data['nama'];?>" readonly>
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="nobp"><strong>NOBP</strong></label>
							<input type="text" name="#" class="form-control" value="<?php echo $data2['nobp'];?>" readonly>
						</div>
					</div>
					<div class="col-lg-6">	
						<div class="form-group">
							<label for="nobp"><strong>NAMA</strong></label>
							<input type="text" name="#" class="form-control" value="<?php echo $data2['nama'];?>" readonly>
						</div>
					</div>	
				</div>
				<div class="form-group">
					<input type="text" name="kd_pkl" class="form-control" value="<?php echo $data['kd_pkl'];?>" hidden>
				</div>	
				<div class="form-group">
					<label for="judul_pkl">Judul</label>
					<textarea name="judul_pkl" class="form-control" required></textarea>
				</div>
				<div class="form-group">
					<label for="tema_pkl">Tema</label>
					<textarea name="tema_pkl" class="form-control" required></textarea>
				</div>
				<div class="form-group">
					<label for="objek_pkl">Objek</label>
					<textarea name="objek_pkl" class="form-control" required></textarea>
				</div>
				<div class="form-group">
					<label for="latarbelakang_pkl">Latar Belakang</label>
					<textarea name="latarbelakang_pkl" class="form-control" rows="8" required></textarea>
				</div>
				<div class="form-group">
					<input type="text" name="judul_ke" class="form-control" value="<?php echo $jdl;?>" hidden>
				</div>
				<div class="form-group">
					<input type="submit" name="ajukan" value="AJUKAN" class="btn btn-info btn-block">
				</div>									
			</form>
	</div>
</div>

<?php
if(isset($_POST['ajukan'])){
	$latarbelakang_pkl = nl2br($_POST['latarbelakang_pkl']);
	$simpan = mysqli_query($kon, "insert into pkl(kd_pkl,judul_pkl,tema_pkl,objek_pkl,latarbelakang_pkl,judul_ke,tgl_diajukan,status,ket)value('$_POST[kd_pkl]','$_POST[judul_pkl]','$_POST[tema_pkl]','$_POST[objek_pkl]','$latarbelakang_pkl','$_POST[judul_ke]',NOW(),'-','-')");

	if($simpan){
		echo "<script>alert('Berhasil Diajukan');window.location.href='?p=pengajuan_judul_team';</script>";
	}else{
		echo "<script>alert('Gagal Megajukan');window.location.href='?p=pengajuan_judul_team';</script>";
	}	
  }

}
}
}
?>
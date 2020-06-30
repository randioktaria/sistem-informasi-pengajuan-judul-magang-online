<?php
include 'koneksi.php';
$tampil = mysqli_query($kon, "select * from mahasiswa where status = '-'");
?>

<div class="row">
	<div class="col-lg-12">
		<p>
			<h2 align="center">MAHASISWA <br> YANG MELAKUKAN REGISTRASI</h2>
		</p><br>
		<div class="table-responsive">
			<table class="table table-bordered"> 
				<thead>
					<tr>
					<th>No</th>
					<th>Nobp</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Semester</th>
					<th>Jumlah SKS</th>
					<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no = 1 ;
					while($data = mysqli_fetch_array($tampil)):
					?>
					<tr>
					<td><?php echo $no++;?></td>
					<td><?php echo $data['nobp'];?></td>
					<td><?php echo $data['nama'];?></td>
					<td><?php echo $data['jns_kelamin'];?></td>
					<td><?php echo $data['semester'];?></td>
					<td><?php echo $data['jml_sks'];?></td>
					<td><a href="?p=validasimhs&valid&nobp=<?php echo $data['nobp'];?>" class="btn btn-primary btn-sm">Validasi</a>
						<a href="?p=validasimhs&tolak&nobp=<?php echo $data['nobp'];?>" class="btn btn-danger btn-sm">Tolak</a>
					</td>
					</tr>
				<?php endwhile ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php
$nobp = @$_GET['nobp'];
if(isset($_GET['valid'])){
	$query = mysqli_query($kon, "select max(kd_pkl) as maxkode from mahasiswa");
	$data = mysqli_fetch_array($query);
	$kd_pkl = $data["maxkode"];

	$nourut = (int) substr($kd_pkl,3,3);
	$nourut++;

	$char = "PKL";
	$new_kd = $char . sprintf("%03s", $nourut);

	$cek = mysqli_query($kon, "select kd_pkl from mahasiswa where nobp = $nobp");
	$row = mysqli_fetch_array($cek);

	if($row['kd_pkl'] == ''){
		$kd_pkl = $new_kd;
	}else{
		$kd_pkl = $row['kd_pkl'];
	}

	$sql = mysqli_query($kon, "update mahasiswa set status = 'valid',kd_pkl='$kd_pkl' where nobp = $nobp");
	
}

if(isset($_GET['tolak'])){
	$sql = mysqli_query($kon, "delete from mahasiswa where nobp = '$nobp'");
	if($sql){
		echo "<script>alert('Mahasiswa Berhasil Ditolak');window.location.href='?p=validasimhs';</script>";
	}
}
?>
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
			</table>
		</div>
	</div>
</div>
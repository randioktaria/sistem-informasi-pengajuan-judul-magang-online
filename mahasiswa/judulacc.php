<?php
include 'koneksi.php';
$cek = mysqli_query($kon, "select * from mahasiswa where nobp = '$_SESSION[nobp]'");
$lihat = mysqli_fetch_array($cek);

$tampil = mysqli_query($kon, "select * from pkl where status='ACC' and kd_pkl = '$lihat[kd_pkl]'");
$data = mysqli_fetch_array($tampil);

if(mysqli_num_rows($tampil) == 0){
	echo "<h5><u><i>Halaman Belum Bisa Diakses . . . . !!!</i></u></h5>";
}else{

$tampiltem = mysqli_query($kon, "select * from mahasiswa where kd_pkl = '$lihat[kd_pkl]' and nobp <> '$_SESSION[nobp]'");
$datatem = mysqli_fetch_array($tampiltem);
?>
<div class="row">
	<div class="col-lg-12">
		<p>
			<strong><h4 align="center">BUKTI JUDUL ACC</h4></strong>
		</p>
		<p>
			<a href="cetakjudulacc.php?id=<?php echo $data['id'];?>" target="_blank"><button class="btn btn-info btn-sm"><i class="fa fa-print fa-fw"></i> Cetak</button></a>
		</p>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<td width="15%" bgcolor="#acacac"><strong>NOBP</strong></td>
						<td width="1%"  bgcolor="#acacac"><strong>:</strong></td>
						<td width="34%" bgcolor="#acacac"><strong><?php echo $lihat['nobp'];?></strong></td>
						<td width="50%" bgcolor="#acacac"><strong><?php echo $datatem['nobp'];?></strong></td>
					</tr>
					<tr>
						<td bgcolor="#acacac"><strong>NAMA</strong></td>
						<td bgcolor="#acacac"><strong>:</strong></td>
						<td bgcolor="#acacac"><strong><?php echo $lihat['nama'];?></strong></td>
						<td bgcolor="#acacac"><strong><?php echo $datatem['nama'];?></strong></td>
					</tr>
				</table>
			</div>

					<br>

					<p>
						<big><strong>JUDUL</strong></big><br>
						<?php echo $data['judul_pkl'];?>
					</p>
					<p>
						<big><strong>TEMA</strong></big><br>
						<?php echo $data['tema_pkl'];?>
					</p>
					<p>
						<big><strong>OBJEK</strong></big><br>
						<?php echo $data['objek_pkl'];?>
					</p>
					<p>
						<big><strong>TANGGAL DIAJUKAN</strong></big><br>
						<?php echo $data['tgl_diajukan'];?>
					</p>
					<p>
						<big><strong>TANGGAL DIPERIKSA</strong></big><br>
						<?php echo $data['tgl_diperiksa'];?>
					</p>
					<p>
						<big><strong>KETERANGAN</strong></big><br>
						<?php echo $data['status'];?>
					</p>
				<?php } ?>
	</div>
</div>

			
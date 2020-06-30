<!-- Riwayat Judul Pertama -->
<?php
include 'koneksi.php';
$cek = mysqli_query($kon, "select * from mahasiswa where nobp = '$_SESSION[nobp]'");
$lihat = mysqli_fetch_array($cek);

$tampil = mysqli_query($kon, "select * from pkl where judul_ke=1 and kd_pkl = '$lihat[kd_pkl]'");
$data = mysqli_fetch_array($tampil);
?>
<div class=row>
	<div class=col-lg-12>
		<div class=card mb-3>
			<div class=card-header><strong>RIWAYAT JUDUL PERTAMA</strong></div>
				<div class=card-body>
					<?php
					if(mysqli_num_rows($tampil) == 0){
						echo "<u><b><i>Judul Belum Diajukan</i></b></u>";
					}else{

					$tampiltem = mysqli_query($kon, "select * from mahasiswa where kd_pkl = '$lihat[kd_pkl]' and nobp <> '$_SESSION[nobp]'");
					$datatem = mysqli_fetch_array($tampiltem);


					if($data['status'] == '-'){
						$status = "Belum Diperiksa";
					}else{
						$status =  $data['status'];
					}

					if($data['ket'] == '-'){
						$ket = "";
					}else{
						$ket = $data['ket'];
					}
					?>
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
						<b>( <?php echo $status;?> )</b> <u><?php echo $ket;?></u>
					</p>
				<?php } ?>
				</div>
		</div>
	</div>
</div>		

<br>

<!-- Riwayat Judul Kedua -->
<?php
$tampil2 = mysqli_query($kon, "select * from pkl where judul_ke=2 and kd_pkl = '$lihat[kd_pkl]'");
$data2 = mysqli_fetch_array($tampil2);
?>
<div class=row>
	<div class=col-lg-12>
		<div class=card mb-3>
			<div class=card-header><strong>RIWAYAT JUDUL KEDUA</strong></div>
				<div class=card-body>
					<?php
						if(mysqli_num_rows($tampil2) == 0){
							echo "<u><b><i>Judul Belum Diajukan</i></b></u>";
						}else{

						$tampiltem2 = mysqli_query($kon, "select * from mahasiswa where kd_pkl = '$lihat[kd_pkl]' and nobp <> '$_SESSION[nobp]'");
						$datatem2 = mysqli_fetch_array($tampiltem2);


						if($data2['status'] == '-'){
							$status = "Belum Diperiksa";
						}else{
							$status =  $data2['status'];
						}

						if($data2['ket'] == '-'){
							$ket = "";
						}else{
							$ket = $data2['ket'];
						}
					?>
					<div class="table-responsive">
						<table class="table table-bordered">
							<tr>
								<td width="15%" bgcolor="#acacac"><strong>NOBP</strong></td>
								<td width="1%"  bgcolor="#acacac"><strong>:</strong></td>
								<td width="34%" bgcolor="#acacac"><strong><?php echo $lihat['nobp'];?></strong></td>
								<td width="50%" bgcolor="#acacac"><strong><?php echo $datatem2['nobp'];?></strong></td>
							</tr>
							<tr>
								<td bgcolor="#acacac"><strong>NAMA</strong></td>
								<td bgcolor="#acacac"><strong>:</strong></td>
								<td bgcolor="#acacac"><strong><?php echo $lihat['nama'];?></strong></td>
								<td bgcolor="#acacac"><strong><?php echo $datatem2['nama'];?></strong></td>
							</tr>
						</table>
					</div>
					<br>

					<p>
						<big><strong>JUDUL</strong></big><br>
						<?php echo $data2['judul_pkl'];?>
					</p>
					<p>
						<big><strong>TEMA</strong></big><br>
						<?php echo $data2['tema_pkl'];?>
					</p>
					<p>
						<big><strong>OBJEK</strong></big><br>
						<?php echo $data2['objek_pkl'];?>
					</p>
					<p>
						<big><strong>TANGGAL DIAJUKAN</strong></big><br>
						<?php echo $data2['tgl_diajukan'];?>
					</p>
					<p>
						<big><strong>TANGGAL DIPERIKSA</strong></big><br>
						<?php echo $data2['tgl_diperiksa'];?>
					</p>
					<p>
						<big><strong>KETERANGAN</strong></big><br>
						<b>( <?php echo $status;?> )</b> <u><?php echo $ket;?></u>
					</p>

				<?php } ?>

				</div>
		</div>
	</div>
</div>	

<br>	

<!-- Riwayat Judul Ketiga -->
<?php
$tampil3 = mysqli_query($kon, "select * from pkl where judul_ke=3 and kd_pkl = '$lihat[kd_pkl]'");
$data3 = mysqli_fetch_array($tampil3);
?>
<div class=row>
	<div class=col-lg-12>
		<div class=card mb-3>
			<div class=card-header><strong>RIWAYAT JUDUL KEDUA</strong></div>
				<div class=card-body>

					<?php
						if(mysqli_num_rows($tampil3) == 0){
							echo "<u><b><i>Judul Belum Diajukan</i></b></u>";
						}else{

						$tampiltem3 = mysqli_query($kon, "select * from mahasiswa where kd_pkl = '$lihat[kd_pkl]' and nobp <> '$_SESSION[nobp]'");
						$datatem3 = mysqli_fetch_array($tampiltem3);


						if($data3['status'] == '-'){
							$status = "Belum Diperiksa";
						}else{
							$status =  $data3['status'];
						}

						if($data3['ket'] == '-'){
							$ket = "";
						}else{
							$ket = $data3['ket'];
						}
					?>

					<div class="table-responsive">
						<table class="table table-bordered">
							<tr>
								<td width="15%" bgcolor="#acacac"><strong>NOBP</strong></td>
								<td width="1%"  bgcolor="#acacac"><strong>:</strong></td>
								<td width="34%" bgcolor="#acacac"><strong><?php echo $lihat['nobp'];?></strong></td>
								<td width="50%" bgcolor="#acacac"><strong><?php echo $datatem3['nobp'];?></strong></td>
							</tr>
							<tr>
								<td bgcolor="#acacac"><strong>NAMA</strong></td>
								<td bgcolor="#acacac"><strong>:</strong></td>
								<td bgcolor="#acacac"><strong><?php echo $lihat['nama'];?></strong></td>
								<td bgcolor="#acacac"><strong><?php echo $datatem3['nama'];?></strong></td>
							</tr>
						</table>
					</div>
					<br>

					<p>
						<big><strong>JUDUL</strong></big><br>
						<?php echo $data3['judul_pkl'];?>
					</p>
					<p>
						<big><strong>TEMA</strong></big><br>
						<?php echo $data3['tema_pkl'];?>
					</p>
					<p>
						<big><strong>OBJEK</strong></big><br>
						<?php echo $data3['objek_pkl'];?>
					</p>
					<p>
						<big><strong>TANGGAL DIAJUKAN</strong></big><br>
						<?php echo $data3['tgl_diajukan'];?>
					</p>
					<p>
						<big><strong>TANGGAL DIPERIKSA</strong></big><br>
						<?php echo $data3['tgl_diperiksa'];?>
					</p>
					<p>
						<big><strong>KETERANGAN</strong></big><br>
						<b>( <?php echo $status;?> )</b> <?php echo $ket;?>
					</p>

					<?php } ?>

				</div>
		</div>
	</div>
</div>		

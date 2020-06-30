<html>
<head>
	<title>SISTEM INFORMASI AKADEMIK</title>
	  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<?php
include 'koneksi.php';
$tampil = mysqli_query($kon, "select * from pkl,mahasiswa where pkl.kd_pkl = mahasiswa.kd_pkl and pkl.id = '$_GET[id]'");
$data = mysqli_fetch_array($tampil);

$tampil2 = mysqli_query($kon, "select * from pkl,mahasiswa where pkl.kd_pkl = mahasiswa.kd_pkl and mahasiswa.nobp <> '$data[nobp]' and pkl.id = '$_GET[id]'");
$data2 = mysqli_fetch_array($tampil2);
?>
<body onload="window.print();window.closeoff()">
<div class="container"><br>
	<div class="row">
		<div class="col-lg-12">
			<div class="container-fluid">
				<div class="card mb-3">
					<div class="card-body">
						<p><strong><h4 align="center">BUKTI JUDUL ACC</h4></strong></p><hr>
							<div class="table-responsive">
								<table class="table table-bordered">
									<tr>
										<td width="15%" bgcolor="#acacac"><strong>NOBP</strong></td>
										<td width="1%"  bgcolor="#acacac"><strong>:</strong></td>
										<td width="34%" bgcolor="#acacac"><strong><?php echo $data['nobp'];?></strong></td>
										<td width="50%" bgcolor="#acacac"><strong><?php echo $data2['nobp'];?></strong></td>
									</tr>
									<tr>
										<td bgcolor="#acacac"><strong>NAMA</strong></td>
										<td bgcolor="#acacac"><strong>:</strong></td>
										<td bgcolor="#acacac"><strong><?php echo $data['nama'];?></strong></td>
										<td bgcolor="#acacac"><strong><?php echo $data2['nama'];?></strong></td>
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
							<big><strong>TANGGAL ACC</strong></big><br>
							<?php echo $data['tgl_diperiksa'];?>
						</p>
						<p>
							<big><strong>KETERANGAN</strong></big><br>
							ACC
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
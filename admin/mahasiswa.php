<div class="row">
	<div class="col-lg-12">
		<div class="page-header"><h1 align="center">Data Mahasiswa</h1></div>
	</div>
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Nobp</th>
									<th>Nama</th>
									<th>Jenis Kelamin</th>
									<th>Semester</th>
									<th>Foto</th>
									<th>Aksi</th>
								</tr>
							</thead>
                    
							<tbody>
								<?php 
									include "koneksi.php";
									$tampil = mysqli_query($kon, "SELECT * FROM mahasiswa WHERE status = 'valid'");
									while($data = mysqli_fetch_array($tampil)){
										if($data['jns_kelamin'] == "L"){
											$jk = "Laki-Laki";
										}else if($data['jns_kelamin'] == "P"){
											$jk = "Perempuan";
										}

								if(empty($data['foto']) && $data['jns_kelamin'] == "L"){
									$foto = "<img class='img-fluid img-profile rounded-circle mx-auto mb-2' src='../img/avatar/mhsl.jpg' width='80px'>"; 
								}else if(empty($data['foto']) && $data['jns_kelamin'] == "P"){
									$foto = "<img class='img-fluid img-profile rounded-circle mx-auto mb-2' src='../img/avatar/mhsp.png' width='80px'>"; 
								}else{
									$foto = "<img class='img-fluid img-profile rounded-circle mx-auto mb-2' src='../img/dosen/$data[foto]' width='80px'>"; 
								}
								?>
								<tr>
									<td><?php echo $data['nobp'];?></td>
									<td><?php echo $data['nama'];?></td>
									<td><?php echo $jk;?></td>
									<td><?php echo $data['semester'];?></td>
									<td><?php echo $foto; ?></td>
									<td>
										<a onclick="return confirm('Data Akan Dihapus !!!')" class="btn btn-danger btn-sm"  href="?p=mahasiswa&hapus&nobp=<?php echo $data['nobp'];?>">hapus</a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>				 
</div>

<?php
/* menghapus data mahasiswa berdasarkan nobp*/
if(isset($_GET['hapus'])){
	$hapus = mysqli_query($kon, "DELETE FROM mahasiswa WHERE nobp = '$_GET[nobp]'");

	if ($hapus) {
		echo "<script>window.location.href='?p=mahasiswa';</script>";
	}else{
		echo "<script>alert('Data Gagal Dihapus');window.location.href='?p=mahasiswa';</script>";
	}
} 
?>
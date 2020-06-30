<?php
include 'koneksi.php';
$tampil = mysqli_query($kon, "select * from pkl where status = '-' order by kd_pkl") or die(error);
?>

<div class="row">
	<div class="col-lg-12">
		<div class="page-header">
			<p><h2 align="center">PENGAJUAN JUDUL PKL MAHASISWA</h2></p><br>
		</div>
	</div>	
		<div class="table-responsive">
		<table class="table table-bordered" id=dataTable cellspacing="0">
			<thead>		
				<tr>
					<th>No</th>
					<th>Kode</th>
					<th>Judul</th>
					<th>Tema</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				while($data = mysqli_fetch_array($tampil)):?>
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $data['kd_pkl'];?></td>
						<td><?php echo $data['judul_pkl'];?></td>
						<td><?php echo $data['tema_pkl'];?></td>
						<td><a href="?p=pkl_detail&id=<?php echo $data['id']?>" class="btn btn-info btn-sm">Detail</a></td>
					</tr>

			<?php endwhile?>
			</tbody>
		</table>
	</div>
</div>
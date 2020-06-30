<div class="row">
	<div class="col-lg-12">
		<div class="page-header"><h1 align="center">Data Pengumuman</h1>
			<p><a class="btn btn-primary" href="?p=pengumumanadd"><i class="fa fa-plus"></i> Tambah Pengumuman</a></p>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Pengumuman</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					include 'koneksi.php';
					$tampil = mysqli_query($kon, "SELECT * FROM pengumuman");
					while($data = mysqli_fetch_array($tampil)){?>
						<tr>
							<td><?php echo $no++;?></td>
							<td><b><big><?php echo $data['judul_pengumuman'];?></big></b>
								<br><?php echo $data['isi_pengumuman'];?></td>
							<td>
								<a href="?p=pengumumanedit&kd_pengumuman=<?php echo $data['kd_pengumuman'];?>" class="btn btn-success btn-sm">edit</a>
								<a onclick="return confirm('Data Akan dihapus !!!')" href="?p=pengumuman&hapus&kd_pengumuman=<?php echo $data['kd_pengumuman'];?>" class="btn btn-danger btn-sm">hapus</a>
							</td>
						</tr>

					<?php } ?>
					
				</tbody>
			</table>
	</div>
</div>

<?php
if(isset($_GET['hapus'])){
	$hapus = mysqli_query($kon, "DELETE FROM pengumuman WHERE kd_pengumuman = '$_GET[kd_pengumuman]'");

	if(!$hapus){
		echo "<script>alert('Data Gagal dihapus);window.location.href='?p=pengumuman';</script>";
	}else{
		echo "<script>window.location.href='?p=pengumuman';</script>";
	}
} 
?>
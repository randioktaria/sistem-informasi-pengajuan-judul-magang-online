<div class="row">
	<div class="col-lg-12">
		<div class="page-header"><h1 align="center">Data Berita</h1>
			<p><a class="btn btn-primary" href="?p=beritaadd"><i class="fa fa-plus"></i> Tambah Berita</a></p>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Foto</th>
						<th>Berita</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					include 'koneksi.php';
					$tampil = mysqli_query($kon, "SELECT * FROM berita");
					while($data = mysqli_fetch_array($tampil)){?>
						<tr>
							<td><?php echo $no++;?></td>
							<td><img src="../img/berita/<?php echo $data['foto_berita'];?>" width="200px"></td>
							<td><b><big><?php echo $data['judul_berita'];?></big></b><br>
								<small><?php echo $data['tgl_post'];?></small><br>
								<?php echo $data['kepala_berita'];?></td>
							<td>
								<a href="?p=beritaedit&kd_berita=<?php echo $data['kd_berita'];?>" class="btn btn-success btn-sm">edit</a>
								<a onclick="return confirm('Data Akan dihapus !!!')" href="?p=berita&hapus&kd_berita=<?php echo $data['kd_berita'];?>" class="btn btn-danger btn-sm">hapus</a>
							</td>
						</tr>

					<?php } ?>
					
				</tbody>
			</table>
	</div>
</div>

<?php
if(isset($_GET['hapus'])){
	$hapus = mysqli_query($kon, "DELETE FROM berita WHERE kd_berita = '$_GET[kd_berita]'");

	if(!$hapus){
		echo "<script>alert('Data Gagal dihapus);window.location.href='?p=berita';</script>";
	}else{
		echo "<script>window.location.href='?p=berita';</script>";
	}
} 
?>
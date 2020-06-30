<?php
include 'koneksi.php';
$tampil = mysqli_query($kon, "select * from pkl where status = 'tolak'");
?>
<div class="row">
	<div class="col-lg-12">
		<p><h2 align="center">JUDUL PKL YANG DITOLAK</h2></p><p></div>
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
							<td><a href="?p=dtl&id=<?php echo $data['id'];?>" class="btn btn-info btn-sm">Detail</a>
								<a onclick="return confirm('Data Akan Dihapus')" href="?p=pkl_ditolak&hapus&id=<?php echo $data['id'];?>" class="btn btn-danger btn-sm">hapus</a></td>
						</tr>
					<?php endwhile ?>
					</tbody>	
				</table>
		</div>

</div>

<?php
if(isset($_GET['hapus'])){
	$hapus = mysqli_query($kon, "delete from pkl where id = '$_GET[id]'");

	if($hapus){
		echo "<script>alert('Berhasil');window.location.href='?p=pkl_ditolak'</script>";
	}else{
		echo "<script>alert('Gagal');window.location.href='?p=pkl_ditolak'</script>";
	}
}
?>
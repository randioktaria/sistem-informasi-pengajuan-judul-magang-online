<div class="row">
	<div class="col-lg-12">
    	<div class="page-header"><h1 align="center">Data Dosen</h1></div>
			<p><a class="btn btn-primary" href="?p=dosenadd"><i class="fa fa-plus"></i> Tambah Data Dosen</a></p></div>
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>Kode Dosen</th>
								<th>Nama Dosen</th>
								<th>Jenis Kelamin</th>
								<th>Foto</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							include "koneksi.php";
							$tampil = mysqli_query($kon, "SELECT * FROM dosen");
							while($data = mysqli_fetch_array($tampil)){
								if($data['jns_kelamin'] == "L"){
									$jk = "Laki-Laki";
								}elseif ($data['jns_kelamin'] == "P") {
									$jk = "Perempuan";
								}

								if(empty($data['foto']) && $data['jns_kelamin'] == "L"){
									$foto = "<img class='img-fluid img-profile rounded-circle mx-auto mb-2' src='../img/avatar/dosenl.png' width='80px'>"; 
								}else if(empty($data['foto']) && $data['jns_kelamin'] == "P"){
									$foto = "<img class='img-fluid img-profile rounded-circle mx-auto mb-2' src='../img/avatar/dosenp.jpeg' width='80px'>"; 
								}else{
									$foto = "<img class='img-fluid img-profile rounded-circle mx-auto mb-2' src='../img/dosen/$data[foto]' width='80px'>"; 
								}

							?>
							<tr>
								<td><?php echo $data['kd_dosen'];?></td>
								<td><?php echo $data['nm_dosen'];?></td>
								<td><?php echo $jk;?></td>
								<td><?php echo "$foto";?></td>
								<td><a class="btn btn-success btn-sm" href="?p=dosenedit&kd_dosen=<?php echo $data['kd_dosen'];?>">edit</a>
									<a onclick = "return confirm('Data Akan dihapus !!!') " class="btn btn-danger btn-sm" href="?p=dosen&hapus&kd_dosen=<?php echo $data['kd_dosen'];?>">hapus</a></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>


</div> 

<?php
/* menghapus data dosen berdasarkan kode dosen */
if(isset($_GET['hapus'])){
	$hapus = mysqli_query($kon, "DELETE FROM dosen WHERE kd_dosen = '$_GET[kd_dosen]'");
	if($hapus){
		echo "<script>window.location.href='?p=dosen';</script>";
	}else{
		echo "<script>alert('Data Gagal dihapus');window.location.href='?p=dosen'</script>";
	}
}

 ?> 
<div class="card mb-4">
	<div class="card-body">
		<p><h3 align="center">Daftar Mahasiswa Yang Sudah Bisa Login</h3></p>
		<br>
		<div class="table-responsive">
			<table class="table table-bordered" cellspacing="0" id="dataTable">
				<thead>
					<tr>
					<th>No</th>
					<th>Nobp</th>
					<th>Nama</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					include 'koneksi.php';
					$tampil = mysqli_query($kon, "select nobp,nama from Mahasiswa where status = 'valid'");
					while($data = mysqli_fetch_array($tampil)){?>
						<tr>
						 <td><?php echo $no++;?></td>
						 <td><?php echo $data['nobp'];?></td>
						 <td><?php echo $data['nama'];?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
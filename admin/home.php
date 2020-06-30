<div class="row">
	<div class="col-lg-8">
		<h3>SELAMAT DATANG DI HALAMAN ADMINISTRATOR</h3>
	</div>

		<div class="col-lg-2"></div>

	<div class="col-lg-2">
		<p><small>Developer By : Team</small></p>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<?php
			include "koneksi.php";
			$qry = mysqli_query($kon, "SELECT * FROM admin WHERE username='$_SESSION[username]'");
			$data = mysqli_fetch_array($qry);

			if(mysqli_num_rows($qry) > 0){
				echo "$data[nm_admin]";
			}else{
				echo "Data admin tidak ditemukan";
			}
		?>
	</div>
</div>

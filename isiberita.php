 <?php
include 'koneksi.php';
$tampil = mysqli_query($kon, "select * from berita where kd_berita = '$_GET[kd_berita]'");
while($data = mysqli_fetch_array($tampil)):?>
<div class="card mb-4">
  <img class="card-img-top" src="img/berita/<?php echo $data['foto_berita'];?>" alt="Card image cap">
    <div class="card-body">
      <h2 class="card-title"><?php echo $data['judul_berita'];?></h2>
        <p class="card-text"><?php echo $data['isi_berita'];?></p>
    </div>
    <div class="card-footer text-muted">
      <?php echo $data['tgl_post'];?>
    </div>
</div>
<?php endwhile ;?>
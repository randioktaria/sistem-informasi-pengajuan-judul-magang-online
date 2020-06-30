 <?php
include 'koneksi.php';
$tampil = mysqli_query($kon, "select * from berita");
while($data = mysqli_fetch_array($tampil)):?>
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title"><?php echo $data['judul_berita'];?></h4>
      <div class="row">
        <div class="col-md-6">
          <img class="card-img" src="img/berita/<?php echo $data['foto_berita'];?>" width="340px" alt="Card image cap">
        </div>
        <div class="col-md-6">
          <p><?php echo $data['kepala_berita'];?></p>
            <a href="?p=isiberita&kd_berita=<?php echo $data['kd_berita'];?>"><button class="btn btn-info">Baca Selengkapnya &rarr;</button></a>
        </div>
      </div>    
  </div>
  <div class="card-footer text-muted">
    <?php echo $data['tgl_post'];?>
  </div>
</div>
<?php endwhile ;?>

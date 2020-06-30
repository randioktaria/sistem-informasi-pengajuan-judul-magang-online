<!DOCTYPE html>
<html lang="en">

  <head>


    <title>SISTEM INFORMASI AKADEMIK</title>
     <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
    <link href="assets/css/blog-home.css" rel="stylesheet">
  	
  	<link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin.css" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="?p=berita">SISTEM INFORMASI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
       <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="?p=berita">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?p=berita">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?p=visimisi">Visi & Misi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?p=struktural">Struktural</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="nav-item">Login</span>
              </a>
                  <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">Login Sebagai</h6>
                      <div class="dropdown-divider"></div>
                       <a class="dropdown-item" href="mahasiswa/index.php" target="_blank"><i class="fa fa-users fa-fw"></i> Mahasiswa</a>
                      <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="dosen/index.php" target="_blank"><i class="fa fa-user fa-fw"></i> Dosen</a>
                  </div>
            </li>
          </ul>
        </div>
    </div>
  </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <div class="my-4"></div>

          <!-- Blog Post -->
         <?php include "tampil.php";?>

        </div>
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">



          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">kategori</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Pengumuman</a>
                    </li>
                    <li>
                      <a href="#">Info PKL</a>
                    </li>
                    <li>
                      <a href="#">Syarat Registrasi</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Area Download</a>
                    </li>
                  </ul>
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="?p=mhsvalid">Daftar Mahasiswa Yang Boleh Login</a>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
          </div>

          <div class="card my-4">
             <h5 class="card-header">Catatan</h5>
                <div class="card-body">
                   Mahasiswa yang boleh melakukan Registrasi dan Login hanya mahasiswa yang akan mengajukan judul praktek kerja lapangan (PKL) dan sudah memenuhi persyaratan !!! 
                </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <br><br>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Universitas Putra Indonesia YPTK Padang</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
     <script src="assets/vendor/jquery/jquery.min.js"></script>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>

    <script src="assets/vendor/datatables/jquery.dataTables.js"></script>

    <script src="assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="assets/js/sb-admin-datatables.min.js"></script>

    <script src="assets/js/sb-admin-charts.min.js"></script>

  </body>

</html>

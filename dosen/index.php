<?php
session_start();
if(empty($_SESSION["kd_dosen"]) && empty($_SESSION["password"])){
  header("location:dosen_login.php");
}else{
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>SISTEM INFORMASI AKADEMIK</title>
  <!-- Bootstrap core CSS-->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../assets/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="?p=home">SISTEM INFORMASI</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="?p=home">
            <i class="fa fa-home fa-fw"></i>
            <span class="nav-link-text">Home</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="?p=pkl_diajukan">
            <i class="fa fa-table fa-fw"></i>
            <span class="nav-link-text">Daftar Pengajuan</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="?p=pkl_diterima">
            <i class="fa fa-table fa-fw"></i>
            <span class="nav-link-text">Daftar Judul Diterima</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="?p=pkl_ditolak">
            <i class="fa fa-table fa-fw"></i>
            <span class="nav-link-text">Daftar Judul Ditolak</span>
          </a>
        </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="?p=validasimhs">
            <i class="fa fa-table fa-fw"></i>
            <span class="nav-link-text">Validasi Mahasiswa</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Pengaturan" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Pengaturan</span>
          </a>
          <ul class="sidenav-second-level collapse" id="Pengaturan">
            <li>
              <a href="?p=gantipassdosen"><i class="fa fa-edit fa-fw"></i> Ganti Password</a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
	  <li class="nav-item">
          <a class="nav-link" href="?p=profildosen">
            <i class="fa fa-fw fa-user"></i>Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dosen_logout.php">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
		  <div class="card mb-3">
			   <div class="card-body">
			<!-- ISI -->
				<?php include "tampil_dosen.php";?>

			   </div>
      </div>
    </div>
	
	<footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Universitas Putra Indonesia YPTK Padang</small>
        </div>
      </div>
    </footer>
	
	  <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-double-up"></i>
    </a>
	
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
	
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
       
     <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    
    <script src="../assets/vendor/chart.js/Chart.min.js"></script>
	
    <script src="../assets/vendor/datatables/jquery.dataTables.js"></script>
	
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    
    <script src="../assets/js/sb-admin.min.js"></script>
    
    <script src="../assets/js/sb-admin-datatables.min.js"></script>
	
    <script src="../assets/js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>

<?php } ?>
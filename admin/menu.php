<?php session_start();
if(empty($_SESSION["username"]) and empty($_SESSION["password"])){
  header("location:login.php");
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
          <a class="nav-link" href="?p=dosen">
            <i class="fa fa-user fa-fw"></i>
            <span class="nav-link-text">Dosen</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="?p=mahasiswa">
            <i class="fa fa-users fa-fw"></i>
            <span class="nav-link-text">Mahasiswa</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="?p=pengumuman">
            <i class="fa fa-comments fa-fw"></i>
            <span class="nav-link-text">Pengumuman</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="?p=berita">
            <i class="fa fa-globe fa-fw"></i>
            <span class="nav-link-text">Berita</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Pengaturan" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Pengaturan</span>
          </a>
          <ul class="sidenav-second-level collapse" id="Pengaturan">
            <li>
              <a href="?p=gantipassadm"><i class="fa fa-edit fa-fw"></i> Ganti Password</a>
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
          <a class="nav-link" href="?p=adminprofil">
            <i class="fa fa-fw fa-user"></i>Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">
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
				<?php include "tampil.php";?>

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
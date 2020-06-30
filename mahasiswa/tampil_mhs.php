<?php
$p = @$_GET['p'];

if($p == 'pengajuan_judul')
{
	include 'pengajuan_judul.php';
}
else if($p == 'riwayat_pengajuan')
{
	include 'riwayat_pengajuan.php';
}
else if($p == 'cetakjudulacc')
{
	include 'cetakjudulacc.php';
}
else if($p == 'judulacc')
{
	include 'judulacc.php';
}
else if($p == 'profilmahasiswa')
{
	include 'profilmahasiswa.php';
}
else if($p == 'gantipassmhs')
{
	include 'gantipassmhs.php';
}
else if($p == 'pengajuan_judul_team')
{
	include 'pengajuan_judul_team.php';
}
else
{
	include "home.php";
}


?>
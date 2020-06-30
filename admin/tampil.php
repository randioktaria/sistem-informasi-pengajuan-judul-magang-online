<?php
$p = @$_GET['p'];

if($p == 'jurusan')
{
	include "jurusan.php";
}
else if($p == 'jurusanadd')
{
	include "jurusanadd.php";
}
else if($p == 'mahasiswa')
{
	include "mahasiswa.php";
}
else if($p == 'mahasiswaadd')
{
	include "mahasiswaadd.php";
}
else if($p == 'mahasiswadetail')
{
	include "mahasiswadetail.php";
}
else if($p == 'mahasiswaedit')
{
	include "mahasiswaedit.php";
}
else if($p == "matakuliah")
{
	include "matakuliah.php";
}
else if($p == "matakuliahadd")
{
	include "matakuliahadd.php";
}
else if($p == "matakuliahedit")
{
	include "matakuliahedit.php";
}
else if($p == "matakuliahdetail")
{
	include "matakuliahdetail.php";
}
else if($p == "dosen")
{
	include "dosen.php";
}
else if($p == "dosenadd")
{
	include "dosenadd.php";
}
else if($p == "dosenedit")
{
	include "dosenedit.php";
}
else if ($p == "adminprofil")
{
	include "adminprofil.php";
}
else if($p == "berita")
{
	include "berita.php";
}
else if($p == "beritaadd")
{
	include "beritaadd.php";
}
else if($p == "beritaedit")
{
	include "beritaedit.php";
}
else if($p == "pengumumanadd")
{
	include "pengumumanadd.php";
}
else if($p == "pengumuman")
{
	include "pengumuman.php";
}
else if($p == "pengumumanedit")
{
	include "pengumumanedit.php";
}
else if($p == "gantipassadm")
{
	include 'gantipassadm.php';
}

else
{
	include "home.php";
}
?>
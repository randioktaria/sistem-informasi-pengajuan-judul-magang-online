<?php 
$p = @$_GET['p'];

if($p == "pkl_diajukan")
{
	include "pkl_diajukan.php";
}
else if($p == "pkl_detail")
{
	include "pkl_detail.php";
}
else if($p == "pkl_diterima")
{
	include 'pkl_diterima.php';
}
else if($p == "pkl_ditolak")
{
	include 'pkl_ditolak.php';
}
else if($p == 'profildosen')
{
	include 'profildosen.php';
}
else if($p == 'gantipassdosen')
{
	include 'gantipassdosen.php';
}
else if($p == 'validasimhs')
{
	include 'validasimhs.php';
}
else if($p == 'dtl')
{
	include 'dtl.php';
}
else
{
	include 'home.php';
}

?>
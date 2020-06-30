<?php
if(@$_GET["p"] == "visimisi"){
	include 'visimisi.php';
}else if(@$_GET["p"] == "isiberita"){
	include 'isiberita.php';
}else if(@$_GET["p"] == "struktural"){
	include 'struktural.php';
}else if(@$_GET["p"] == "mhsvalid"){
	include 'mhsvalid.php';
}
	
else{
	include 'berita.php';
}
?>
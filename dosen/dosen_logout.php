<?php
session_start();
session_destroy();
header("location:dosen_login.php");
?>
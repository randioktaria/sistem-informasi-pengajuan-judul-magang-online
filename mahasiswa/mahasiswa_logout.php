<?php
session_start();
session_destroy();
header("location:mahasiswa_login.php");
?>
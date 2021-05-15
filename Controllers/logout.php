<?php 
//session_unset('hoten');
//unset($_SESSION['hoten']);
session_destroy();
//echo $_SESSION['hoten'];
header("location: index.php");
 ?>
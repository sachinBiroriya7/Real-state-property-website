<?php
error_reporting(0);
session_start();
unset($_SESSION['ADMINID']);
header("Location:index.php")
?>
<?php
session_start();

$id = $_GET['sanpham'];

unset($_SESSION['giohang'][$id]);

header("location:giohang.php");
exit();
?>

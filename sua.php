<?php
session_start();

$id = $_GET['sanpham'];

$gia = $_POST['gia'];
if (empty($gia)) $gia = 0;
$soluong = $_POST['soluong'];
if (empty($soluong)) $soluong = 1;

$_SESSION['giohang'][$id]['gia'] = $gia;
$_SESSION['giohang'][$id]['soluong'] = $soluong;


header("location:giohang.php");
exit();
?>

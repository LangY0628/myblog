<?php
include'../../public/common/config.php';
session_start();
if(@!$_SESSION['userid']){
    echo "<script>location='../login.php'</script>";
    exit;
}

$id=$_GET['id'];
$img=$_GET['img'];
$file="../../public/uploads/img/{$img}";

$sql="delete from article where id={$id}";

$smt=$pdo->prepare($sql);

if($smt->execute()){
    unlink($file);

	echo "<script>location='index.php'</script>";
}
 ?>

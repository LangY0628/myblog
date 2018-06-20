<?php
include'../../public/common/config.php';
session_start();
if(@!$_SESSION['userid']){
    echo "<script>location='../login.php'</script>";
    exit;
}

$id=$_GET['id'];

$sql="delete from contentclass where id={$id}";

$smt=$pdo->prepare($sql);

if($smt->execute()){
	echo "<script>location='index.php'</script>";
}
 ?>

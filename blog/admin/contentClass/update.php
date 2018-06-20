<?php

include'../../public/common/config.php';
session_start();
if(@!$_SESSION['userid']){
    echo "<script>location='../login.php'</script>";
    exit;
}

$class_name=$_POST['class_name'];
$id=$_POST['id'];

$sql="update contentclass set class_name='{$class_name}' where id={$id}";

$smt=$pdo->prepare($sql);
if ($smt->execute()) {
	echo "<script>location='index.php'</script>";
}

 ?>
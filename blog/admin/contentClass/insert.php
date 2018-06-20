<?php
include'../../public/common/config.php';
session_start();
if(@!$_SESSION['userid']){
    echo "<script>location='../login.php'</script>";
    exit;
}
$class_name=$_POST['class_name'];
$sql="insert into contentclass(class_name) values('{$class_name}')";
$smt=$pdo->prepare($sql);
if ($smt->execute()) {
	echo "<script>location='index.php'</script>";
}
 ?>
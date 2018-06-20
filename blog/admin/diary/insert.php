<?php
include'../../public/common/config.php';
session_start();
if(@!$_SESSION['userid']){
    echo "<script>location='../login.php'</script>";
    exit;
}
$title=$_POST['title'];
$content=$_POST['content'];
$lableOne=$_POST['lableOne'];
$lableTwo=$_POST['lableTwo'];
$lableThree=$_POST['lableThree'];
$lableFour=$_POST['lableFour'];
$lableFive=$_POST['lableFive'];
$subtime=date("Y-m-d h:i:s");
$sql="insert into diary(title,content,lableOne,lableTwo,lableThree,lableFour,lableFive,subtime) values('{$title}','{$content}','{$lableOne}','{$lableTwo}','{$lableThree}','{$lableFour}','{$lableFive}','{$subtime}')";
$smt=$pdo->prepare($sql);
if ($smt->execute()) {
	echo "<script>location='index.php'</script>";
}
 ?>
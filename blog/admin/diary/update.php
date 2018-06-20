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
$id=$_POST['id'];

$sql="update diary set title='{$title}',content='{$content}',lableOne='{$lableOne}',lableTwo='{$lableTwo}',lableThree='{$lableThree}',lableFour='{$lableFour}',lableFive='{$lableFive}',subtime='{$subtime}' where id={$id}";

$smt=$pdo->prepare($sql);
if ($smt->execute()) {
	echo "<script>location='index.php'</script>";
}

 ?>
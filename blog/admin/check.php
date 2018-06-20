<?php
session_start();

include '../public/common/config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "select * from administrator where username='{$username}' and password='{$password}'";

$smt=$pdo->prepare($sql);
$smt->execute();
$row=$smt->fetch();


if($row){
    $_SESSION['username']=$username;
    $_SESSION['userid']=$row['id'];
    echo "<script>location='index.php'</script>";
}else{
    echo "<script>location='login.php'</script>";
}

?>
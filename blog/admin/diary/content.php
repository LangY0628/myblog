<?php
include'../../public/common/config.php';
session_start();
if(@!$_SESSION['userid']){
    echo "<script>location='../login.php'</script>";
    exit;
}
$id=$_GET['p1'];
$sql="select content from diary where id={$id}";
$smt=$pdo->prepare($sql);
$smt->execute();
$content=$smt->fetchColumn();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css" >

</head>
<body>
<div class="container">
    <div class="well">
        <?php echo "$content" ?>
    </div>
</div>
<script type="text/javascript" src="../../public/js/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="../../public/js/bootstrap.min.js"></script>
</body>
</html>

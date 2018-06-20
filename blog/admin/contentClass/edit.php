<?php
include'../../public/common/config.php';
session_start();
if(@!$_SESSION['userid']){
    echo "<script>location='../login.php'</script>";
    exit;
}

$id=$_GET['id'];
$sql="select * from contentclass where id={$id}";
$smt=$pdo->prepare($sql);
$smt->execute();
$row=$smt->fetch();
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
        <h1 class="page-header">
            <a href="" class='btn btn-primary'>添加</a>
            <a href="index.php" class='btn btn-warning'>查看</a>
        </h1>

        <form action="update.php" method="post">
            <div class="form-group">
                <label for="class_name">分类名称</label>
                <input class="form-control" type="text" name="class_name" id="class_name" value="<?php echo $row['class_name'];?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="提交">
                <input type="reset" class="btn btn-danger">
            </div>

        </form>
    </div>
    <script type="text/javascript" src="../../public/js/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="../../public/js/bootstrap.min.js"></script>
</body>
</html>
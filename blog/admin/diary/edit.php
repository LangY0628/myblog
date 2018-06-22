<?php
include'../../public/common/config.php';
session_start();
if(@!$_SESSION['userid']){
    echo "<script>location='../login.php'</script>";
    exit;
}

$id=$_GET['id'];
$sql="select * from diary where id={$id}";
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
                <label for="title">题目</label>
                <input class="form-control" type="text" name="title" id="title" value="<?php echo $row['title'];?>">
            </div>
            <div class="form-group">
                <label for="lableOne">标签1</label>
                <input class="form-control" type="text" name="lableOne" id="lableOne" value="<?php echo $row['lableOne'];?>">
                <label for="lableTwo">标签2</label>
                <input class="form-control" type="text" name="lableTwo" id="lableTwo" value="<?php echo $row['lableTwo'];?>">
                <label for="lableThree">标签3</label>
                <input class="form-control" type="text" name="lableThree" id="lableThree" value="<?php echo $row['lableThree'];?>">
                <label for="lableFour">标签4</label>
                <input class="form-control" type="text" name="lableFour" id="lableFour" value="<?php echo $row['lableFour'];?>">
                <label for="lableFive">标签5</label>
                <input class="form-control" type="text" name="lableFive" id="lableFive" value="<?php echo $row['lableFive'];?>">
            </div>
            <div class="form-group">
                <label for="content">内容</label>

                <textarea class="form-control" rows="15" name="content" id="content"><?php echo $row['content'];?></textarea>
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
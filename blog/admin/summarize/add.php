<?php
include'../../public/common/config.php';

session_start();
if(@!$_SESSION['userid']){
    echo "<script>location='../login.php'</script>";
    exit;
}
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

		<form action="insert.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="title">题目</label>
				<input class="form-control" type="text" name="title" id="title">
			</div>
			<div class="form-group">
				<label for="">内容</label>
                <script id="container" name="content" type="text/plain">
                </script>

			</div>
            <div class="form-group">
                <label for="img">图片</label>
                <input type="file" name="img" id="img">
            </div>
            <div class="form-group">
                <label for="">分类</label>

                <select name="class_id" class="form-control">
                <?php
                $sql="select * from contentclass";
                $smt=$pdo->prepare($sql);
                $smt->execute();
                while ($row=$smt->fetch()){
                    ?>
                    <option value ="<?php echo $row['id'] ;?>"><?php echo $row['class_name'] ;?></option>
                    <?php
                }
                ?>
                </select>
            </div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="提交">
				<input type="reset" class="btn btn-danger">
			</div>


		</form>

	</div>
    <script type="text/javascript" src="../../public/js/jquery-1.12.3.min.js"></script>


    <script type="text/javascript" src="../../public/js/bootstrap.min.js"></script>
    <!-- 配置文件 -->
    <script type="text/javascript" src="utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="utf8-php/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var editor = UE.getEditor('container');
    </script>
</body>
</html>
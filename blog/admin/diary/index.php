<?php
include'../../public/common/config.php';
session_start();
if(@!$_SESSION['userid']){
    echo "<script>location='../login.php'</script>";
    exit;
}

$length=5;
@$page=$_GET['p']?$_GET['p']:1;
$offset=($page-1)*$length;

$sqlTot="select count(*) from diary";
$smtTot=$pdo->prepare($sqlTot);
$smtTot->execute();
$tot=$smtTot->fetchColumn();
$pages=ceil($tot/$length);

$next=$page+1;
if($next>=$pages) {
	$next=$pages;
}

$prev=$page-1;
if($prev<=1) {
	$prev=1;
}


$sql="select * from diary order by id desc limit {$offset},{$length}";
$smt=$pdo->prepare($sql);
$smt->execute();
$rows=$smt->fetchAll();
 ?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>admin</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css" >

    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../../home/index.php">回首页</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/blog/admin/summarize/index.php">技术内容<span class="sr-only">(current)</span></a></li>
                    <li><a href="/blog/admin/diary/index.php">日志/等等。。。</a></li>
                    <li><a href="/blog/admin/contentClass/index.php">技术内容分类</a></li>
                    <li><a href="../logout.php">退出系统</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
        <h1 class="page-header">
            <a href="add.php" class='btn btn-primary'>添加</a>
            <a href="index.php" class='btn btn-warning'>查看</a>
        </h1>
        <table class="table table-striped table-hover table-bordered">
            <tr>
                <th>编号</th>
                <th>题目</th>
                <th>标签1</th>
                <th>标签2</th>
                <th>标签3</th>
                <th>标签4</th>
                <th>标签5</th>
                <th>内容</th>
                <th>时间</th>
                <th>修改</th>
                <th>删除</th>
            </tr>
            <?php
            foreach ($rows as $row) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['title']}</td>";
                echo "<td>{$row['lableOne']}</td>";echo "<td>{$row['lableTwo']}</td>";echo "<td>{$row['lableThree']}</td>";echo "<td>{$row['lableFour']}</td>";echo "<td>{$row['lableFive']}</td>";
                echo "<td><a target='_blank' href='content.php?p1={$row['id']}'>去看内容：</a></td>";
                echo "<td>{$row['subtime']}</td>";
                echo "<td><a href='edit.php?id={$row['id']}' class='btn btn-success'>修改</a></td>";
                echo "<td><a href='delete.php?id={$row['id']}' class='btn btn-danger delete'>删除</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
        <div>
            <a href="index.php?p=<?php echo $prev ?>" class="btn btn-primary">上一页</a>
            <a href="index.php?p=<?php echo $next ?>" class="btn btn-danger">下一页</a>
        </div>

    </div>
    <script type="text/javascript" src="../../public/js/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="../../public/js/bootstrap.min.js"></script>
    <script>
        $('.delete').click(function(){
            yz=confirm('确认删除?')
            if (!yz) {
                return false
            }
        })
    </script>
</body>
</html>
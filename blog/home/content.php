<?php
include '../public/common/config.php';

$id=$_GET['p'];

$sql="select * from article where id={$id}";

$smt=$pdo->prepare($sql);
$smt->execute();
$row=$smt->fetch()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>技术/学习总结</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

    <!-- Bootstrap -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <link type="text/css" href="public/css/style.css" rel="stylesheet">
    <link type="text/css" href="public/css/docco.css" rel="stylesheet">
</head>
<body>
<div class="hi-top">
    <div class="container">
        <span>你好 ! 欢迎访问</span><span style="float: right">现在的日期是：
                <script>
                    var myDate = new Date()
                    document.write(myDate.getFullYear()+'年'+(myDate.getMonth()+1)+'月'+myDate.getDate()+'日')
                </script>
        </span>
    </div>
</div>
<nav class="navbar navbar-inverse navbar-bottom">
    <div class="container">
        <div class="navbar-header">
            <p class="navbar-brand brand" style="margin: 0px;"><a class="nav-a" href="index.php">blog</a></p>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="resume.php">关于我</a></li>
                <li><a href="summarize.php">技术/学习总结</a></li>
                <li><a href="diary.php">日记/杂谈/兴趣</a></li>
                <li><a href="message.php">给我留言</a></li>
                <!--<li class="dropdown">-->
                <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">还没想好<span class="caret"></span></a>-->
                <!--<ul class="dropdown-menu">-->
                <!--<li><a href="#">Action</a></li>-->
                <!--<li><a href="#">Another action</a></li>-->
                <!--<li><a href="#">Something else here</a></li>-->
                <!--</ul>-->
                <!--</li>-->
            </ul>
        </div>
    </div>

</nav>
<div class="container">
    <div class="right">
        <ul class="list-group list-group-item-success">
            <li class="list-group-item"><span class="download-title">搬运/参考手册下载</span></li>
            <li class="list-group-item"><a href="../public/uploads/jQuery1.chm">jquery</a></li>
            <li class="list-group-item"><a href="../public/uploads/Vue2.chm">vue2.0</a></li>
            <li class="list-group-item"><a href="../public/uploads/php.chm">php</a></li>
            <li class="list-group-item"><a href="../public/uploads/CSS3.chm">css3</a></li>
        </ul>
    </div>
    <div class="content" id="content">
        <div class="content-banner">
            <img src="public/img/banner.png" class="img-responsive  header-banner" alt="Responsive image">
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                &nbsp;
                <h4 class="panel-title title title-b"><?php echo $row['title'];?></h4>
                <ol class="breadcrumb bread-hide" style="float: right; margin: 0 0; padding: 0 0;">
                    <li><a href="index.php">首页</a></li>
                    <li><a href="summarize.php">技术/学习总结</a></li>
                </ol>
            </div>
            <div class="panel-body">
                <?php echo $row['content'];?>
<!--                <p><span class="word"></span>jquery+ajax+php的具体用法,经过学习和参考别人的代码后写出来的代码总结，示例代码主要展示了jquery的$.ajax,$.get和$.post三个请求的具体使用-->
<!--                    ，后台使用了php，也用到了json，可以直接copy代码查看效果，希望能给和我一样的初学者一些帮助下面是html页面</p>-->
<!--                <pre><code class="html">&lt!DOCTYPE html&gt-->
<!--&lthtml lang="en"&gt-->
<!--&lthead&gt-->
<!--    &ltmeta charset="UTF-8"&gt-->
<!--    &lttitle&gtajax&lt/title&gt-->
<!--    &ltscript type="text/javascript" src="jquery-1.10.1.js"&gt&lt/script&gt-->
<!--    &ltscript type="text/javascript"&gt-->
<!--        function function1()-->
<!--            $.get(-->
<!--                "ajaxPhp.php",//待载入页面的URL地址-->
<!--                {name:"tom",age:11},//待发送的参数-->
<!--                function (data) {-->
<!--                    alert(data)-->
<!--                    $(".con").html(data)-->
<!--                },//载入成功时回调函数-->
<!--                "text"//返回内容格式-->
<!---->
<!--            )//$.get请求-->
<!--        }-->
<!--        function function2() {-->
<!--            $.post(-->
<!--                "ajaxPhp2.php",-->
<!--                {name2:"john",age2:11},-->
<!--                function (data) {-->
<!--                    alert(data.name+data.age)-->
<!--                    $(".con2").html(data.name+data.age)-->
<!--                },-->
<!--                "json"//josn格式-->
<!---->
<!--            )//$.post请求-->
<!--        }-->
<!--        function function3() {-->
<!--            $.ajax({-->
<!--                url:"ajaxPhp3.php",-->
<!--                type:"post",-->
<!--                dataType:"json",-->
<!--                data:{name:"jerry",age:12},-->
<!--                success:function (data) {-->
<!--                    alert(data.name+data.age)-->
<!--                    $(".con3").html(data.name+data.age)-->
<!--                }-->
<!--                })//$.ajax请求-->
<!--        }-->
<!--    &lt/script&gt-->
<!--&lt/head&gt-->
<!--&ltbody&gt-->
<!--    &ltform&gt-->
<!--        &ltinput type="button" value="get" onclick="function1()"&gt&lt!--$.get请求--&gt-->
<!--        &ltinput type="button" value="post" onclick="function2()"&gt-->
<!--        &ltinput type="button" value="ajax" onclick="function3()"&gt-->
<!--        &ltspan class="con"&gt&lt/span&gt&lt!--$.get请求返回的数据--&gt-->
<!--        &ltspan class="con2"&gt&lt/span&gt-->
<!--        &ltspan class="con3"&gt&lt/span&gt-->
<!--    &lt/form&gt-->
<!--&lt/body&gt-->
<!--&lt/html&gt</code></pre>-->
<!---->
<!---->
<!--                <p><span class="word"></span>以下是php页面</p>-->
<!--                <pre><code>&lt?php-->
<!--$name = $_GET['name'];-->
<!--$age = $_GET['age'];-->
<!--echo "姓名:$name 性别:$age";-->
<!--echo "ok";-->
<!--?&gt-->
<!--</code></pre>-->
<!---->
<!--                <pre><code>&lt?php-->
<!--$name2 = $_POST['name2'];-->
<!--$age2 = $_POST['age2'];-->
<!--$array = array("name"=>$name2,"age"=>$age2);-->
<!--echo json_encode($array);-->
<!--?&gt-->
<!--</code></pre>-->
<!---->
<!--                <pre><code>&lt?php-->
<!--$name = $_POST['name'];-->
<!--$age = $_POST['age'];-->
<!--$array = array("name"=>$name,"age"=>$age,);-->
<!--echo json_encode($array);//将数值转换成json数据存储格式-->
<!--?&gt-->
<!--</code></pre>-->


            </div>
        </div>
    </div>

</div>

<script type="text/javascript" src="../public/js/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="public/js/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<script type="text/javascript" src="../public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/js/script.js"></script>
</body>
</html>
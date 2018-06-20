<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>关于我</title>

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


    <link href="public/css/style.css" rel="stylesheet">
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
        <div>
            <img src="public/img/banner.png" class="img-responsive header-banner" alt="Responsive image">
        </div>
        <div class="title-b margin-xx">
            <ul class="list-group">
                <li class="list-group-item">姓名：yang(从来没变过的网名)</li>
                <li class="list-group-item">年龄：21</li>
                <li class="list-group-item">邮箱：yangggesct@126.com</li>
                <li class="list-group-item">爱好：编程，登山，爬宠，动漫，游戏</li>
                <li class="list-group-item">技能：html/css(熟练),javascript(熟练),jquery(熟练),vue(还行),php(一般),webpack(一般),photoshop(熟练),mysql(熟练),sql&nbsp;server(还行);</li>
            </ul>
        </div>
    </div>

</div>

<script type="text/javascript" src="../public/js/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="../public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/js/script.js"></script>
</body>
</html>
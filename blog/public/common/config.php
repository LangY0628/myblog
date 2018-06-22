<?php
header("Content-Type: text/html; charset=UTF-8");
date_default_timezone_set('PRC');
$pdo=new PDO('mysql:host=localhost;dbname=blog','root','123456');

$pdo->exec('set names utf8');

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);



 ?>

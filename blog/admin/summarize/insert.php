<?php
include'../../public/common/config.php';
session_start();
if(@!$_SESSION['userid']){
    echo "<script>location='../login.php'</script>";
    exit;
}
$title=$_POST['title'];
$content=$_POST['content'];
$class_id=$_POST['class_id'];
$subtime=date("Y-m-d h:i:s");

//图片上传

$src=$_FILES['img']['tmp_name'];
$name=$_FILES['img']['name'];
@$ext=array_pop(explode('.',$name));
$dst='../../public/uploads/img/'.time().mt_rand().'.'.$ext;
move_uploaded_file($src,$dst);
$img=basename($dst);



$sql="insert into article(title,content,class_id,img,subtime) values('{$title}','{$content}','{$class_id}','{$img}','{$subtime}')";
$smt=$pdo->prepare($sql);
if ($smt->execute()) {
	echo "<script>location='index.php'</script>";
}
 ?>
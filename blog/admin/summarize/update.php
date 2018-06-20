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
$id=$_POST['id'];
$oldImg=$_POST['img'];

//$sql="update article set title='{$title}',content='{$content}',subtime='{$subtime}' where id={$id}";

//$smt=$pdo->prepare($sql);
//if ($smt->execute()) {
//	echo "<script>location='index.php'</script>";
//}

$imgerror=$_FILES['img']['error'];
if ($imgerror==0){

    $src=$_FILES['img']['tmp_name'];
    $name=$_FILES['img']['name'];
    @$ext=array_pop(explode('.',$name));
    $dst='../../public/uploads/img/'.time().mt_rand().'.'.$ext;
    move_uploaded_file($src,$dst);


    $oldFile="../../public/uploads/img/{$oldImg}";
    unlink($oldFile);

    $img=basename($dst);

    $sql="update article set title='{$title}',content='{$content}',class_id='{$class_id}',img='{$img}',subtime='{$subtime}' where id={$id}";

    $smt=$pdo->prepare($sql);
    if ($smt->execute()) {
        echo "<script>location='index.php'</script>";
    }

}else{
    $sql="update article set title='{$title}',content='{$content}',class_id='{$class_id}',subtime='{$subtime}' where id={$id}";

    $smt=$pdo->prepare($sql);
    if ($smt->execute()) {
        echo "<script>location='index.php'</script>";
    }
}

 ?>
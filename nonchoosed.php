<?php
/**
 * Created by PhpStorm.
 * User: yixue
 * Date: 2018-11-08
 * Time: 19:59
 */
$n=$_GET['n'];
if(!session_id()){
    session_start();
}
if(!empty($_GET['page'])){
    $page=$_GET['page'];
}else{
    $page='';
}
$cid=$_GET['cid'];
$sid=$_SESSION['sid'];
include "conn.php";
$sql="delete from course_student where sid='$sid' and cid='$cid'";
$result=$pdo->exec($sql);
if($n==1){
    if($result>0){
        echo "<script>
    alert('取消成功');
    location.href='choose.php?page=$page';
</script>";
    }else{
        echo "<script>
    alert('取消失败');
    location.href='choose.php?page=$page';
</script>";
    }
}else{
    if($result>0){
        echo "<script>
    alert('取消成功');
    location.href='showCourse.php';
</script>";
    }else{
        echo "<script>
    alert('取消失败');
    location.href='showCourse.php';
</script>";
    }
}
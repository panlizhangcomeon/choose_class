<?php
/**
 * Created by PhpStorm.
 * User: yixue
 * Date: 2018-11-08
 * Time: 19:59
 */
if(!session_id()){
    session_start();
}
$page=$_GET['page'];
$cid=$_GET['cid'];
$sid=$_SESSION['sid'];
include "conn.php";
$sql="insert into course_student values('$sid','$cid')";
$result=$pdo->exec($sql);
if($result>0){
    echo "<script>
    alert('选课成功');
    location.href='choose.php?page=$page';
</script>";
}else{
    echo "<script>
    alert('选课失败');
    location.href='choose.php?page=$page';
</script>";
}
<?php
/**
 * Created by PhpStorm.
 * User: yixue
 * Date: 2018-11-08
 * Time: 15:45
 */
if(!session_id()){
    session_start();
}
if(!empty($_POST)){

    $yzm=(int)$_SESSION['yzm'];
    $YZM=(int)$_POST['YZM'];
    $sid=isset($_POST['sid'])? $_POST['sid'] : '';
    $password=isset($_POST['password'])? $_POST['password'] : '';
    $redis=new redis();
    $redis->connect("127.0.0.1",6379);
    $n=$redis->hExists("$sid","password");
    if($yzm==$YZM) {
        if ($n) {
            $arr = $redis->hMGet("$sid", ['sname', 'password']);
            if ((int)$arr['password'] == $password) {
                $sname = $redis->hGet("$sid", "sname");
                $_SESSION['sname'] = $arr['sname'];
                $_SESSION['sid'] = $sid;
                echo "<script>
        alert('登录成功');
        location.href='choose.php';
            </script>";
            } else {
                echo "<script>
        alert('密码错误');
        location.href='index.html';
            </script>";
            }
        } else {
            echo "<script>
        alert('学号不存在');
        location.href='index.html';
            </script>";
        }
    }else{
        echo "<script>
        alert('验证码错误');
        location.href='index.html';
            </script>";
    }


//    include "conn.php";
//    $sql="select * from student where sid='$sid' and password='$password'";
//    $result=$pdo->query($sql);
//    $arr=$result->fetch(PDO::FETCH_ASSOC);
//    $row=$result->rowCount();
//    if($yzm==$YZM){
//        if($row>0){
//            $_SESSION['sname']=$arr['sname'];
//            $_SESSION['sid']=$sid;
//            echo "<script>
//        alert('登录成功');
//        location.href='choose.php';
//            </script>";
//        }else{
//            echo "<script>
//        alert('学号或密码错误');
//        location.href='index.html';
//            </script>";
//        }
//    }else{
//        echo "<script>
//        alert('验证码错误');
//        location.href='index.html';
//            </script>";
//    }

}else{
    echo "<script>
    alert('您未填写任何数据');
    location.href='index.html';
        </script>";
}
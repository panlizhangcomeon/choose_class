<?php
/**
 * Created by PhpStorm.
 * User: yixue
 * Date: 2018-11-08
 * Time: 20:55
 */
if(!session_id()){
    session_start();
}
session_destroy();
header("location:index.html");
?>
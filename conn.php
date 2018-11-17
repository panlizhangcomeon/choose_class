<?php
/**
 * Created by PhpStorm.
 * User: yixue
 * Date: 2018-11-08
 * Time: 17:00
 */
$dbms="mysql";
$host="localhost";
$dbname="edu";
$dns="$dbms:host=$host;dbname=$dbname";
$user="root";
$pass="123456";
try{
    $pdo=new PDO($dns,$user,$pass);
}catch(Exception $exception) {
    echo "errormessege: " . $exception->getMessage();
}
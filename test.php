<?php
/**
 * Created by PhpStorm.
 * User: yixue
 * Date: 2018-11-08
 * Time: 17:14
 */
include "conn.php";
$sql="select c.term,c.cname,c.credit,t.tname,t.tel,c.id from teacher as t inner join course as c where t.id=c.tid";
$result=$pdo->query($sql);
while($arr=$result->fetch(PDO::FETCH_ASSOC)){
    echo $arr['id'];
}
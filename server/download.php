<?php

$username=$_REQUEST["username"];
$userpass=$_REQUEST["userpass"];

if($username != 13106742676){
    echo '{"status":"error","msg":"登录失败，用户名不存在！"}';
}elseif ($userpass != 1234567) {
    echo '{"status":"error","msg":"登录失败，密码不正确！"}';
}else{
    echo '{"status":"success","msg":"恭喜您，登录成功！"}';
}




?>
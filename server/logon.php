<?php

$username=$_REQUEST["username"];
$userpass=$_REQUEST["userpass"];

if($username != 13106742676){
    echo '{"status":"success","msg":"注册成功"}';
}else{
    echo '{"status":"error","msg":"注册失败，该账户已经存在"}';
}




?>
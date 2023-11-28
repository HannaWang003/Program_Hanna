<?php
// $dsn="mysql:host=localhost;charset=utf8;dbname=member";
// $pdo=new PDO($dsn,'root','');
include_once("../inc/pdo.php");
$acc=htmlspecialchars(trim($_POST['acc']));
// TRIM() 移除前後空白字元
// htmlspecialchars() 函数把预定义的字符转换为 HTML 实体。
// 预定义的字符是：
// & （和号）成为 &
// " （双引号）成为 "
// ' （单引号）成为 '
// < （小于）成为 <
// > （大于）成为 >
// $sql="insert into `users` (`acc`,`pwd`,`name`,`tel`) values ('{$acc}','{$_POST['pwd']}','{$_POST['name']}','{$_POST['tel']}')";
insert('users',['acc'=>"{$acc}",'pwd'=>"{$_POST['pwd']}",'name'=>"{$_POST['name']}",'tel'=>"{$_POST['tel']}"]);
// echo "影響{$pdo->exec($sql)}筆資料";
// exit();
header("location:../login_form.php");
?>
<?php
include_once("../inc/db.php");
// if(isset($_POST['pwd'])){
//     $_SESSION['pwd']=$_POST['pwd'];
// }

// if(isset($_POST['name'])){
//     $_SESSION['name']=$_POST['name'];
// }
// if(isset($_POST['tel'])){
//     $_SESSION['tel']=$_POST['tel'];
// }
// $sql="update `users` set `pwd`='{$_SESSION['pwd']}',`name`='{$_SESSION['name']}',`tel`='{$_SESSION['tel']}' where `id` = '{$_SESSION['id']}'";
// $res=update('users',"{$_POST['id']}",['pwd'=>"{$_POST['pwd']}",'name'=>"{$_POST['name']}",'tel'=>"{$_POST['tel']}"]);
$res = $User->save($_POST);
if ($res > 0) {
    $_SESSION['msg'] = "更新成功";
} else {
    $_SESSION['msg'] = "資料無異動";
};
// exit();
header("location:../member.php");

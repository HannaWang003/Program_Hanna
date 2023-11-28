<?php
include_once("../inc/db.php");

$acc = $_POST['acc'];
$pwd = $_POST['pwd'];


// $sql="select count(*),`id`,`acc`,`pwd`,`name`,`tel` from users where `acc`='$acc' && `pwd`='$pwd'";
$res = $User->count(['acc' => $acc, 'pwd' => $pwd]);
// $user=$pdo->query($sql)->fetch();
// $userNumber=$pdo->query($sql)->fetchcolumn();
// fetchcolumn() 傳回資料列中的第一個資料行
// 檢查用
// echo "<pre>";
// echo print_r($user);
// echo "</pre>";
// exit();
// 檢查用end
// if($user['acc']==$acc && $user['pwd']==$pwd){
if ($res) {
    $_SESSION['user'] = $acc;
    // $_SESSION['user']=$user['acc'];
    // $_SESSION['pwd']=$user['pwd'];
    // $_SESSION['name']=$user['name'];
    // $_SESSION['tel']=$user['tel'];
    header("location:../index.php");
} else {
    header("location:../login_form.php?error=帳號或密碼錯誤");
}

<?php
// session_start();
if($_POST['acc']=='admin' && $_POST['pw']=='1234'){
    // $_SESSION['login']=$_POST['acc'];
    setcookie("login","hanna",time()+300);
    header("location:member.php");

}else{
    setcookie("error","帳號或密碼錯誤,請重新登入",time());
    // $_SESSION['error']="帳號或密碼錯誤,請重新登入";
    header("location:login.php");
}
?>
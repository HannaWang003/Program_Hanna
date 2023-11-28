<?php
include_once("../inc/pdo.php");
// $sql="delete from `users` where `id` = '{$_SESSION['id']}'";
del('users',$_GET['del']);
$pdo->exec($sql);
unset($_SESSION['user']);
header("location:../index.php");
?>
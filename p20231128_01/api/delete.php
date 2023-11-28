<?php
include_once("../inc/db.php");
// $sql="delete from `users` where `id` = '{$_SESSION['id']}'";
$User->del($_GET['del']);
unset($_SESSION['user']);
header("location:../index.php");

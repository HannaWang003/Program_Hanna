<?php
echo $_POST['acc'];
echo $_POST['pwd'];
if($_POST['acc']=='admin' && $_POST['pwd']==1234){
    header("location:member.php?login=success");
}
else{
    header("location:member.php?login=false");
}
?>
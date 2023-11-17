<?php
$rows=all('school','students','where `dept`=1');
dd($rows);



function all($dbname=null,$table=null,$where=''){
    if(isset($dbname) && !empty($dbname)){
    $dns="mysql:host=localhost;charset=utf8;dbname={$dbname}";
    $pdo=new PDO($dns,'root','');
if(isset($table) && !empty($table)){
    $sql="select * from `{$table}` {$where}";
    $rows=$pdo->query($sql)->fetchAll();
    return $rows;
}
else{
    echo "錯誤資料表!";
}
}
else{
    echo "錯誤輸入";
}
}
function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}


?>
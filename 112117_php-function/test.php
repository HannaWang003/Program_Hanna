<?php
del('dept',['id'=>'13','code'=>'113']);



// pdo
function pdo($host,$dbname){
    $dns="mysql:host=$host;charset=utf8;dbname=$dbname";
    return $pdo=new PDO($dns,'root','');
}
// foreach
function where($id){
    foreach($id as $col => $val){
        $tmp[]="`$col`='$val'";
    }
    return $tmp;
}
// 6-del
function del($table,$id){
$pdo=pdo('localhost','school');
    $sql="delete from `$table` where ";
    if(is_array($id)){
$tmp=where($id);
$sql .= join(" && ",$tmp);
    }else if(is_numeric($id)){
 echo $sql .=" `id`='$id'";
    }
    else{
        echo "錯誤:參數錯誤!";
    }

return $pdo->exec($sql);

}
?>
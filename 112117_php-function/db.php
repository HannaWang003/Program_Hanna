<?php
$rows=all('school','students',['dept'=>'3']);
dd($rows);



function all($dbname=null,$table=null,$where='',$other=''){

    if(isset($dbname) && !empty($dbname)){
    $dns="mysql:host=localhost;charset=utf8;dbname={$dbname}";
    $pdo=new PDO($dns,'root','');
    $sql="select * from `{$table}` ";
if(isset($table) && !empty($table)){

if(is_array($where)){
    if(!empty($where)){
foreach($where as $col => $value){
    $tmp[]="`{$col}`='{$value}'";
}
$sql .= "where ".join('&&',$tmp);
    }
}
else{
    $sql .=" $where";
}
$sql.=$other;
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
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
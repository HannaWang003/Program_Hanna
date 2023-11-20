<?php
// $rows=all('students',['dept'=>'1','graduate_at'=>'23']);
// $row=find('students',['dept'=>'1','graduate_at'=>'23']);
// echo "<h3>find()</h3>";
// dd($row);
// echo "<hr>";
// echo "<h3>all()</h3>";
// dd($rows);
// update
// $up=update("students",['dept'=>2,'status_code'=>'001'],['dept'=>'99','name'=>'張明珠']);
// dd($up);

// function
// 1-print_r
insert('dept',['code'=>'112','name'=>'織品系']);

function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

// 2-select All
function all($table=null,$where='',$other=''){
    $dns="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dns,'root','');
$sql="select * from `{$table}` ";

if(isset($table) && !empty($table)){

if(is_array($where)){
    if(!empty($where)){
foreach($where as $col => $value){
    $tmp[]="`{$col}`='{$value}'";
}
$sql .= "where ".join(' &&',$tmp);
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

// 3-select:id=?與all()不同只在於find()雖然有很多筆，但是只取一筆出來
function find($table,$id){
    $dns="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dns,'root','');
$sql="select * from `$table` ";
    echo "<hr>";
    if(is_array($id)){
        foreach($id as $col => $val){
            $tmp[]="`$col`='$val'";
        }
$sql .=" where ".join(" && ",$tmp);
    }else if(is_numeric($id)){
        $sql .=" where `id`='$id'";
    }
    else{
        echo "錯誤:參數錯誤!";
    }

    $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    return $row;
}
// 4-update
function update($table,$id,$cols){
    $dns="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dns,'root','');

    echo $sql="update `$table` set ";
// 處理cols
    if(!empty($cols)){
    foreach($cols as $col => $val){
        $tmp[]="`$col`='$val'";
    }
}
else{
    echo "錯誤:缺少要編輯的欄位陣列";
}
$sql .= join(",",$tmp);
// 清楚上面已儲存的陣列內容，重新宣告為「空陣列」
$tmp=[];

// 處理id
if(is_array($id)){
    foreach($id as $col => $val){
        $tmp[]="`$col`='$val'";
    }
$sql .=" where " .join(" && ",$tmp);
}else if(is_numeric($id)){
    $sql .=" where `id`='$id'";
}
else{
    echo "錯誤:參數錯誤!";
}
return $pdo->exec($sql);
}

// 5-insert
function insert($table,$values){
    $dns="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dns,'root','');
    $sql="insert into `$table` "; 

    $cols=join("`,`",array_keys($values));
    $vals=join("','",$values);

$sql .= "(`$cols`)" ." values "."('$vals')";
return $pdo->exec($sql);
}

// 6-del
?>
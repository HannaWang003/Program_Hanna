<?php
date_default_timezone_get('Asia/Taipei');
session_start();
class DB{
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
    protected $pdo;
    protected $table;

    public function __construct($table){
        $this -> pdo = new PDO($this->dsn,'root','');
        $this -> table = $table;
    }

    // select all_fetchAll(PDO::FETCH_ASSOC)
    function all($where = '',$other = ''){
$sql = "select * from `$this->table`";
if(isset($this->table)&& !empty($this->table)){
    if(is_array($where)){
        if(!empty($where)){
            foreach($where as $col => $val){
                $tmp[] = "`$col` = '$val'";
            }
            $sql .= " where " . join(" && ", $tmp);
        }
    }
    else{
        $sql .= " $where";
    }
    $sql .= $other;
    $rows = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
else{
    echo "錯誤:沒有指定資料表名稱";
}
    }

    // select 計算筆數 count_fetchColumn()
function count($where = '',$other = ''){
    $sql = "select count(*) from `$this->table`";

if(isset($this->table)&& !empty($this->table)){
    if(is_array($where)){
        if(!empty($where)){
            foreach($where as $col => $val){
                $tmp[] = "`$col` = '$val'";
            }
            $sql .= " where " . join(" && ", $tmp);
        }
    }
    else{
        $sql .= " $where";
    }
    $sql .= $other;
    $rows = $this->pdo->query($sql)->fetchColumn();
    return $rows;
}
else{
    echo "錯誤:沒有指定資料表名稱";
}
    }
// select 找出特定條件的資料 find_fetch(PDO::FETCH_ASSOC)
function find($id){
    $sql = "select * from `$this->table`";
    if(is_array($id)){
foreach($id as $col => $val){
    $tmp[] = "`$col`='$val'";
}
$sql .= " where " . join(" && ",$tmp);
    }
    else if(is_numeric($id)){
        $sql .= " where `id` = '$id'";
    }
    else{
        echo "錯誤:參數的資料型態比須是數字或陣列";
    }
    $row = $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    return $row;
}
// insert & update 合併
function save($array){
    if(isset($array['id'])){
        $sql =  "update `$this->table` set ";
        if(!empty($array)){
            foreach($array as $col => $val){
                $tmp[] = "`$col`='$val'";
            }
            $sql .= join(" , ",$tmp);
            $sql .= " where `id`='{$array['id']}'";
        }
    }
    else{
        $sql = "insert into `$this->table`";
        $col = "(`". join("`,`",array_keys($array))."`)";
        $val = "('". join("','",$array)."')";

        $sql .= $col . "VALUES" . $val;
    }
    return $this->pdo->exec($sql);
}

}

?>
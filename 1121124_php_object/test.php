<?php
date_default_timezone_set('Asia/Taipei');
session_start();
class DB{
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=school_test";
protected $pdo;
    protected $table;

    public function __construct($table){
        $this->table = $table;
        $this->pdo = new PDO($this->dsn,'root','');

    }
function all($where = '',$other = ''){
    $sql = "select * from `$this->table` ";
    if(isset($this->table) && !empty($this->table)){
        if(is_array($where)){
            if(!empty($where)){
                foreach($where as $key => $val){
                    $tmp[] = "`$key`='$val'";
                }
                $sql .= " where " . join(" && ",$tmp);
            }
        }
        else{
            $sql .= " $where ";
        }
        $sql .= $other;
        $rows = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
    else{
        echo "報錯";
    }
}
}
$db = new DB('students');
$ans = $db ->all(); 
print_r($ans);
?>
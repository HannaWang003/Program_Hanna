<?php
date_default_timezone_set("Asia/Taipei");
session_start();
$dsn = "mysql:host=localhost;charset=utf8;dbname=member";
$pdo = new PDO($dsn, 'root', '');
?>
<?php

function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

// 2-select All
function all($table = null, $where = '', $other = '')
{
    // $dns="mysql:host=localhost;charset=utf8;dbname=school";
    // $pdo=new PDO($dns,'root','');
    global $pdo;
    $sql = "select * from `{$table}` ";

    if (isset($table) && !empty($table)) {

        if (is_array($where)) {
            if (!empty($where)) {
                foreach ($where as $col => $value) {
                    $tmp[] = "`{$col}`='{$value}'";
                }
                $sql .= "where " . join(' &&', $tmp);
            }
        } else {
            $sql .= " $where";
        }
        $sql .= $other;
        $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    } else {
        echo "錯誤資料表!";
    }
}
// 3-0 total_計算筆數
function total($table, $id)
{
    global $pdo;
    $sql = "select count(`id`) from `$table` ";

    if (is_array($id)) {
        foreach ($id as $col => $value) {
            $tmp[] = "`$col`='$value'";
        }
        $sql .= " where " . join(" && ", $tmp);
    } else if (is_numeric($id)) {
        $sql .= " where `id`='$id'";
    } else {
        echo "錯誤:參數的資料型態比須是數字或陣列";
    }
    //echo 'find=>'.$sql;
    $row = $pdo->query($sql)->fetchColumn();
    return $row;
}

// 3-select:id=?與all()不同只在於find()雖然有很多筆，但是只取一筆出來
function find($table, $id)
{
    // $dns="mysql:host=localhost;charset=utf8;dbname=school";
    // $pdo=new PDO($dns,'root','');
    global $pdo;
    $sql = "select * from `$table` ";
    echo "<hr>";
    if (is_array($id)) {
        foreach ($id as $col => $val) {
            $tmp[] = "`$col`='$val'";
        }
        $sql .= " where " . join(" && ", $tmp);
    } else if (is_numeric($id)) {
        $sql .= " where `id`='$id'";
    } else {
        echo "錯誤:參數錯誤!";
    }

    $row = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    return $row;
}
// 4-update
function update($table, $id, $cols)
{
    // $dns="mysql:host=localhost;charset=utf8;dbname=school";
    // $pdo=new PDO($dns,'root','');
    global $pdo;
    echo $sql = "update `$table` set ";
    // 處理cols
    if (!empty($cols)) {
        foreach ($cols as $col => $val) {
            $tmp[] = "`$col`='$val'";
        }
    } else {
        echo "錯誤:缺少要編輯的欄位陣列";
    }
    $sql .= join(",", $tmp);
    // 清楚上面已儲存的陣列內容，重新宣告為「空陣列」
    $tmp = [];

    // 處理id
    if (is_array($id)) {
        foreach ($id as $col => $val) {
            $tmp[] = "`$col`='$val'";
        }
        $sql .= " where " . join(" && ", $tmp);
    } else if (is_numeric($id)) {
        $sql .= " where `id`='$id'";
    } else {
        echo "錯誤:參數錯誤!";
    }
    return $pdo->exec($sql);
}

// 5-insert
function insert($table, $values)
{
    // $dns="mysql:host=localhost;charset=utf8;dbname=school";
    // $pdo=new PDO($dns,'root','');
    global $pdo;
    $sql = "insert into `$table` ";

    $values = "(`" . join("`,`", array_keys($values)) . "`)" . " values " . "('" . join("','", $values) . "')";

    $sql .= $values;
    return $pdo->exec($sql);
}

// 6-del
function del($table, $id)
{
    // $dns="mysql:host=localhost;charset=utf8;dbname=school";
    // $pdo=new PDO($dns,'root','');
    global $pdo;
    $sql = "delete from `$table` where ";
    if (is_array($id)) {
        foreach ($id as $col => $val) {
            $tmp[] = "`$col`='$val'";
        }
        $sql .= join(" && ", $tmp);
    } else if (is_numeric($id)) {
        $sql .= " `id`='$id'";
    } else {
        echo "錯誤:參數錯誤!";
    }

    return $pdo->exec($sql);
}
?>
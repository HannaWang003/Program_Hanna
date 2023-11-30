<?php
date_default_timezone_set("Asia/Taipei");
session_start();
class DB
{
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
    protected $pdo;
    protected $table;

    public function __construct($table)
    {
        $this->table = $table;
        $this->pdo = new PDO($this->dsn, 'root', '');
    }
    // function_1 取出全部資料
    function all($where = '', $other = '')
    {
        $sql = "select * from `$this->table` ";
        $sql = $this->sql_all($sql, $where, $other);
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    // 聚合函式_math
    function math($math, $col, $where = '', $other = '')
    {
        switch ($math) {
            case 'sum':
                $sql = "select sum(`$col`) from `$this->table`";
                break;
            case 'count':
                $sql = "select count($col) from `$this->table`";
                break;
        }
        $sql = $this->sql_all($sql, $where, $other);
        return $this->pdo->query($sql)->fetchColumn();
    }
    // function_1-1 計算全部筆數 組合到function_math
    function count($col = '*', $where = '', $other = '')
    {
        $sql = "select count($col) from `$this->table`";
        $sql = $this->sql_all($sql, $where, $other);
        return $this->pdo->query($sql)->fetchColumn();
    }

    // function_1-2-1 組合到function_math
    function sum($col = '*', $where = '', $other = '')
    {
        $sql = "select sum(`$col`) from `$this->table`";
        $sql = $this->sql_all($sql, $where, $other);
        return $this->pdo->query($sql)->fetchColumn();
    }

    // function_2_回傳資料庫有沒有核對到資料，並回傳筆數
    function total($id)
    {
        $sql = "select count(`id`) from `$this->table` ";

        if (is_array($id)) {
            $tmp = $this->a2s($id);
            $sql .= " where " . join(" && ", $tmp);
        } else if (is_numeric($id)) {
            $sql .= " where `id`='$id'";
        } else {
            echo "錯誤:參數的資料型態比須是數字或陣列";
        }
        //echo 'find=>'.$sql;
        $row = $this->pdo->query($sql)->fetchColumn();
        return $row;
    }

    //function_3_篩選出特定資料
    function find($id)
    {
        $sql = "select * from `$this->table` ";

        if (is_array($id)) {
            $tmp = $this->a2s($id);
            $sql .= " where " . join(" && ", $tmp);
        } else if (is_numeric($id)) {
            $sql .= " where `id`='$id'";
        } else {
            echo "錯誤:參數的資料型態比須是數字或陣列";
        }
        //echo 'find=>'.$sql;
        $row = $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    // 以下合併到save_START
    // protected function update($cols)
    // {
    //     $sql = "update `$this->table` set ";

    //     if (!empty($cols)) {
    //         foreach ($cols as $col => $value) {
    //             $tmp[] = "`$col`='$value'";
    //         }
    //     } else {
    //         echo "錯誤:缺少要編輯的欄位陣列";
    //     }

    //     $sql .= join(",", $tmp);
    //     $sql .= " where `id`='{$cols['id']}'";
    //     // echo $sql;
    //     return $this->pdo->exec($sql);
    // }

    // protected function insert($values)
    // {
    //     $sql = "insert into `$this->table` ";
    //     $cols = "(`" . join("`,`", array_keys($values)) . "`)";
    //     $vals = "('" . join("','", $values) . "')";

    //     $sql = $sql . $cols . " values " . $vals;

    //     //echo $sql;

    //     return $this->pdo->exec($sql);
    // }
    // 以上合併到save_END
    // 合併insert & update
    function save($array)
    {
        if (isset($array['id'])) {
            $sql = "update `$this->table` set ";

            if (!empty($array)) {
                $tmp = $this->a2s($array);
            } else {
                echo "錯誤:缺少要編輯的欄位陣列";
            }

            $sql .= join(",", $tmp);
            $sql .= " where `id`='{$array['id']}'";
        } else {
            $sql = "insert into `$this->table` ";
            $cols = "(`" . join("`,`", array_keys($array)) . "`)";
            $vals = "('" . join("','", $array) . "')";
            $sql = $sql . $cols . " values " . $vals;
        }
        return $this->pdo->exec($sql);
    }

    // del
    function del($id)
    {
        $sql = "delete from `$this->table` where ";

        if (is_array($id)) {
            $tmp = $this->a2s($id);
            $sql .= join(" && ", $tmp);
        } else if (is_numeric($id)) {
            $sql .= " `id`='$id'";
        } else {
            echo "錯誤:參數的資料型態比須是數字或陣列";
        }
        //echo $sql;

        return $this->pdo->exec($sql);
    }
    // 設計一個可以自已寫語法的function
    function q($sql)
    {
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }


    // 常用程式碼_foreach
    private function a2s($id)
    {
        foreach ($id as $col => $value) {
            $tmp[] = "`$col`='$value'";
        }
        return $tmp;
    }
    private function sql_all($sql, $array, $other)
    {
        if (isset($this->table) && !empty($this->table)) {
            if (is_array($array)) {
                if (!empty($array)) {
                    $tmp = $this->a2s($array);
                    $sql .= " where " . join(" && ", $tmp);
                }
            } else {
                $sql .= " $array";
            }
            $sql .= $other;
            // $rows = $this->pdo->query($sql)->fetchColumn();
            return $sql;
        } else {
            echo "錯誤:沒有指定資料表名稱";
        }
    }
}

function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}


// test
$dept = new DB('dept');
$rows = $dept->count();
dd($rows);
$score = new DB('student_scores');
$sum = $score->math('count', 'score');
dd($sum);

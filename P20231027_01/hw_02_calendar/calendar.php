<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆</title>
    <style>
        *{
            box-sizing:border-box;
        }
        h1{
            text-align:center;
        }
        h2{
            text-align:center;
        }
        table,tr,th,td{
            border:2px solid black;
            border-collapse:collapse;
        }
        table{
            margin:auto;
            width:50vw;
        }
        td{
            text-align:center;
        }
        .bg-c1{
            background-color:blanchedalmond;
        }
        .PreNext{
            margin:auto;
            width:50vw;
            background-color:lightgreen;
            display:flex;
            justify-content: space-evenly;
        }
    </style>
</head>
<body>
    <h1>萬年曆</h1>
    <?php
    // 變數
    $row=$_GET['r'];
    $FC=$_GET['FC'];
    $month=$_GET['month'];
    $year=$_GET['year'];
    ?>
    <h2>西元<?=$year?>年<?=$month?>月</h2>
   <div class="container">
    <div class="PreNext">
        <a href="index.php?pre=<?=$month?>&year=<?=$year?>">上個月</a>
        <a href="index.php?next=<?=$month?>&year=<?=$year?>">下個月</a>
    </div>
    <table>
        <tr>
            <th class="bg-c1">SUN</th>
            <th>MON</th>
            <th>TUS</th>
            <th>WED</th>
            <th>THR</th>
            <th>FRI</th>
            <th class="bg-c1">SAT</th>
        </tr>
    <?php
for($j=0;$j < $row; $j++){
    echo "<tr>";
    for($i=0;$i<7;$i++){
        $tmp=(7*$j)+$i;
        $everydayTime=strtotime("$tmp days",$FC);
        $everydayM=date("m",$everydayTime);
        if($i==0 || $i==6){
            echo "<td class='bg-c1'>";
        }
        else{
                echo "<td>";
        }
if($everydayM==$month){
    echo $everyday=date("j",$everydayTime);
    echo "</td>";
}
else{
    echo "</td>";
}

    }
}

?>
</table>
   </div>
</body>
</html>
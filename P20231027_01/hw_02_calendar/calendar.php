<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆</title>
    <style>
        *{
            box-sizing:border-box;
            margin:0;
        }
        h1{
            text-align:center;
        }
        h2{
            text-align:center;
        }
        table,tr,th,td{
            border:2px solid black;
            border-collapse:separate;
        }
        table{
            width:30vw;
        }
        td{
            text-align:center;
        }

        .containerBox{
            background-color:aquamarine;
            margin:auto;
            width:80vw;
            height:100vh;
            display:flex;
            justify-content:space-around;
            align-items:center;
        }
        .conatiner{
            margin:auto;
        }
        .bg-c1{
            background-color:rgb(156, 131, 158);
        }
        .today-c1{
            background-color:white;
            filter:drop-shadow(10px 10px black);
        }
        .PreNext{
            margin:auto;
            /* width:50vw; */
            background-color:lightgreen;
            display:flex;
            justify-content: space-evenly;
        }
        .thisMonth{
position:fixed;
        }
        .thisMonth>table{
            width:50vw;
            height:90vh;
background-color:rgb(90, 76, 96);
box-shadow:10px 10px 5px black;
            height:50vh;
        }
        .thisMonth>table td{
            height:10vh;
            width:5vw;
        }
    </style>
</head>
<body>
<?php
    // 變數
        $row=$_GET['r'];
        $row1=$_GET['r1'];
        $row2=$_GET['r2'];

        $FC=$_GET['FC'];
        $FC1=$_GET['FC1'];
        $FC2=$_GET['FC2'];

    $month=$_GET['month'];
    $month1=$_GET['month1'];
    $month2=$_GET['month2'];

    $year=$_GET['year'];
    $year1=$_GET['year1'];
    $year2=$_GET['year2'];
    ?>
   <div class="containerBox">
   <div class="container">
   <h2>西元<?=$year1?>年<?=$month1?>月</h2>
        <a href="index.php?pre=<?=$month?>&year=<?=$year?>">
    <table>
        <tr>
            <th class="bg-c1">SUN</th>
            <th>MON</th>
            <th>TUS</th>
            <th>WED</th>
            <th>THR</th>
            <th>FRI</th>
            <th class="bg-c1">.SAT</th>
        </tr>
    <?php
for($j=0;$j < $row1; $j++){
    echo "<tr>";
    for($i=0;$i<7;$i++){
        $tmp=(7*$j)+$i;
        $everydayTime=strtotime("$tmp days",$FC1);
        $everydayM=date("m",$everydayTime);
        if($i==0 || $i==6){
            echo "<td class='bg-c1'>";
        }
        else{
                echo "<td>";
        }
if($everydayM==$month1){
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
</a>
   </div>
    <!-- thisMonth -->  
   <div class="container thisMonth">
   <h2>西元<?=$year?>年<?=$month?>月</h2>
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
            <th class="bg-c1">.SAT</th>
        </tr>
    <?php
for($j=0;$j < $row; $j++){
    echo "<tr>";
    for($i=0;$i<7;$i++){
        $tmp=(7*$j)+$i;
        $everydayTime=strtotime("$tmp days",$FC);
        $everydayM=date("m",$everydayTime);
        $everyday=date("j",$everydayTime);
        $every=date("Y-m-d",$everydayTime);
        if($every==date("Y-m-d")){
            echo "<td class='today-c1'>";
        }
        elseif($i==0 || $i==6){
            echo "<td class='bg-c1'>";
        }

        else{
                echo "<td>";
        }
if($everydayM==$month){
    echo $everyday;
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
   <!-- nextMonty -->
   <div class="container">
   <h2>西元<?=$year2?>年<?=$month2?>月</h2>
        <a href="index.php?next=<?=$month?>&year=<?=$year?>">
    <table>
        <tr>
            <th class="bg-c1">SUN</th>
            <th>MON</th>
            <th>TUS</th>
            <th>WED</th>
            <th>THR</th>
            <th>FRI</th>
            <th class="bg-c1">.SAT</th>
        </tr>
    <?php
for($j=0;$j < $row2; $j++){
    echo "<tr>";
    for($i=0;$i<7;$i++){
        $tmp=(7*$j)+$i;
        $everydayTime=strtotime("$tmp days",$FC2);
        $everydayM=date("m",$everydayTime);
        if($i==0 || $i==6){
            echo "<td class='bg-c1'>";
        }
        else{
                echo "<td>";
        }
if($everydayM==$month2){
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
</a>
   </div>
</div>
</body>
</html>
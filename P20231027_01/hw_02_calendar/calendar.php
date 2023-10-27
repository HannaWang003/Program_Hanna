<style>
* {
    box-sizing: border-box;
    border-collapse: collapse;
}

table,
tr,
th,
td {
    border: 1px solid black;
}

table {
    margin: auto;
    width: 50vw;
    border: 5px double black;
}

td {
    height: 8vh;
    width: 2vw;
    text-align: center;
    padding: 5px;
    color: black;
}

td:nth-child(1),
td:nth-last-child(1),
th:nth-child(1),
th:nth-last-child(1) {
    background-color: orange;
}

.container {
    margin: auto;
    width: 50vw;
    display: flex;
    justify-content: space-between;
    margin-bottom: 2vh;
}

.container>a {
    text-decoration: none;
}

h3 {

    text-align: center;
}
</style>
<h2>線上月曆製作(禮拜日是第一天)</h2>

<?php

if(isset($_GET['month'])){
    $month=$_GET['month'];
}
else{
    $month=date('m');
}
echo "<h3>西元2023年".$month."月</h3>";
$isFirstDt=strtotime(date("Y-{$month}-1"));
$isFirstDay=date("Y-{$month}-1");
$isFirstDw=date('w',$isFirstDt);
$isLastDays=date('t');
$isLastDay=date("Y-{$month}-$isLastDays");
$weeks=ceil(($isLastDays+$isFirstDw)/7);
$isFirstCellt=strtotime("-$isFirstDw days",$isFirstDt);
$isFisrtCell=date("Y-m-d",$isFirstCellt);

$prev=$month-1;
$next=$month+1;
?>

<div class="container">
    <a href="?month=<?=$prev?>">上一個月</a>
    <a href="?month=<?=$next?>">下一個月</a>
</div>
<table>
    <tr>
        <th>日</th>
        <th>一</th>
        <th>二</th>
        <th>三</th>
        <th>四</th>
        <th>五</th>
        <th>六</th>
    </tr>
    <tr>
        <?php
for($j=0;$j<$weeks;$j++){
echo "<tr>";
for($i=0;$i<7;$i++){
    echo "<td>";
    $date=7*$j+$i;
    $isCellDt=strtotime("$date days",$isFirstCellt);
    $isCellD=date("j",$isCellDt);
    $isCellM=date("m",$isCellDt);
    if($isCellM==date("$month") ){
        echo $isCellD;
    }

    echo "</td>";
}
echo "</tr>";
}
echo "</table>";
?>
<?php
date_default_timezone_set('Asia/Taipei');
echo date(" y-M-d x D z W H:i:s");
?>
<br>
<hr><br>
<h2>strtotime</h2>
<?php
echo strtotime("now");
$time=strtotime("now");
echo "<br>";
echo date("Y-m-d H:i:s",$time);
echo "<br>";
?>
<br>
<hr><br>
<h2>時間間隔</h2>
<?php
echo $t1="2023-10-22";
echo "<br>";
echo $t2="2023-10-26";
echo "<br>";
$td=(strtotime($t2)-strtotime($t1))/(60*60*24);
echo $t1."到".$t2."差".$td."天";
?>
<br>
<hr><br>
<h2>計算下次生日天數</h2>
<?php
$bdate="1974-10-07";
$br=strtotime($bdate);
$tbdate=strtotime(date("Y")."-".date("m-d",$br));
$now=strtotime("now");
echo date("Y-m-d",$tbdate);

if($tbdate>$now){
    $dateDiff=ceil(($tbdate-$now)/(24*60*60));
}
else{
    $tmp=strtotime("+1 year",$tbdate);
    $dateDiff=ceil(($tmp-$now)/(24*60*60));
}
echo "<br>";
echo "距下次生日還有".$dateDiff."天";
?>
<br>
<hr><br>
<h2>各時間格式</h2>
<?php
// $now=strtotime("now") 沒有寫秒數，就是今天;
echo date("Y/m/d");
echo "<br><br>";
echo date("m月j日 l");
echo "<br><br>";
echo date("Y-m-d H:i:s");//要改不補零
echo "<br><br>";
echo date("Y-m-d G:i:s");//補零
echo "<br><br>";
if(date("N")<6){
    $wd="上班日";
}
else{
    $wd="假日";
}
echo date("今年是西元Y年m月d日",$now)."&nbsp;".$wd;
?>
<br>
<hr><br>
<h2>利用迴圈來計算連續5個周一的日期</h2>
<?php
$todayweek=date("N");
echo "<br>";
// echo $todayweek;
$diff=1-$todayweek;
$lastMonday=strtotime("$diff days");
echo "<br>";
echo date("Y-m-d",$lastMonday);
$nextMonday=strtotime("+1 week",$lastMonday);
echo "<br>";
echo date("Y-m-d",$nextMonday);
echo "<br>";
for($i=1;$i<=5;$i++){
echo date("Y-m-d",$nextMonday=strtotime("+1 week",$nextMonday));
echo "<br>";
}
?>
<br>
<hr><br>
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
    width: 50vw;
    border: 5px double black;
}

td {
    height: 8vh;
    width: 2vw;
    text-align: right;
    padding: 5px;
    color: black;
}

td:nth-child(1),
td:nth-last-child(1),
th:nth-child(1),
th:nth-last-child(1) {
    background-color: orange;
}
</style>
<h2>線上月曆製作</h2>
<!-- 最多可能到6行 -->
<!-- 每週最多7天 -->
<h3>西元2023年10月</h3>
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
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td>6</td>
        <td>7</td>
    </tr>
    <tr>
        <td>8</td>
        <td>9</td>
        <td>10</td>
        <td>11</td>
        <td>12</td>
        <td>13</td>
        <td>14</td>
    </tr>
    <tr>
        <td>15</td>
        <td>16</td>
        <td>17</td>
        <td>18</td>
        <td>19</td>
        <td>20</td>
        <td>21</td>
    </tr>
    <tr>
        <td>22</td>
        <td>23</td>
        <td>24</td>
        <td>25</td>
        <td>26</td>
        <td>27</td>
        <td>28</td>
    </tr>
    <tr>
        <td>29</td>
        <td>30</td>
        <td>31</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>

<?php
$thisMonth=date("Y");
$thisFirstDay=date("Y-m-1");
$thisFirstDate=date('w',strtotime($thisFirstDay));
$thisMonthDays=date("t");
$thisLastDay=date("Y-m-$thisMonthDays");
$weeks=ceil(($thisMonthDays+$thisFirstDate)/7);
$firstCell=date("Y-m-d",strtotime("-$thisFirstDate days",strtotime($thisFirstDay)));
echo "<br>";
echo $weeks;
echo date("西元Y年m月")."有".$thisMonthDays."天";
echo "<table>";
echo "<tr>";
echo "<th>日</th>";
echo "<th>一</th>";
echo "<th>二</th>";
echo "<th>三</th>";
echo "<th>四</th>";
echo "<th>五</th>";
echo "<th>六</th>";
echo "</tr>";
echo "<tr>";
for($j=1;$j<=6;$j++){
for($i=6;$i>=0;$i--){
// echo $j."和".$i."<br>";
echo "<td>";
$tmp=($j*7)-$i-$thisFirstDate;
if($tmp>0 && $tmp<=$thisMonthDays){
    echo $tmp;
}
echo "</td>";
}
echo "</tr>";
}
echo "</table>";
echo "<br>";
echo $firstWeek=date("W",strtotime($thisFirstDay));
echo "<br>";
echo $lastWeek=date("W",strtotime(date("Y-m-$thisMonthDays")));
echo "<br>";
echo $lastWeek-$firstWeek+1;

?>
<?php
echo "<table>";
echo "<tr>";
echo "<td>日</td>";
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td>六</td>";
echo "</tr>";
for($i=0;$i<$weeks;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        echo "<td>";
        $tmp=7*($i+1)-(6-$j)-$thisFirstDate;
        if($tmp>0 && $tmp<=$thisMonthDays){
            echo $tmp;
        }
        
        echo "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
<?php
$thisMonth=date("Y");
$thisFirstDay=date("Y-m-1");
$thisFirstDate=date('w',strtotime($thisFirstDay));
$thisMonthDays=date("t");
$thisLastDay=date("Y-m-$thisMonthDays");
$weeks=ceil(($thisMonthDays+$thisFirstDate)/7);
$firstCell=date("Y-m-d",strtotime("-$thisFirstDate days",strtotime($thisFirstDay)));
echo "<br>";
echo $weeks;
//以下用全年周數計算
if(date("w",strtotime($thisFirstDay))!=0){
$weeks=date("w",strtotime($thisLastDay))-date("W",strtotime($thisFirstDay))+1;
}
else{
    $weeks=date("W",strtotime($thisLastDay))-date("W",strtotime($thisFirstDay));  
}
echo $weeks;
//以上用全年周數計算
echo date("西元Y年m月")."有".$thisMonthDays."天";
echo "<table>";
echo "<tr>";
echo "<th>日</th>";
echo "<th>一</th>";
echo "<th>二</th>";
echo "<th>三</th>";
echo "<th>四</th>";
echo "<th>五</th>";
echo "<th>六</th>";
echo "</tr>";
echo "<tr>";
for($i=0;$i<$weeks;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        $addDays=7*$i+$j;
        $thisCellDate=strtotime("+$addDays days",strtotime($firstCell));
        if(date('w',$thisCellDate)==0 || date('w',$thisCellDate)==6){
            echo "<td style='background:pink'>";

        }else{
            echo "<td>";
        }
        if(date("m",$thisCellDate)==date("m",strtotime($thisFirstDay))){
            echo date("Y-m-d",$thisCellDate);
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
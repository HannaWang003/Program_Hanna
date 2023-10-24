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
$n=5;
// 先算出今天星期幾
$todayWeek=date("N");
// 用設定的星期減掉今天的
$diff=$n-$todayWeek;
// 用這個差異去推算出設定的星期秒數
$lastMt=strtotime("$diff day");
$lastM=date("Y-m-d",$lastMt);
$nextMt=strtotime("+1 weeks",$lastMt);
echo $nexM=date("Y-m-d",$nextMt)."<br>";
for($i=1;$i<5;$i++){
$nextMt=strtotime("+1 week",$nextMt);
echo date("Y-m-d",$nextMt)."<br>";
}
?>
<h3>自已重寫一遍</h3>
<hr>

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
<?php
// 先算出第一天的秒數，以求出第一天是禮拜幾
$isFirstDt=strtotime(date("Y-m-1"));
// 這個月的第一天是禮拜w
$isFirstDw=date('w',$isFirstDt);
// 查出這個月有幾天
$isLastDays=date('t');
// 算這個月有幾周, 因為每個月一號不一定是在第一格，所以要先補滿格數，所以要加w格數，再除以7，無條件進位取整數，就是所需的周數
$weeks=ceil(($isLastDays+$isFirstDw)/7);
// 假如說這個月不是從禮拜日開始，所以就不會是從第一格開始填日期，這時可以用下述程式碼，算出第一格的日期
$isFirstCellt=strtotime("-$isFirstDw days",$isFirstDt);
$isFisrtCell=date("Y-m-d",$isFirstCellt);
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
// 印出$weeks週，因為第一週設為0
for($j=0;$j<$weeks;$j++){
echo "<tr>";
// 一週有7天，因為第一格會先抓出來，所以從0開始
for($i=0;$i<7;$i++){
    echo "<td>";
    $date=7*$j+$i;
    // 先算出該欄位的秒數，之後再轉為date
    $isCellDt=strtotime("$date days",$isFirstCellt);
    // 承上轉為date
    $isCellD=date("m-d",$isCellDt);
    $isCellM=date("m",$isCellDt);
// 因為第一天設定為0，所以設定會是小於這個月總天數
//因為每行會印出完整的7個天數的日期
// 以下判斷式用於不要印出非本月的日期，所以會排除上個月和下個月的
// 只要月份和這個月不一樣就不要印，相反就是相同就要印
    if($isCellM==date("m") ){
        echo $isCellD;
    }

    echo "</td>";
}
echo "</tr>";
}
echo "</table>";
?>

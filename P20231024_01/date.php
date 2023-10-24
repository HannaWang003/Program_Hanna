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
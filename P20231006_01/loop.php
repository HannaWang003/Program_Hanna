<?php
// 常用html
$hr="<hr align='left' color='#DABABB' size='5'>";
$hr1="<hr align='left' color='#DABABB' style='width=50%'>";
$br="<br>";
?>
<?php
$sum=0;
for($i=0;$i<=100;$i=$i+1){
    $sum=$sum+$i;
    if($sum%2>0){
echo $sum."*,";
    }
    else{
        echo $sum."XX,";
    }
}
echo "1加到100的結果是" . $sum;
?>
<h1>迴圈練習</h1>
<h3>使用for迴圈來產生以下的數列</h3>

<?php
for($i=1;$i<=100;$i+=2){
    echo "$i,";
}
print "<hr>";
$n=10;
for($i=1;$i<=$n;$i++){
echo $i*$n.",";
}
print "<hr>";
?>
<h3>巢狀迴圈</h3>
<?php
$a=4;
$flag=true;
for($i=2;$i<=($a/2);$i++){
    echo $a."除以".$i."餘數".($a % $i)."<br>";
    if(($a % $i) == 0){
        $flag=false;
        break;
    }
    echo "<br>";
}
if($flag){
    echo $a."是質數";
}
else{
    echo $a."不是質數";
}
print $hr;
?>
<!-- <hr align="left" color="#DABABB" size="5"> -->
<?php
$n=100;
$count=0;
for($j=3;$j<=$n;$j++){
    $flag=true;
    for($i=2;$i<=($j/2);$i++){
        $count++;
        if(($j % $i) == 0){
            $flag=false;
            break;
        }
    }
   if($flag){
    echo $j."是質數<br>";
   } 
   else{
    // echo $j."不是質數<br>";
   }   
}
echo "程式共執行了".$count."次";
print $hr;
?>
<h3>陣列</h3>
<?php
echo "<h2>for(){}</h2>";
$a=['甲','乙','丙','丁'];
for($i=0;$i<count($a);$i++){
    echo $a[$i];
}
echo $i;
echo $hr1;
echo "<h2>foreach(){}</h2>";
foreach($a as $val){
    echo $val.$br;
}
print $br;
foreach($a as $key => $val){
    echo $key."=>".$val.",&nbsp";
}
print $br;
?>
<?php
echo "<h1>HW-建立一個學生成陣列</h1>";
/*
$student=[
    1=>"judy",2=>"amo",3=>"john",4=>"peter",6=>"hebe"];
    echo "<pre>";
print_r($student);
echo "</pre>";*/

$students=[
    1=>["judy"=>[
        "國文"=>95,
        "英文"=>64,
        "數學"=>70,
        "地理"=>90,
        "歷史"=>84,
    ]],
    2=>["amo"=>[
        "國文"=>88,
        "英文"=>78,
        "數學"=>54,
        "地理"=>81,
        "歷史"=>71,
    ]],
    3=>["john"=>[
        "國文"=>45,
        "英文"=>60,
        "數學"=>68,
        "地理"=>70,
        "歷史"=>62,
    ]],
    4=>["peter"=>[
        "國文"=>59,
        "英文"=>32,
        "數學"=>77,
        "地理"=>54,
        "歷史"=>42,
    ]],
    5=>["hebe"=>[
        "國文"=>71,
        "英文"=>62,
        "數學"=>80,
        "地理"=>62,
        "歷史"=>64,
    ]]];
    echo "<pre>";
print_r($students);
echo "</pre>";

echo "<br><hr><br>";
?>



<style>
* {
    box-sizing: border-box;
    margin: 0;
}

table,
tr,
td {
    border: 1px solid black;
    border-collapse: collapse;
}

td {
    padding: 5px;
}
</style>

<?php
echo "<h1>以乘式來產生陣列</h1>";
for($j=1;$j<=9;$j++){
for($i=1;$i<=9;$i++){
 $nine[] = "$j * $i =".$i*$j;
}
}
echo "<pre>";
print_r($nine);
echo "</pre>";
echo "<br><hr><br>";

echo "<h1>換行-乘式</h1>";
foreach($nine as $key => $val){
echo $val;
if($key%9==8){
    echo "<br>";
}
}
echo "<br><hr><br>";

echo "<h1>table-乘式</h1>";
echo "<table>";
echo "<tr>";
foreach($nine as $key => $val){
    echo "<td>$val</td>";
    if($key%9==8){
        echo "</tr><tr>";
    }
}
echo "</tr>";
echo "</table>";
echo "<br><hr><br>";

echo "<h1>利用for迴圈-威力彩電腦選號沒有重覆號碼</h1>";
// in_array();
$lotte=[];
for($i=1;$i<=6;$i++){
    $num=rand(1,38);
if(!in_array($num,$lotte)){
    $lotte[]=$num;
}
else{
    $i--;
}
 
}
print_r($lotte);
echo "<br><hr><br>";

echo "<h1>利用while迴圈-威力彩電腦選號沒有重覆號碼</h1>";
while(count($lotte) < 6){
    $num = rand(1,38);
    if(!in_array($num,$lotte)){
        $lotte[]=$num;
    }
}
foreach($lotte as $n){
    echo "$n,";
}
echo "<br>";
echo count($lotte);
print_r($lotte);
echo "<br><hr><br>";

echo "<h1>找出500年內的閏年</h1>";
$years=[];
for($year=2023;$year<=2523;$year++){
if(($year%4==0 && $year%100 != 0) || $year%400==0){
    // echo $year."是閏年";
    $years[]=$year;
}
}
echo "<pre>";
print_r($years);
echo "</pre>";
foreach($years as $num){
    echo $num."<br>";
}
echo "共".count($years)."年";
echo "<br><hr><br>";

echo "<h1>設計一個可以用西元判斷對應的天干地支</h1>";
// https://mackliu.github.io/php-book/2021/09/19/basic-lesson-03/

$year= 2020;
$sky=[ '甲',    '乙',    '丙',    '丁',    '戊',    '己',    '庚',    '辛',    '壬',    '癸',    ];
$land=[ '子',    '丑',    '寅',    '卯',    '辰',    '巳',    '午',    '未',    '申',    '酉',    '戌',    '亥',];
echo "西元".$year."是";
echo $sky[($year-1024)%10];
echo $land[($year-1024)%12];
echo "年";
echo "<br><hr><br>";

echo "<h1>反轉陣列內的值,以不增加新的陣列方式</h1>";
$a=[2,4,6,1,8,27,18,33];
echo "<pre>";
print_r($a);
echo "</pre>";;
$num=count($a);
for($i=0;$i<floor($num/2);$i++){
    $tmp=$a[$i];
    $a[$i]=$a[$num-1-$i];
    $a[count($a)-1-$i]=$tmp;
}
echo "<pre>";
print_r($a);
echo "</pre>";
?>
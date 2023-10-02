<?php
print "<h1>if...else</h1>";
$score=-50;
$score+=20;
echo "我的成績是".$score."<br>";
echo "判斷結果為:";
if($score>=60){
    echo "及格";
}
else{
    echo "不及格";
}    

print "<hr>";

$sex="女";
echo "我是".$sex."生<br>";
echo "判斷為:";
if($sex=="女"){
    echo "beautiful";
}
else{
    echo "帥";
}

print "<hr>";
print "<h1>switch...case</h1>";
$level=3;
switch ($level) {
    case '1':
        echo "特級品";
        break;
        case '2':
            echo "優等品";
            break;
            case '3':
                echo "上等品";
                break;
    default:
        echo "一般";
        break;
}
print "<hr>";
echo "<h2>練習</h2>";
print "我是使用switch...case<br>";
print "<b style='color:red';>switch建議只能放值或字元，不建議放判斷式，所以如果要寫判斷式請使用if else</b><br>";

echo "分數為".$score."<br>判斷級數為:";
switch($score){
    case $score<100 && $score>=90:
        echo "A";
        break;
        case $score>=80:
            echo "B";
            break;
            case $score>=70:
            echo "C";
            break;
            case $score>=60:
            echo "D";
            break;
            case $score>=0:
            echo "E";
            break;
            default:
            echo "<br>成績錯誤無法判斷";

}
echo "等級";
print "<hr>";
print "老師是使用if...else<br>";
echo "成縝為:".$score."<br>";
echo "等級為:";
if($score>=90 && $score<=100){
    $level="A";
}
else if($score>=80 && $score<=89){
    $level="B";
}
else if($score>=70 && $score<=79){
    $level="C";
}
else if($score>=60 && $score<=69){
    $level="D";
}
else if($score>=0){
    $level="E";
}
else echo "成績錯誤無法判斷";
?>
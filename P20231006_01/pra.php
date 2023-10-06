<?php
// 常用html
$hr="<hr align='left' color='#DABABB' size='5'>";
$hr1="<hr align='left' color='#DABABB' style='width=50%'>";
$br="<br>";
?>
<h2>閏年判斷，給定一個西元年份做判斷(複雜巢狀)</h2>
<?php
$year=800;
echo "年份".$year;
print $br;
if($year%4==0){
//把可以被4整除的年份抓出來
    if($year%100!=0){
        //可以被4整除但是沒辦法被100整除的年份
    echo $year."是閏年";
}
    else{
        if($year%400==0){
            echo $year."是閏年";
        }
    else{
        echo $year."是平年";
    }
    }
}
else{
    echo $year."是平年";
}
print $hr1;
echo "<h2>閏年判斷，給定一個西元年份做判斷(簡化巢狀)</h2>";
if($year%4==0){
    if($year%100 != 0 || $year%400==0){
        echo $year."是閏年";
    }
    else{
        echo $year."是平年";
    }
}
else{
    echo $year."是平年";
}

print $hr1;
echo "<h2>閏年判斷，給定一個西元年份做判斷(簡化巢狀)</h2>";
if(($year%100 != 0 || $year%400==0) && $year%4==0){
        echo $year."是閏年";}
else{
    echo $year."是平年";
}
//這個判斷式中只有一個邏輯運算符（||）和三個取餘數的運算（%）。由於只有一個邏輯運算符，計算的順序相對簡單。
//而因為&&的判斷順序優先於||，所以此狀況不管有沒有加內括號的結果都是一樣的。
print $hr1;
echo "<h2>閏年判斷，給定一個西元年份做判斷(簡化巢狀)</h2>";
if(($year%4==0 && $year%100 != 0) || $year%400==0){
        echo $year."是閏年";}
else{
    echo $year."是平年";
}

?>
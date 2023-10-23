<?php
echo "<h1>print_r()列印陣列</h1>";
// 列印陣列
$array=[3,2,7,10,30,17];
echo "<pre>";
print_r($array);
echo "<pre>";
echo "<br><hr><br>";

echo "<h1>sort()由小到大排列</h1>";
// 由小到大排列
$array=[3,2,7,10,30,17];
sort($array);
echo "<pre>";
print_r($array);
echo "<pre>";
echo "<br><hr><br>";

echo "<h1>rsort()由大到小排列</h1>";
// 由大到小排列
$array=[3,2,7,10,30,17];
rsort($array);
echo "<pre>";
print_r($array);
echo "<pre>";
echo "<br><hr><br>";

echo "<h1>in_array()確認有沒在陣列裡</h1>";
$array=[3,2,7,10,30,17];
echo "<pre>";
echo in_array(10,$array);
echo "<pre>";
if(in_array(10,$array)){
    echo "數字在陣列中";
}
else{
    echo "數字不在陣列中";
}
echo "<br><hr><br>";

echo "<h1>array_keys()把key取出來另設成一個陣列</h1>";
$array=[3,2,7,10,30,17];
$tmp=array_keys($array);
echo "<pre>";
print_r($tmp);
echo "<pre>";
echo "<br><hr><br>";

echo "<h1>explode()用字元分割字串</h1>";
$ss="today is a good day";
$tt=explode(" ",$ss);
print_r($tt);
echo "<br><hr><br>";

echo "<h1>implode()用字元分割字串</h1>";
$cc=implode("//",$tt);
echo $cc;

echo "<br><hr><br>";


?>
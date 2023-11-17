<?php
// 自訂函式
$c=123;
function sum($a,$b){
    global $c;
    $sum=$a+$b+$c;  
    echo "test";  
    return $sum; 
}
print(sum(10,60));
?>
<h2>不定參數的用法</h2>
<?php
function sum2(...$arg){
    $sum=0;
    foreach($arg as $num){       
if(is_numeric($num)){
    $sum+=$num;
}
    }
    return $sum;
}
echo sum2(1,2,3,4,5,"AAA",10);

?>
<?php
$sum=0;
for($i=0;$i<=100;$i=$i+1){
    $sum=$sum+$i;
    if($sum%2>0){
echo $sum."*<br>";
    }
    else{
        echo $sum."XX<br>";
    }
}
echo "1加到100的結果是" . $sum;
?>
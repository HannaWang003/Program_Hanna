<style>
* {
    font-family: 'Courier New', Courier, monospace;
}

.container {
    margin: auto;
    width: 80vw;
    background-color: rgb(239, 194, 15);
    border-radius: 20px;
    padding-bottom: 20px;
    font-size: 15px;
    font-weight: bold;
    color: white;
}

h2 {
    background-color: blanchedalmond;
    text-align: center;
    color: black;
    padding: 10px;
}
</style>
<div class="container">
    <h2>直角三角形</h2>
    <?php
$n=23;
for($j=1;$j<=$n;$j++){
for($i=1;$i<=$j;$i++){
    echo "*";
}
echo "<br>";
}
?>
</div>
<div class="container">
    <h2>倒直角三角形</h2>
    <?php

for($j=$n;$j>=1;$j--){
for($i=1;$i<=$j;$i++){
    echo "*";
}
echo "<br>";
}
?>
</div>
<div class="container">
    <!-- 裡面放2個迴圈，一個是空白，一個是*; -->
    <h2>正三角形</h2>
    <?php

for($j=0;$j<$n;$j++){
for($k=1;$k<=$n-$j;$k++){
    echo "&nbsp;";
}
for($i=1;$i<=$j*2+1;$i++){
    echo "*";
}
echo "</br>";
}
?>
</div>
<div class="container">
    <h2>倒正三角形</h2>
    <?php

for($j=$n-1;$j>=0;$j--){
for($k=1;$k<=$n-$j;$k++){
    echo "&nbsp;";
}
for($i=1;$i<=$j*2+1;$i++){
    echo "*";
}
echo "</br>";
}
?>
</div>
<div class="container">
    <h2>菱形</h2>
    <?php
$mid=floor($n/2);
for($j=0;$j<$n;$j++){
    if($j<=$mid){
        $tmp=$j;
    }
    else{
        $tmp--;
    }
for($k=1;$k<=$mid-$tmp;$k++){
    echo "&nbsp;";
}
for($i=1;$i<=$tmp*2+1;$i++){
    echo "*";
}
echo "</br>";
}
?>
</div>
<div class="container">
    <h2>矩形</h2>
    <?php

for($j=1;$j<=$n;$j++){
    echo "*";
    for($i=1;$i<=$n-2;$i++)
if($j==1 || $j==$n){
    echo "*";
}
else {
    echo "&nbsp;";
}
echo "*<br>";
}


?>
</div>
<div class="container">
    <h2>矩形內部有對角線</h2>
    <?php

for($j=1;$j<=$n;$j++){
    echo "*";
    for($i=1;$i<=$n-2;$i++)
if($j==1 || $j==$n || $i==$j-1 || $i+$j==$n){
    echo "*";
}

else {
    echo "&nbsp;";
}
echo "*<br>";
}


?>
</div>
</div>
<div class="container">
    <h2>矩形內部有對角線改成紅色</h2>
    <?php

for($j=1;$j<=$n;$j++){
    echo "*";
    for($i=1;$i<=$n-2;$i++)
if($j==1 || $j==$n){
    echo "*";
}
elseif($i==$j-1 || $i+$j==$n){
    echo "<span style='color:red'>*</span>";
}
else {
    echo "&nbsp;";
}
echo "*<br>";
}


?>
</div>
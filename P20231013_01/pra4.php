<style>
* {
    font-family: 'Courier New', Courier, monospace;
}
</style>
<div class="container">
    <h2>直角三角形</h2>
    <?php
$n=5;
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
$n=5;
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
$n=5;
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
$n=5;
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
$n=10;
for($j=0;$j<$n;$j++){
    if($j<=$n/2-1){
        $tmp=$j;
    }
    else{
        $tmp--;
    }
for($k=1;$k<=$n/2-$tmp;$k++){
    echo "&nbsp;";
}
for($i=1;$i<=$tmp*2+1;$i++){
    echo "*";
}
echo "</br>";
}
?>
</div>
<style>
* {
    font-family: 'Courier New', Courier, monospace;
    /* line-height: 10px; */
}
</style>
<?php
equilateral_triangle(15);
diamond(30);
rectangle(20);

?>
<!-- function -->
<!-- <h2>正三角形</h2> -->
<?php
function equilateral_triangle($size){
    for($i=0;$i<$size;$i++){
        for($j=0;$j<($size-1-$i);$j++){
            echo "&nbsp;";
        }
        for($k=0;$k<($i*2+1);$k++){
            echo "*";
        }
        echo "<br>";
    }
}
?>
<!-- <h2>菱形</h2> -->
<?php
function diamond($size){
    $mid=floor(($size*2 -1)/2);
    $tmp=0;
    for($i=0;$i<($size * 2 -1);$i++){
    
        if($i<=$mid){
            $tmp=$i;
        }else{
            $tmp--;
        }
    
        for($j=0;$j<($mid-$tmp);$j++){
            echo "&nbsp;";
        }
        for($k=0;$k<($tmp*2+1);$k++){
            echo "*";
        }
        echo "<br>";
    }
}
?>
<!-- <h2>矩形</h2> -->
<?php
function rectangle($size){
for($i=0;$i<$size;$i++){

    for($j=0;$j<$size;$j++){
        if($i==0 || $i==($size-1)){
            echo "*";
        }else if($j==0 || $j==($size-1)){
            echo "*";
        }else{
            echo "&nbsp;";
        }

    }
    echo "<br>";
}
}
?>
<!-- function_end -->
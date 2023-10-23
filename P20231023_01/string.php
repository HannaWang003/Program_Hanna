<h2>字串取代</h2>
<?php
$s="aaddw1123";
$t=str_replace('a','*',$s);
echo $t;
echo "<br>";
echo str_repeat("*",mb_strlen($s));

?>
<br>
<hr><br>
<h2>字串分割</h2>
<?php
$s="this is a book !";
$a=explode(" ",$s);

echo "<pre>";
print_r($a);
echo "</pre>";
?>
<br>
<hr><br>
<h2>字串組合</h2>
<?php
echo $a=join(" ",$a);
?>

<br>
<hr><br>
<h2>子字串取用</h2>
<?php
echo mb_substr($a, 5, 3);
echo "<br>";
$a="我是誰?猜猜看??";
echo mb_substr($a, 5, 3);
?>
<br>
<hr><br>
<h2>尋找字串與HTML、css整合應用</h2>
<ol type="a">
    <li>給定一個句子，將指定的關鍵字放大</li>
    <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
    <li>請將上句中的 “程式設計” 放大字型或變色.</li>
</ol>
<?php
$a="學會PHP網頁程式設計，薪水會加倍，工作會好找程式設計";
$focus="程式設計";
echo mb_strlen($focus)."<br>";
echo str_replace($focus,"<span style='font-size:2rem;color:green'>".$focus."</span>",$a);
?>
<br>
<hr><br>
<?php
for($i=0;$i<strlen($a);$i+=3){
    echo $a[$i];
    echo $a[$i+1];
    echo $a[$i+2];
    // echo "<br>";
}
?>
<br>
<hr><br>
<h2>測試</h2>


<?php
$s= "在程式設計這程式設計段文程式設計章中，有重複出現多個「程式設計」的字串，如果只要讓第三個「程式設計」的字串變成紅色，該怎麼寫？";
$n=5;
$str="設計";
$a=explode($str,$s);
echo "<pre>";
print_r($a);
echo "</pre>";
// echo $a[2];
$a[$n-1]=$a[$n-1]."<span style='color:red;'>";
$a[$n]="</span>".$a[$n];
echo "<pre>";
print_r($a);
echo "</pre>";
echo join($str,$a);
?>
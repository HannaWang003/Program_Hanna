<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="./index.html">連結到index.html檔</a>
    <hr>
    <?php
$age = 30;
echo $age;
$name =  "Hanna";
echo $name.'<hr>';
// 練習: 交換2個變數的值
$a=15;
$b=43;
echo '原本<br>$a='.$a.'<br>$b='.$b.'<hr>';
$c=$b;
$b=$a;
$a=$c;
echo '<br>交換後<br>$a='. $a.'<br>$b='.$b;

?>
</body>

</html>
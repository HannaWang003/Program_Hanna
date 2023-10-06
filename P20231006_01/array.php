<?php
$hr="<hr align='left' color='#DABABB' size='5'>";
$br="<br>";
$nbsp="&nbsp";
?>
<?php
// $a=array();
$a=[];
$a[]=10;
$a[]=30;
$a[]="泰山";
$a[]="新莊";
echo "<pre>";
print_r($a);
echo "</pre>";
echo $a[0];
echo $a[1+1];
echo $hr;

$b=[];
$b["姓名"]="HannaWang";
$b['最高學歷']="高雄第一科大";
$b['tel']="0977404068";
$b['血型']="B";
echo "<pre>";
print_r($b);
echo "</pre>";
echo $b['姓名']."&nbsp&nbsp".$b['tel'];
echo $hr;

$c=[];
$c['姓名']="HannaWang";
$c['興趣']=['購物','旅遊','看電視'];
echo "<pre>";
print_r($c);
echo "</pre>";
echo $c['姓名']."的興趣是:".$br.$c['興趣'][0].$br.$c['興趣'][1].$br.$c['興趣'][2];
?>
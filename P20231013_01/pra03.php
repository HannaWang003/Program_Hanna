<h1>尋找字串</h1>
<!-- 如果知道字串長度就可以用for，但這個狀況不確定要循環的次數時就用while -->

<h1>尋找字串</h1>
<?php
$source="印出尋找到的單字或字母所在句子中的尋找到位置";
$target="尋找到";
$flag="沒找到";
$start=10;
while($flag=="沒找到"){
    // $tmp=mb_substr($source,$start,mb_strlen($target));
    $tmp=mb_substr($source,$start,mb_strlen($target));
    if($tmp==$target){
        $flag="找到";
        break;
    }
    $start++;
}
echo "找到了;位置在".$start."<br>";
echo "原始字串-$source";
echo "<br>";
echo "尋找目標字母-$target";
?>
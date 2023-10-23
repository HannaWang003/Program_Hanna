<?php
echo "<h1>HW-建立一個學生成陣列</h1>";
/*
$student=[
    1=>"judy",2=>"amo",3=>"john",4=>"peter",6=>"hebe"];
    echo "<pre>";
print_r($student);
echo "</pre>";*/

$students=[
    1=>["judy"=>[
        "國文"=>95,
        "英文"=>64,
        "數學"=>70,
        "地理"=>90,
        "歷史"=>84,
    ]],
    2=>["amo"=>[
        "國文"=>88,
        "英文"=>78,
        "數學"=>54,
        "地理"=>81,
        "歷史"=>71,
    ]],
    3=>["john"=>[
        "國文"=>45,
        "英文"=>60,
        "數學"=>68,
        "地理"=>70,
        "歷史"=>62,
    ]],
    4=>["peter"=>[
        "國文"=>59,
        "英文"=>32,
        "數學"=>77,
        "地理"=>54,
        "歷史"=>42,
    ]],
    5=>["hebe"=>[
        "國文"=>71,
        "英文"=>62,
        "數學"=>80,
        "地理"=>62,
        "歷史"=>64,
    ]]];
    echo "<pre>";
print_r($students);
echo "</pre>";

echo "<br><hr><br>";
?>



<style>
* {
    box-sizing: border-box;
    margin: 0;
}

table,
tr,
td {
    border: 1px solid black;
    border-collapse: collapse;
}

td {
    padding: 5px;
}
</style>

<?php
echo "<h1>以乘式來產生陣列</h1>";
for($j=1;$j<=9;$j++){
for($i=1;$i<=9;$i++){
 $nine[] = "$j * $i =".$i*$j;
}
}
echo "<pre>";
print_r($nine);
echo "</pre>";
echo "<br><hr><br>";

echo "<h1>換行-乘式</h1>";
foreach($nine as $key => $val){
echo $val;
if($key%9==8){
    echo "<br>";
}
}
echo "<br><hr><br>";

echo "<h1>table-乘式</h1>";
echo "<table>";
echo "<tr>";
foreach($nine as $key => $val){
    echo "<td>$val</td>";
    if($key%9==8){
        echo "</tr><tr>";
    }
}
echo "</tr>";
echo "</table>";
?>
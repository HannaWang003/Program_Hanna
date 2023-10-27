<?php
if(!empty($_GET['weight'] || !empty($_GET['height']))){ 
    $weight=(!empty($_GET['weight']))?$_GET['weight']:'沒有體重資料';
    $height=(!empty($_GET['height']))?$_GET['height']:'沒有身高資料';

    $bmi=round($weight/($height*$height),2);
// echo "<br>";
// echo "身高:&nbsp;".$weight;
// echo "<br>";
// echo "體重:&nbsp;".$height;
// echo "BMI:".$bmi;
//
header("location:bmi.php?w=$weight&h=$height&bmi=$bmi");


}else{  

    header("location:bmi.php?m=請輸入必要的資訊");

}

?>
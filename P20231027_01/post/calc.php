<?php
if(!empty($_POST)){
 
    $weight=(!empty($_POST['weight']))?$_POST['weight']:'沒有體重資料';
    $height=(!empty($_POST['height']))?$_POST['height']:'沒有身高資料';
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
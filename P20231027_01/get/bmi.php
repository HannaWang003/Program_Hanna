<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算BMI</title>
</head>

<body>
    <h2>計算BMI</h2>
    <?php
if(!isset($_GET['bmi'])){
    if(isset($_GET['m'])){
        echo "<span style='red'>".$_GET['m']."</span>";
    }
    ?>
    <form action="calc.php" method="GET">
        <div>
            <label for="height">身高(公尺)</label>
            <input type="text" name="height" id="height">
        </div>
        <div>
            <label for="weight">體重(公斤)</label>
            <input type="number" name="weight" id="weight">
        </div>
        <br>
        <!-- 體重(公斤)/身高(公尺)的平方 -->
        <input type="submit" value="計算BMI">
        <input type="reset" value="重置">
    </form>
    <hr>
    <?php
    }
    else{
echo "身高:&nbsp;".$_GET['w']."公斤";
echo "<br>";
echo "體重:&nbsp;".$_GET['h']."公尺";
echo "<br>";
echo "BMI:".$_GET['bmi'];
    }
?>
</body>

</html>
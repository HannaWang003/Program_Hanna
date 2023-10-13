<style>
.container {
    margin: auto;
    background-color: rgb(252, 186, 166);
    width: 80vw;
    padding: 5vw;
}

.nav {
    margin: auto;
    height: 5vh;
    width: 80vw;
    padding: 5vw;
    background-color: rgb(122, 77, 113);
}

.top {
    display: flex;
    position: fixed;
    bottom: 20px;
    right: 20px;
}

.top>a {
    font-size: 50px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    text-decoration: none;
    padding: 2px;
    color: aliceblue;
    background-color: rgb(236, 65, 131);
    border-radius: 50px 5px 0 5px;
}

nav {
    line-height: 5vh;
    display: flex;
    justify-content: space-around;
}

nav>a {
    font-family: "微軟正圓體";
    color: aliceblue;
    text-decoration: underline overline;
}

table,
tr,
td {
    /* border: 1px solid black; */
}

.container>h2 {
    text-align: center;
    background-color: rgba(25, 21, 48, 0.5);
    color: lemonchiffon;
    border-radius: 20px;
    padding: 10px;
}

td>h3 {
    background-color: blanchedalmond;
    color: black;
}

table {
    margin: auto;
    width: 500px;
    background-color: rgb(164, 91, 110);
    border: 10px solid white;
    border-radius: 10px;
}


td {
    text-align: center;
    color: rgb(251, 251, 251);
    border: 2px dotted rgb(58, 46, 88);
    font-size: 20px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
</style>
<div class="nav">
    <nav>
        <a href="#multiplication">Multiplication</a>
        <a href="#multiplication1">交叉計算式表格顯示</a>
        <a href="#multiplication2">階梯式表格顯示</a>
    </nav>
</div>
<div id="multiplication" class="container">
    <h2>九九乘法表</h2>
    <table>
        <tr>
            <?php
$n=9;
$j=0;
for($j;$j<=$n;$j++){
    if($j==5){
        echo "</tr><tr>";
    }
    echo "<td><h3>".$j."</h3>";
$i=1;
for($i;$i<=$n;$i++){
     echo $j."x".$i."=".($j*$i)."<br>";
}
echo "</td>";
}    
?>
        </tr>
    </table>
</div>

<div id="multiplication1" class="container">
    <h2>交叉計算式表格顯示</h2>
    <table>
        <?php
$n=9;
$j=0;
for($j;$j<=$n;$j++){
echo "<tr>";
    $i=0;
for($i;$i<=$n;$i++){
    echo "<td>";
    if($i==0 && $j==0){
        echo "";
    }
    elseif($i==0){
        echo $j;
    }
    elseif(($j==0)){
        echo  $i;
    }
    else{

        echo $j*$i;
    }
     echo "</td>";
}
echo "</tr>";
}    
?>
    </table>
</div>

<div id="multiplication2" class="container">
    <h2>階梯式表格顯示</h2>
    <table>
        <?php
$n=9;
$j=0;
for($j;$j<=$n;$j++){
echo "<tr>";
    $i=0;
for($i;$i<=$n;$i++){
    echo "<td>";
    if($i==0 && $j==0){
        echo "";
    }
    elseif($i==0){
        echo $j;
    }
    elseif(($j==0)){
        echo  "$i";
    }
    elseif($i>=$j){

        echo $j*$i;
    }
    else{
        echo "";
    }
     echo "</td>";
}
echo "</tr>";
}    
?>
    </table>
</div>
<div class="top"><a href="#">TOP</a></div>
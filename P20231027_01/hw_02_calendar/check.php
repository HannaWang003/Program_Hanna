<?php
if(isset($_GET['P'])){
$thisMonth=-1;
header("location:calendar.php?month=$thisMonth");
}
elseif(isset($_GET['N'])){
    $thisMonth+=1;
    header("location:calendar.php?month=$thisMonth");
}

?>
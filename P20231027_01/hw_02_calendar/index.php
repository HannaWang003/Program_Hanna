<?php
if(isset($_GET['month']) && isset($_GET['year'])){
    $month=$_GET['month'];
    $year=$_GET['year'];
}
elseif(isset($_GET['pre'])){
    if($_GET['pre']-1<1){
      $month=12;
      $year=$_GET['year']-1;  
    }
    else{
    $month=$_GET['pre']-1;
    $year=$_GET['year'];
}
}
elseif(isset($_GET['next'])){
    if($_GET['next']+1>12){
      $month=1;
      $year=$_GET['year']+1;  
    }
    else{
    $month=$_GET['next']+1;
    $year=$_GET['year'];
    }
}
else{
    $month=date('m');
    $year=date('Y');
}
// $today=date("Y-m-d");
$monthD1=date("Y-{$month}-1");
$monthD1time=strtotime($monthD1);
$monthD1w=date('w',$monthD1time);
$preMonthDt=strtotime("-$monthD1w days",$monthD1time);
$preMonthD=date("Y-m-d",$preMonthDt);
$monthDend=date("t");
$monthDendtime=strtotime("Y-{$month}-$monthDend");
$row=ceil(($monthD1w+$monthDend)/7);

header("location:calendar.php?year=$year&month=$month&r=$row&FC=$preMonthDt")
?>
<?php
date_default_timezone_set('Asia/Taipei');
if(isset($_GET['month']) && isset($_GET['year'])){
    $month=$_GET['month'];
    $year=$_GET['year'];
}
// 執行pre開始
elseif(isset($_GET['pre'])){
    if($_GET['pre']-1<1){
      $month=12;
      $year=$_GET['year']-1; 
      if($month-1<1){
        $premonth=12;
        $preyear=$year-1;  
      }
      else{
      $premonth=$month-1;
      $preyear=$year;
  }   
  if($month+1>12){
    $nextmonth=1;
    $nextyear=$year+1;  
  }
  else{
  $nextmonth=$month+1;
  $nextyear=$year;
  }     
    }
    else{
    $month=$_GET['pre']-1;
    $year=$_GET['year'];
    if($month-1<1){
      $premonth=12;
      $preyear=$year-1;  
    }
    else{
    $premonth=$month-1;
    $preyear=$year;
}   
if($month+1>12){
  $nextmonth=1;
  $nextyear=$year+1;  
}
else{
$nextmonth=$month+1;
$nextyear=$year;
}    
}
}
// 執行pre結束

// 執行next開始
elseif(isset($_GET['next'])){
    if($_GET['next']+1>12){
      $month=1;
      $year=$_GET['year']+1;
      if($month-1<1){
        $premonth=12;
        $preyear=$year-1;  
      }
      else{
      $premonth=$month-1;
      $preyear=$year;
  }   
  if($month+1>12){
    $nextmonth=1;
    $nextyear=$year+1;  
  }
  else{
  $nextmonth=$month+1;
  $nextyear=$year;
  }      
    }
    else{
    $month=$_GET['next']+1;
    $year=$_GET['year'];
    if($month-1<1){
      $premonth=12;
      $preyear=$year-1;  
    }
    else{
    $premonth=$month-1;
    $preyear=$year;
}   
if($month+1>12){
  $nextmonth=1;
  $nextyear=$year+1;  
}
else{
$nextmonth=$month+1;
$nextyear=$year;
}    
}
}
// 執行next結束
else{
    $month=date('m');
    $year=date('Y');
    if($month-1<1){
      $premonth=12;
      $preyear=$year-1;  
    }
    else{
    $premonth=$month-1;
    $preyear=$year;
}   
if($month+1>12){
  $nextmonth=1;
  $nextyear=$year+1;  
}
else{
$nextmonth=$month+1;
$nextyear=$year;
}    
}
for($i=0;$i<3;$i++){
  if($i==0){
    $month=$month;
  }
  elseif($i==1){
    $month=$premonth;
  }
  else{
    $month=$nextmonth;
  }
$monthA[]=$month;
$monthD1=date("Y-{$month}-1");
$monthD1time=strtotime($monthD1);
$monthD1w=date('w',$monthD1time);
$preMonthDt[]=strtotime("-$monthD1w days",$monthD1time);
$preMonthD=date("Y-m-d",$preMonthDt[$i]);
$monthDend=date("t");
$monthDendtime=strtotime("Y-{$month}-$monthDend");
$row[]=ceil(($monthD1w+$monthDend)/7);
}
echo "<pre>";
echo "</pre>";
header("location:calendar.php?year=$year&year1=$preyear&year2=$nextyear&month=$monthA[0]&month1=$monthA[1]&month2=$monthA[2]&r=$row[0]&r1=$row[1]&r2=$row[2]&FC=$preMonthDt[0]&FC1=$preMonthDt[1]&FC2=$preMonthDt[2]")
?>
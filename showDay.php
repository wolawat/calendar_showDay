<?php
$year=2021;
$month=$_POST['month'];
$date=$_POST['date'];
$YMD=$year."-".$month."-".$date;


$day=date('w', strtotime($YMD));
if($day == 1){
    echo "Monday";
}
else if($day == 2){
    echo "Tuesday";
}
else if($day == 3){
    echo "Wednesday";
}
else if($day == 4){
    echo "Thursday";
}
else if($day == 5){
    echo "Friday";
}
else if($day == 6){
    echo "Saturday";
}
else if($day == 7){
    echo "Sunday";
}
?>


<?php
 include "Celendar.php";
$year=2021;
$month=$_POST['month'];
$date=$_POST['date'];

$calender = new Calendar();

$calender->showDay($date,$month);

echo "<hi id=\"result\"> $result</h1>";

?>
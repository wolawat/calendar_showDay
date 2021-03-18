<?php
    class Calendar{
        public function showDay($date,$month){

        //Our YYYY-MM-DD date string.
        $day = "2021-$month-$date";
        //Convert the date string into a unix timestamp.
        $unixTimestamp = strtotime($day);
        //Get the day of the week using PHP's date function.
        $dayOfWeek = date("l", $unixTimestamp);
        //Print out the day that our date fell on.
        return $dayOfWeek;    
        }
        
    }
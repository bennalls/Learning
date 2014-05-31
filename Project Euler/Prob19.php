<?php

/*
  You are given the following information, but you may prefer to do some research for yourself.
  •1 Jan 1900 was a Monday.
  •Thirty days has September,
  April, June and November.
  All the rest have thirty-one,
  Saving February alone,
  Which has twenty-eight, rain or shine.
  And on leap years, twenty-nine.
  •A leap year occurs on any year evenly divisible by 4, but not on a century unless it is divisible by 400.

  How many Sundays fell on the first of the month during the twentieth century (1 Jan 1901 to 31 Dec 2000)?

 */

$start_time = microtime(TRUE);


//USING PHP DATE FUNCTIONS: (7 times slower)
/*
  $Weekday = "Sun";
  $day = 1;
  $countSundaysOnFirst = 0;
  date_default_timezone_set('UTC');

  for($year = 1901; $year <= 2000; $year++){
  for($month = 1; $month < 13; $month++){
  $tempDate = (string)($year."-".$month."-01");
  $Weekday1st = date('D', strtotime($tempDate));
  if($Weekday1st == 'Sun'){
 // echo $tempDate." ".$Weekday1st."<br />";
  $countSundaysOnFirst ++;
  }
  }
  }

  echo "Number of Sundays that are 1st Sunday of month: ".$countSundaysOnFirst;
 */





//NOT USING PHP DATE FUNCTIONS: (7 times quicker)
//Initalise values to starting Sunday (6 Jan 1901) - Check if
//every 7th day is the first of the month


$firstSundayOfMonth = 6;
$month = 1;
$year = 1901;
$daysInMonth = daysInMonthLookup($month, $year);
$countSundaysOnFirst = 0;

do {
    $firstSundayOfMonth = 7 - (($daysInMonth - $firstSundayOfMonth) % 7);

    //echo $firstSundayOfMonth."<br />";
    if($firstSundayOfMonth == 1){
        $countSundaysOnFirst++;
    }

    if ($month < 12) {
        $month++;
    } 
    else {
        $month = 1;
        $year++;

    }
    $daysInMonth = daysInMonthLookup($month, $year);


} while (!(($year == 2000) && ($month == 12)));
echo "Number of Sundays that are 1st Sunday of month: ".$countSundaysOnFirst;

function daysInMonthLookup($month, $year) {
    switch ($month) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            return 31;
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            return 30;
            break;
        case 2:
            if ($year % 4 == 0) {
                if ($year % 100 == 0) {
                    if ($year % 400 == 0) {
                        return 29;
                    } else {
                        return 28;
                    }
                } else {
                    return 29;
                }
            } else {
                return 28;
            }
    }
}
 

$end_time = microtime(TRUE);

echo "<br /> Script Time to run: ".($end_time - $start_time);


?>
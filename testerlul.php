<?php
$str1 = "Monday July 27 1300 1400 1500";
echo '<script>var timezone_offset_minutes = new Date().getTimezoneOffset();timezone_offset_minutes = timezone_offset_minutes == 0 ? 0 : -timezone_offset_minutes;document.cookie = "daud="+timezone_offset_minutes;</script>';
$timezone_offset_hours = $_COOKIE['daud']/60;
$words = explode(" ", $str1);
$datewrd = date_parse($words[1]);
$words[1] = $datewrd['month'];
$time = $words[3];
$time = (int)$time;
$time = $time + ($timezone_offset_hours*100);
$time = (string)$time;
if (strlen($time) == 3){
    $time = "0".$time;
}else if (strlen($time) == 1){
    $time = "000".$time;
}else if (strlen($time) == 2){
    $time = "00".$time;
}
$time = substr($time,0,2).':'.substr($time,2,2);
$words[3] = $time;
$year = date("Y");
$str1 = $words[1]."-".$words[2]."-".$year." ".$time;

$date = DateTime::createFromFormat('m-d-Y H:i', $str1);
$date = $date->format('D, M j, Y \a\t g:ia');
$date1 = date('D, M j, Y \a\t g:ia', $date);
var_dump($date);
?>
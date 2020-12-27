<?php
session_start();
use MrShan0\PHPFirestore\FirestoreClient;
require 'vendor/autoload.php';
echo '<script>var timezone_offset_minutes = new Date().getTimezoneOffset();timezone_offset_minutes = timezone_offset_minutes == 0 ? 0 : -timezone_offset_minutes;document.cookie = "daud="+timezone_offset_minutes;</script>';
$timezone_offset_minutes = $_COOKIE['daud'];
$ourstr = $timezone_offset_minutes."minutes";
$notif = "No";
function unvar_dump($str) {
    if (strpos($str, "\n") === false) {
        //Add new lines:
        $regex = array(
            '#(\\[.*?\\]=>)#',
            '#(string\\(|int\\(|float\\(|array\\(|NULL|object\\(|})#',
        );
        $str = preg_replace($regex, "\n\\1", $str);
        $str = trim($str);
    }
    $regex = array(
        '#^\\040*NULL\\040*$#m',
        '#^\\s*array\\((.*?)\\)\\s*{\\s*$#m',
        '#^\\s*string\\((.*?)\\)\\s*(.*?)$#m',
        '#^\\s*int\\((.*?)\\)\\s*$#m',
        '#^\\s*bool\\(true\\)\\s*$#m',
        '#^\\s*bool\\(false\\)\\s*$#m',
        '#^\\s*float\\((.*?)\\)\\s*$#m',
        '#^\\s*\[(\\d+)\\]\\s*=>\\s*$#m',
        '#\\s*?\\r?\\n\\s*#m',
    );
    $replace = array(
        'N',
        'a:\\1:{',
        's:\\1:\\2',
        'i:\\1',
        'b:1',
        'b:0',
        'd:\\1',
        'i:\\1',
        ';'
    );
    $serialized = preg_replace($regex, $replace, $str);
    $func = create_function(
        '$match', 
        'return "s:".strlen($match[1]).":\\"".$match[1]."\\"";'
    );
    $serialized = preg_replace_callback(
        '#\\s*\\["(.*?)"\\]\\s*=>#', 
        $func,
        $serialized
    );
    $func = create_function(
        '$match', 
        'return "O:".strlen($match[1]).":\\"".$match[1]."\\":".$match[2].":{";'
    );
    $serialized = preg_replace_callback(
        '#object\\((.*?)\\).*?\\((\\d+)\\)\\s*{\\s*;#', 
        $func, 
        $serialized
    );
    $serialized = preg_replace(
        array('#};#', '#{;#'), 
        array('}', '{'), 
        $serialized
    );

    return unserialize($serialized);
}

if (isset($_SESSION['loggedin'])){	

$email1 = $_SESSION['id'];
$id = $_SESSION['id'];	
}else if (isset($_SESSION['userData']['email_id'])){	
$id = $_SESSION['userData']['email_id'];
$email1 = $_SESSION['userData']['email_id'];	
}else if (isset($_SESSION['userData1']['email_id'])){	
$id = $_SESSION['userData1']['email_id'];
$email1 = $_SESSION['userData1']['email_id'];	
}

$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('users', ['pageSize' => 1000000]);
$counter = 0;
try{
while ($collections["documents"][$counter]->get('email') != NULL){    
if ($collections["documents"][$counter]->get('email') == $_SESSION['id']){
    $classes = $collections["documents"][$counter]->get('classes');
    break;
}else{
    $counter += 1;
}
}
}catch (\Throwable $t){
}

$counter1 = 0;

$somearr = array();
$counter3 = 0;
while ($classes[$counter1] != NULL){
$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments($classes[$counter1], ['pageSize' => 1000000]);
$counter = 0;
try{
while ($collections["documents"][$counter]->get('appointments') != NULL){
$var = $collections["documents"][$counter]->get('appointments')[0];
$array = (array) $var;
ob_start();
var_dump($array);
$array = ob_get_clean();
$array1 = substr($array, 0, -3);
$arraynew = substr($array1, 71, strlen($array1));
$var = unvar_dump($arraynew);
if ($var[0]["tutorEmail"] == $_SESSION['id']){
    $appointments = $collections["documents"][$counter]->get('appointments');
    $counter2 = 0;
    while ($appointments[$counter2] != NULL){
        $var = $collections["documents"][$counter]->get('appointments')[$counter2];
        $array = (array) $var;
        ob_start();
        var_dump($array);
        $array = ob_get_clean();
        $array1 = substr($array, 0, -3);
        $arraynew = substr($array1, 71, strlen($array1));
        $var = unvar_dump($arraynew);
        $counter2 += 1;
        if($var[0]["tutor_read"] == false){
            $string = $var[0]["uniqid"];
            $accept[$counter3] = substr($string, 0, 10);
            $reject[$counter3] = substr($string, 10, 10);
            $class[$counter3] = $classes[$counter1];
            $txn_id[$counter3] = $var[0]["txn_id"];
            $sdate1[$counter3] = $var[0]["time"];
            $sdate2[$counter3] = $var[0]["time"];
            $sixtoone[$counter3] = $var[0]["group_tutoring"]; 
            $counter3 += 1;
        }
    }
    break;
}else{
    $counter += 1;
}
}
}catch (\Throwable $t){
}
$counter1 += 1;
}

$count = $counter3;
?>
<div data-component="navbar">
  <div class="right-links float-right mr-4">        
    <div class="d-inline dropdown mr-3">
      <a class="dropdown-toggle" id="notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span id="countval"><?php echo $count; ?></span><i class="fa fa-bell"></i></a>
      <div class="dropdown-menu dropdown-menu-right rounded-0 pt-0" aria-labelledby="notifications">
        <div class="list-group">
          <div class="lg">
            <?php
            $counter = 0;
            if ($count != 0){
            while ($counter < $count){
            $message = "";
            $dates = "";
           if ($notifmsg[$counter] == "rejected"){
                $message = "Unfortunately, your request for your chosen tutor in class ".$class[$counter]." was rejected by the tutor. Please try to find a different tutor.";

$date1 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($sdate1[$counter])));
$date2 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($sdate2[$counter])));
                
                echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>';
                $dates = 'From '.$date1.' to '.$date2.'<br><div style="color:red; size:12px; cursor:pointer;" class="helpforus" id="close'.$accept[$counter].'" onClick="reply_click(this.id)" >Close</div>';
            } elseif ($notifmsg[$counter] == "accepted"){
                $message = "Good News! You will be receiving tutoring in class ".$class[$counter].", as you had requested.";
                if ($tdate1[$counter] == NULL && $tdate2[$counter] == NULL){
$date1 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($sdate1[$counter])));
$date2 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($sdate2[$counter])));
                    
                }
                else{
$date1 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($tdate1[$counter])));
$date2 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($tdate2[$counter])));
                    
                } 
                echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>';
                $dates = 'From '.$date1.' to '.$date2.'<br><div style="color:red; size:12px; cursor:pointer;" id="close'.$accept[$counter].'" class="helpforus" onClick="reply_click(this.id)">Close</div>';
            } elseif ($notifmsg[$counter] == "accepted_straight"){
$date1 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($tdate1[$counter])));
$date2 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($tdate2[$counter])));
$date3 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($sdate1[$counter])));
$date4 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($sdate2[$counter])));
                $message = "Good news! Your requested tutor for the course ".$class[$counter]." is able to tutor from ".$date3." to ".$date4."! Please accept or decline the request below.";
                $accept = 'https://www.fibonia.com/response1.php?email=' . $email . '&code=' . 	$accept[$counter];
                $reject = 'https://www.fibonia.com/response1.php?email=' . $email . '&code=' . 	$reject[$counter];
                $dates = 'From '.$date3.' to '.$date4.' <br><a style="color:green;" href="'.$accept.'">Accept</a><a style="color:red;" href="'.$reject.'"> Reject</a>';
            } elseif ($notifmsg[$counter] == "Paid"){
                if ($tdate1[$counter] == NULL && $tdate2[$counter] == NULL){
$date1 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($sdate1[$counter])));
$date2 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($sdate2[$counter])));
                    
                }
                else{
$date1 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($tdate1[$counter])));
$date2 = date('D, M j, Y \a\t g:ia', strtotime($ourstr, strtotime($tdate2[$counter])));
                    
                } 
                $ourpaymentredirect = "https://www.fibonia.com/1/html/pair.php?code=".$uniqid3[$counter];
                $message = 'Good News! You will be receiving tutoring in class '.$class.', as you had requested. To chat with your tutor for this class, please click <a href="'.$ourpaymentredirect.'">here</a>';
                $dates = 'From '.$date1.' to '.$date2.'<br><div style="color:red; size:12px; cursor:pointer;" id="close'.$accept[$counter].'" class="helpforus" onClick="reply_click(this.id)">Close</div>';  
            }

              echo '<div class="list-group-item list-group-item-action flex-column align-items-start" id="'.$accept[$counter].'"><h5 class="mb-1">'.$message.'</h5><p class="mb-0">'.$dates.'</p></div>';  
                $counter++;
            }}else{
                echo '<style>[data-component="navbar"] .list-group .lg {height: 50px !important;width: 301px;overflow: auto;}</style>';
                echo '<div class="list-group-item list-group-item-action flex-column align-items-start"><h5 class="mb-1">No notifications at this moment!</h5><p class="mb-0"></p></div>'; 
            }
            
            echo '<link href="message3.css" rel="stylesheet" id="bootstrap-css">';

            echo '<div id="lastfield" style="z-index:-1;opacity:0;" class="list-group-item list-group-item-action flex-column align-items-start"><h5 class="mb-1">No notifications at this moment!</h5><p class="mb-0"></p></div>'; 
            echo '<script>var ourid = ""; function reply_click(clicked_id){ourid = clicked_id;} </script>';
            echo '<script>$(document).ready(function() {$(".helpforus").on("click", function() {if(5 == 5){var countval = document.getElementById("countval").innerText; ourid = ourid.substr(5); $.ajax({url: "updatenotif.php",type: "POST",data: {ourid: ourid},cache: false,success: function(dataResult){var dataResult = JSON.parse(dataResult);if(dataResult.statusCode==200){document.getElementById(ourid).remove(); if (countval == 1){document.getElementById("countval").textContent=countval-1;document.getElementById("lastfield").style.opacity = "1";document.getElementById("lastfield").style.zIndex = "1";var c = document.getElementsByClassName("lg");for (var i=0; i<c.length; i++) {c[i].style.height = "50px";}}else{document.getElementById("countval").textContent=countval-1;}}}});}});})</script>';
            ?>
          </div>
        </div>
      </div>
    </div>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <style>@import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800");

.html{
    background-color:rgba(0,0,0,0)!important;
}

.body{
    background-color:rgba(0,0,0,0)!important;
}

button .focus, a .focus {
    outline: 0;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
}

 button:focus, a:focus {
    outline: 0;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
}

[data-component='navbar'] {
}

[data-component='navbar'] .navbar {
    background-color: #fff;
}

[data-component='navbar'] .navbar-toggler {
    line-height: 2.4;
    margin-left: 75px;
}

[data-component='navbar'] .navbar-toggler span {
    text-transform: uppercase;
    font-size: 1em;
    font-weight: 400;
    font-family: 'Lato', sans-serif;
    display: none;
}

[data-component='navbar'] .navbar-toggler[aria-expanded="true"] {
    color: #009fff;
}

[data-component='navbar'] .navbar-toggler[aria-expanded="true"] span {
    display: initial;
    color: #009fff;
}

[data-component='navbar'] .navbar-toggler[aria-expanded="true"] i {
    color: #009fff;
}

[data-component='navbar'] .navbar-collapse {
    background-color: #292a2c;
    margin-left: 75px;
}

[data-component='navbar'] .navbar-nav {
    height: 100vw;
}

[data-component='navbar'] .collapsing {
    -webkit-transition: height .3s ease;
    -o-transition: height .3s ease;
    transition: height .3s ease;
}

[data-component='navbar'] .navbar-brand {
    background-color: #009fff;
    height: 60px;
    width: 75px;
    text-align: center;
}

[data-component='navbar'] ::-webkit-scrollbar {
    width: 0px;
    background: transparent;
}

[data-component='navbar'] .right-links i {
    color: #000;
    font-size: 20px;
    line-height: 2.8;
}

[data-component='navbar'] .home {
    border-right: 1px solid #ababab;
}

[data-component='navbar'] .dropdown-toggle::after {
    display: none;
}

[data-component='navbar'] .dropdown-item {
    color: #292b2c;
    font-size: 0.75em;
}

[data-component='navbar'] .dropdown {
    position: relative;
}

[data-component='navbar'] .dropdown span {
    color: #fff;
    position: absolute;
    width: 15px;
    height: 15px;
    top: -8px;
    right: -3px;
    background-color: red;
    border-radius: 50%;
    text-align: center;
    font-size: 0.625em;
    font-weight: 600;
}


[data-component='navbar'] .dropdown img {
    border-radius: 50%;
    height: 40px;
}

[data-component='navbar'] .list-group .lg {
    height: 500px;
    width: 301px;
    overflow: auto;
}

[data-component='navbar'] .list-group .list-group-item {
    border-radius: 0;
    letter-spacing: 0.5px;
}

[data-component='navbar'] .list-group h5 {
    font-size: 0.6875em;
    font-weight: 700;
    line-height: 2;
}

[data-component='navbar'] .list-group p {
    font-size: 0.5625em;
    font-weight: 400;
    line-height: 2;
}

[data-component='navbar'] .megamenu #menuOne, [data-component='navbar'] .megamenu #menuTwo, [data-component='navbar'] .megamenu #menuThree {
    position: absolute;
    width: 100%;
    z-index: 1;
}

[data-component='navbar'] .megamenu .megamenu-links {
    background-color: #EEEEEE;
    height: 100vh;
    overflow: hidden;
}

[data-component='navbar'] .megamenu .btn {
    font-size: 0.875em;
    font-weight: 400;
    letter-spacing: 0.5px;
}

[data-component='navbar'] .megamenu .btn:hover {
    background-color: #292a2c;
    color: #fff;
}

[data-component='navbar'] .megamenu a[aria-expanded=true] .fa-plus {
    display: none;
}

[data-component='navbar'] .megamenu a[aria-expanded=false] .fa-minus {
    display: none;
}

[data-component='navbar'] .megamenu [aria-expanded="true"] {
    background-color: #292a2c;
    color: #fff;
}

[data-component='navbar'] .megamenu [aria-expanded="true"] i {
    color: #fff;
    font-size: 1.25em;
}

[data-component='navbar'] .megamenu [aria-expanded="false"] {
    background-color: #eee;
    color: #292a2c;
    border-radius: 0;
}

[data-component='navbar'] .megamenu [aria-expanded="false"] i {
    color: #009fff;
    font-size: 1.25em;
}

[data-component='navbar'] .megamenu .list-group {
    height: 100vw;
    background-color: #292a2c;
}

[data-component='navbar'] .megamenu .list-group-item {
    border-radius: 0;
    background-color: #292a2c;
    font-size: 0.75em;
    color: #fff;
}

[data-component='navbar'] .megamenu .list-group-item:hover {
    background-color: #009fff;
}</style>
<?php
use MrShan0\PHPFirestore\FirestoreClient;
require 'vendor/autoload.php';

$null = NULL;
$accept = "Accepted";








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

$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('tutors', ['pageSize' => 1000000]);
$counter = 0;
try{
while ($collections["documents"][$counter]->get('calEmail') != NULL){   
    if (in_array($collections["documents"][$counter]->get('classes'),$classes)){
        
    }else{
    $classes[$counter] = $collections["documents"][$counter]->get('classes');
    }
    $counter += 1;
}
}catch (\Throwable $t){
}



$counter1 = 0;
$somearr = array();
$counter3 = 0;
$counter4 = 0;
$counter111 = 0;
while ($classes[$counter4] != NULL){

$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments($classes[$counter4], ['pageSize' => 1000000]);
$counter = 0;
try{
while ($collections["documents"][$counter]->get('appointments') != NULL){
    
$counter5 = 0;
while ($collections["documents"][$counter]->get('appointments')[$counter5] != NULL){
$var = $collections["documents"][$counter]->get('appointments')[$counter5];
$array = (array) $var;
ob_start();
var_dump($array);
$array = ob_get_clean();
$array1 = substr($array, 0, -3);
$arraynew = substr($array1, 71, strlen($array1));
$var = unvar_dump($arraynew);
$txn_id = $var[0]["txn_id"];


$var[0]["time"][-4] = $var[0]["time"][-4] + 1;
$str1 = $var[0]["time"];
$str = preg_replace('/\W\w+\s*(\W*)$/', '$1', $str1);
$date = DateTime::createFromFormat('m-d-Y H:i', $str);
$date = $date->format('m-d-Y H:i');
if ($var[0]["rated"] == false && $date < gmdate('m-d-Y h:i', time())){
    $rated[$counter111] = $var[0]["rated"];
    $class[$counter111] = $classes[$counter4];
    $uid[$counter111] = $var[0]["uid"];
    $studentid[$counter111] = $var[0]["studentEmail"];
    $counter111 += 1;
}else{
    
}
$counter5 += 1;
}
$counter += 1;
}
}catch (\Throwable $t){
}
$counter4 += 1;
}













$counter = 0;
$seen = "seen";

while ($counter < $count){
    if ($rated[$counter] == false){

        

$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments($class[$counter], ['pageSize' => 1000000]);
$counter1 = 0;
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

require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'mail.fibonia.com';  
$mail->SMTPAuth = true;
$mail->Username = 'info@fibonia.com';
$mail->Password = 'Mamagan999';
$mail->SMTPSecure = 'tls'; 
$mail->Port = 25;
$mail->setFrom('info@fibonia.com', 'Fibonia Team');
$mail->addAddress($studentid[$counter]);
$mail->isHTML(true);
$activate_link1 = 'https://www.fibonia.com/rate.php?email=' . $studentid[$counter] . '&code=' . 	$uid[$counter] . '&rating=1';
$activate_link2 = 'https://www.fibonia.com/rate.php?email=' . $studentid[$counter] . '&code=' . 	$uid[$counter] . '&rating=2';
$activate_link3 = 'https://www.fibonia.com/rate.php?email=' . $studentid[$counter] . '&code=' . 	$uid[$counter] . '&rating=3';
$activate_link4 = 'https://www.fibonia.com/rate.php?email=' . $studentid[$counter] . '&code=' . 	$uid[$counter] . '&rating=4';
$activate_link5 = 'https://www.fibonia.com/rate.php?email=' . $studentid[$counter] . '&code=' . 	$uid[$counter] . '&rating=5';
$output ='<p>Thank you for using Fibonia to get tutoring in class '.$class[$counter].'! Please let us know how your tutor was below.';
$output .= '<p>Please click the following ratings if you would like to rate the tutor (out of 5 stars): <a href="' . $activate_link1 . '">1</a>&nbsp;&nbsp;<a href="' . $activate_link2 . '">2</a>&nbsp;&nbsp;<a href="' . $activate_link3 . '">3</a>&nbsp;&nbsp;<a href="' . $activate_link4 . '">4</a>&nbsp;&nbsp;<a href="' . $activate_link5 . '">5</a>&nbsp;&nbsp;';
$body = $output; 
$mail->Subject = 'Tutor Request - Fibonia Team';
$mail->Body    = $body;
if(!$mail->send()) {
  
} else {
}
    }
    $counter++;
}

?>
<?php
session_start();
use MrShan0\PHPFirestore\FirestoreClient;
require 'vendor/autoload.php';
function findid(){
if (isset($_SESSION['loggedin'])) {
    return $_SESSION['id'];
} elseif (isset($_SESSION['userData'])) {
    return $_SESSION['userData']['email_id'];
} elseif (isset($_SESSION['guestlog'])) {
    return $_SESSION['guestuname'];
}else {
    return $_SESSION['userData1']['email_id'];
}
}


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



$ourstatus = "Finished";
$ourid = findid();



$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('users', ['pageSize' => 1000000]);
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
$counter3 = 0;
if ($var[0]["tutorEmail"] == $ourid){
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
        if($var[0]["txn_id"] != NULL && $var[0]["time"] <= gmdate("m-d-yy H:i")){
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

echo $counter3;
?>
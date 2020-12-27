<?php
session_start();
$return1 = 0;
$return2 = 0;

use MrShan0\PHPFirestore\FirestoreClient;
require 'vendor/autoload.php';


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


function returnarr($returnval){
    if (is_int($returnval)){
$array2 = array();
array_push($array2, $returnval);
return $array2;}else{
    $count = 0;
    $count1 = 1;
    $array2 = array();
    while ($returnval[$count] != ""){
        array_push($array2,$returnval[$count]);
        $count += 1;
        $count1 += 2;
    }
    return $array2;
}
}

function filtertst($var1,$var2,$var3,$var4,$var5,$var6,$var7,$var8){
    

if ($var1 == "true"){
    $var1 = true;
    $var1opp = false;
}else{
    $var1 = false;
    $var1opp = true;
}
$verified = true;

$freetutor = 0;
if ($_POST['freetutor'] == "false"){
$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments($var3, ['pageSize' => 1000000]);
$counter = 0;
$counter1 = 0;
$emptyarr = [];
try{
while ($collections["documents"][$counter]->get('calEmail') != NULL){
    $price = $collections["documents"][$counter]->get('price');
    $email = $collections["documents"][$counter]->get('calEmail');
    $price = floatval($price);
    if ($collections["documents"][$counter]->get('verified') == true && $price <= $var7){
        $emptyarr[$counter1][$email] = $price;
        $counter1 += 1;
    }
    $counter += 1;
}
}catch (\Throwable $t){
}
sort($emptyarr);
$counter1 -= 1;
$counter3 = 0;
while ($counter1 != -1){
    $return1[$counter3] = key($emptyarr[$counter3]);
    $counter1 -= 1;
    $counter3 += 1;
}


$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments($var3, ['pageSize' => 1000000]);
$counter = 0;
$counter1 = 0;
$emptyarr = [];
try{
while ($collections["documents"][$counter]->get('calEmail') != NULL){
    $price = $collections["documents"][$counter]->get('price');
    $email = $collections["documents"][$counter]->get('calEmail');
    $price = floatval($price);
    if ($collections["documents"][$counter]->get('verified') == true && $price > $var7){
        $emptyarr[$counter1][$email] = $price;
        $counter1 += 1;
    }
    $counter += 1;
}
}catch (\Throwable $t){
}
sort($emptyarr);
$counter1 -= 1;
$counter3 = 0;
while ($counter1 != -1){
    $return2[$counter3] = key($emptyarr[$counter3]);
    $counter1 -= 1;
        $counter3 += 1;
}

$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments($var3, ['pageSize' => 1000000]);
$counter = 0;
$counter1 = 0;
$emptyarr = [];
try{
while ($collections["documents"][$counter]->get('calEmail') != NULL){
    $price = $collections["documents"][$counter]->get('price');
    $email = $collections["documents"][$counter]->get('calEmail');
    $price = floatval($price);
    if ($collections["documents"][$counter]->get('verified') == true && $price <= $var7){
        $emptyarr[$counter1][$email] = $price;
        $counter1 += 1;
    }
    $counter += 1;
}
}catch (\Throwable $t){
}
rsort($emptyarr);
$counter1 -= 1;
$counter3 = 0;
while ($counter1 != -1){
    $return3[$counter3] = key($emptyarr[$counter3]);
        $counter1 -= 1;
}



$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments($var3, ['pageSize' => 1000000]);
$counter = 0;
$counter1 = 0;
$emptyarr = [];
try{
while ($collections["documents"][$counter]->get('calEmail') != NULL){
    $price = $collections["documents"][$counter]->get('price');
    $email = $collections["documents"][$counter]->get('calEmail');
    $price = floatval($price);
    if ($collections["documents"][$counter]->get('verified') == true && $price <= $var7){
        $emptyarr[$counter1][$email] = $price;
        $counter1 += 1;
    }
    $counter += 1;
}
}catch (\Throwable $t){
}
rsort($emptyarr);
$counter1 -= 1;
$counter3 = 0;
while ($counter1 != -1){
    $return4[$counter3] = key($emptyarr[$counter3]);
        $counter1 -= 1;
}




$_SESSION['val1'] = returnarr($return1);
$_SESSION['val2'] = returnarr($return2);
$_SESSION['val3'] = returnarr($return3);
$_SESSION['val4'] = returnarr($return4);

} else{
$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments($var3, ['pageSize' => 1000000]);
$counter = 0;
$counter1 = 0;
$emptyarr = [];
try{
while ($collections["documents"][$counter]->get('calEmail') != NULL){
    $price = $collections["documents"][$counter]->get('price');
    $email = $collections["documents"][$counter]->get('calEmail');
    $price = floatval($price);
    if ($collections["documents"][$counter]->get('verified') == true && $price <= $freetutor){
        $emptyarr[$counter1][$email] = $price;
        $counter1 += 1;
    }
    $counter += 1;
}
}catch (\Throwable $t){
}
sort($emptyarr);
$counter1 -= 1;
$counter3 = 0;
while ($counter1 != -1){
    $return1[$counter3] = key($emptyarr[$counter3]);
        $counter1 -= 1;
        $counter3 += 1;
}


$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments($var3, ['pageSize' => 1000000]);
$counter = 0;
$counter1 = 0;
$emptyarr = [];
try{
while ($collections["documents"][$counter]->get('calEmail') != NULL){
    $price = $collections["documents"][$counter]->get('price');
    $email = $collections["documents"][$counter]->get('calEmail');
    $price = floatval($price);
    if ($collections["documents"][$counter]->get('verified') == true && $price > $freetutor){
        $emptyarr[$counter1][$email] = $price;
        $counter1 += 1;
    }
    $counter += 1;
}
}catch (\Throwable $t){
}
sort($emptyarr);
$counter1 -= 1;
$counter3 = 0;
while ($counter1 != -1){
    $return2[$counter3] = key($emptyarr[$counter3]);
        $counter1 -= 1;
        $counter3 += 1;
}

$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments($var3, ['pageSize' => 1000000]);
$counter = 0;
$counter1 = 0;
$emptyarr = [];
try{
while ($collections["documents"][$counter]->get('calEmail') != NULL){
    $price = $collections["documents"][$counter]->get('price');
    $email = $collections["documents"][$counter]->get('calEmail');
    $price = floatval($price);
    if ($collections["documents"][$counter]->get('verified') == true && $price <= $freetutor){
        $emptyarr[$counter1][$email] = $price;
        $counter1 += 1;
    }
    $counter += 1;
}
}catch (\Throwable $t){
}
rsort($emptyarr);
$counter1 -= 1;
$counter3 = 0;
while ($counter1 != -1){
    $return3[$counter3] = key($emptyarr[$counter3]);
        $counter1 -= 1;
}



$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments($var3, ['pageSize' => 1000000]);
$counter = 0;
$counter1 = 0;
$emptyarr = [];
try{
while ($collections["documents"][$counter]->get('calEmail') != NULL){
    $price = $collections["documents"][$counter]->get('price');
    $email = $collections["documents"][$counter]->get('calEmail');
    $price = floatval($price);
    if ($collections["documents"][$counter]->get('verified') == true && $price <= $freetutor){
        $emptyarr[$counter1][$email] = $price;
        $counter1 += 1;
    }
    $counter += 1;
}
}catch (\Throwable $t){
}
rsort($emptyarr);
$counter1 -= 1;
$counter3 = 0;
while ($counter1 != -1){
    $return4[$counter3] = key($emptyarr[$counter3]);
        $counter1 -= 1;
}
$_SESSION['val1'] = returnarr($return1);
$_SESSION['val2'] = returnarr($return2);
$_SESSION['val3'] = returnarr($return3);
$_SESSION['val4'] = returnarr($return4);
}

    
}


$return1 = 0;
$return2 = 0;

filtertst($_POST['sixtoone1'],NULL,$_POST['classes'],NULL,NULL,NULL,$_POST['maxprice'],$_POST['minprice']);
if (array_merge($_SESSION['val1'],$_SESSION['val2']) == NULL){
    echo json_encode(array("statusCode"=>201));
    exit;
}


unset($_SESSION["save1"]);
$_SESSION['save2'] = "true";
$_SESSION['class'] = $_POST['classes'];
$_SESSION['sixtoone'] = $_POST['sixtoone1'];

echo json_encode(array("statusCode"=>200));
?>
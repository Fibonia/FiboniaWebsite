<?php
session_start();

$class = 'COMPSCI 61';
$face = 'false';
$stay = 'true';
$travel = 'false';
$etutor = 'true';
$sixtoone = 'false';
$min = 12;
$max = 20;
$verified = true;
$sixtoone = 'false';

function distancefind($x,$y){
    $origin = $x;
$destination = $y;
$distance_data = file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?&origins='.urlencode($origin).'&destinations='.urlencode($destination).'&key=AIzaSyCw8fNaDoWwxQf_mzOFfuf3DsDRaIk7Eks');
$distance_arr = json_decode($distance_data);
if ($distance_arr->status=='OK') {
    $destination_addresses = $distance_arr->destination_addresses[0];
    $origin_addresses = $distance_arr->origin_addresses[0];
} else {
} if ($origin_addresses=="" or $destination_addresses=="") {
      echo "<p>Destination or origin address not found</p>";
      exit();}
   $elements = $distance_arr->rows[0]->elements;
   $distance = $elements[0]->distance->text;
   $duration = $elements[0]->duration->text;
return $distance;
}

switch ($_POST['dist']) {
    case '<1 Mile':
        $_POST['dist'] = 1;
        break;
    case '5 Miles':
        $_POST['dist'] = 5;
        break;
    case '10 Miles':
        $_POST['dist'] = 10;
        break;
    case '15 Miles':
        $_POST['dist'] = 15;
        break;
    case '25 Miles':
        $_POST['dist'] = 25;
        break;
    case '>25 Miles':
        $_POST['dist'] = 155050;
        break;
};

function orderlst($lst){
if ($lst == ""){
    $tstarr = array();
    return $tstarr;
}else{
$pricelst = array();
 $myArray = explode(',', $lst);
foreach ($myArray as $item) {
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
$stmt = $con->prepare('SELECT c.location FROM tutor_classes c WHERE c.id = ? AND c.class = ?');
$stmt->bind_param('ss',$item,$_POST['classes']);
$stmt->execute();
$stmt->bind_result($ourlocation);
$stmt->fetch();
$stmt->close();
$valdist = distancefind($_POST['location'],$ourlocation);
$valdist = $valdist;
if ($valdist < $_POST['dist']){
$pricelst[$item] = $valdist;
} else{
    
}
}
asort($pricelst);
return $pricelst;
}
}

function orderlst1($lst){
$pricelst = array();
 $myArray = explode(',', $lst);
foreach ($myArray as $item) {
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
$stmt = $con->prepare('SELECT c.location FROM tutor_classes c WHERE c.id = ? AND c.class = ?');
$stmt->bind_param('ss',$item,$_POST['classes']);
$stmt->execute();
$stmt->bind_result($ourlocation);
$stmt->fetch();
$stmt->close();
$valdist = distancefind($_POST['location'],$ourlocation);
$valdist = $valdist;
$pricelst[$item] = $valdist;

}
asort($pricelst);
return $pricelst;
}

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$return1 = 0;
$return2 = 0;


function filtertst($var1,$var2,$var3,$var4,$var5,$var6,$var8,$var9,$var10,$var11){
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
$stmt = $con->prepare('SELECT c.location FROM tutor_classes c WHERE c.class = ?');
$stmt->bind_param('s',$var1);
$stmt->execute();
$stmt->bind_result($tstlocation);
$stmt->fetch();
$stmt->close();    
    
if ($tstlocation == NULL){
    echo json_encode(array("statusCode"=>201));
    exit();
}

if ($var2 == "true"){
    $var2opp = "false";
}else{
    $var2opp = "true";
}

if ($var3 == "true"){
    $var3opp = "false";
}else{
    $var3opp = "true";
}

if ($var9 == "true"){
$var9opp = "false";
}else{
$var9opp = "true";
}
if ($var2 == "false" && $var3 == "true"){
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
$freetutor = 0;
if ($_POST['freetutor'] == "false"){
$stmt = $con->prepare('SELECT GROUP_CONCAT(c.id ORDER BY c.minprice ASC) FROM tutor_classes c WHERE c.class = ? AND ((c.face = ? AND c.stay = ? AND c.travel = ?) OR (c.face = ? AND c.stay = ? AND c.travel = ?))  AND c.minprice <= ? AND c.verified = ?');
$stmt->bind_param('sssssssss',$var1,$var9,$var2opp,$var3,$var9,$var2opp,$var3opp,$var6,$var8);
$stmt->execute();
$stmt->bind_result($return2);
$stmt->fetch();
$stmt->close();
$stmt = $con->prepare('SELECT GROUP_CONCAT(c.id ORDER BY c.minprice ASC) FROM tutor_classes c WHERE c.class = ? AND (c.face = ? AND c.stay = ? AND c.travel = ?)  AND c.minprice <= ? AND c.verified = ?');
$stmt->bind_param('ssssss',$var1,$var9,$var2,$var3,$var6,$var8);
$stmt->execute();
$stmt->bind_result($return1);
$stmt->fetch();
$stmt->close();
} else{
$stmt = $con->prepare('SELECT GROUP_CONCAT(c.id ORDER BY c.minprice ASC) FROM tutor_classes c WHERE c.class = ? AND ((c.face = ? AND c.stay = ? AND c.travel = ?) OR (c.face = ? AND c.stay = ? AND c.travel = ?))  AND c.minprice = ? AND c.verified = ?');
$stmt->bind_param('sssssssss',$var1,$var9,$var2opp,$var3,$var9,$var2opp,$var3opp,$freetutor,$var8);
$stmt->execute();
$stmt->bind_result($return2);
$stmt->fetch();
$stmt->close();
$stmt = $con->prepare('SELECT GROUP_CONCAT(c.id ORDER BY c.minprice ASC) FROM tutor_classes c WHERE c.class = ? AND (c.face = ? AND c.stay = ? AND c.travel = ?)  AND c.minprice = ? AND c.verified = ?');
$stmt->bind_param('ssssss',$var1,$var9,$var2,$var3,$freetutor,$var8);
$stmt->execute();
$stmt->bind_result($return1);
$stmt->fetch();
$stmt->close();
}
if ($return1 != "" && $return2 != ""){
    $return1 = orderlst($return1);
    $return2 = orderlst($return2);
    $returnval = $return2.$return1;
}else if ($return1 != "") {
    $return1 = orderlst($return1);
    $returnval = $return1;
}else if ($return2 != ""){
    $return2 = orderlst($return2);
$returnval = $return2;
}
return $returnval;
}else if ($var2 == "true" && $var3 == "false"){
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
$freetutor = 0;
if ($_POST['freetutor'] == "false"){
$stmt = $con->prepare('SELECT GROUP_CONCAT(c.id ORDER BY c.minprice ASC) FROM tutor_classes c WHERE c.class = ? AND ((c.face = ? AND c.stay = ? AND c.travel = ?) OR (c.face = ? AND c.stay = ? AND c.travel = ?))  AND c.minprice <= ? AND c.verified = ?');
$stmt->bind_param('sssssssss',$var1,$var9,$var2,$var3opp,$var9,$var2opp,$var3opp,$var6,$var8);
$stmt->execute();
$stmt->bind_result($return2);
$stmt->fetch();
$stmt->close();
$stmt = $con->prepare('SELECT GROUP_CONCAT(c.id ORDER BY c.minprice ASC) FROM tutor_classes c WHERE c.class = ? AND (c.face = ? AND c.stay = ? AND c.travel = ?)  AND c.minprice <= ? AND c.verified = ?');
$stmt->bind_param('ssssss',$var1,$var9,$var2,$var3,$var6,$var8);
$stmt->execute();
$stmt->bind_result($return1);
$stmt->fetch();
$stmt->close();
}else{
    $stmt = $con->prepare('SELECT GROUP_CONCAT(c.id ORDER BY c.minprice ASC) FROM tutor_classes c WHERE c.class = ? AND ((c.face = ? AND c.stay = ? AND c.travel = ?) OR (c.face = ? AND c.stay = ? AND c.travel = ?))  AND c.minprice = ? AND c.verified = ?');
$stmt->bind_param('sssssssss',$var1,$var9,$var2,$var3opp,$var9,$var2opp,$var3opp,$freetutor,$var8);
$stmt->execute();
$stmt->bind_result($return2);
$stmt->fetch();
$stmt->close();
$stmt = $con->prepare('SELECT GROUP_CONCAT(c.id ORDER BY c.minprice ASC) FROM tutor_classes c WHERE c.class = ? AND (c.face = ? AND c.stay = ? AND c.travel = ?)  AND c.minprice = ? AND c.verified = ?');
$stmt->bind_param('ssssss',$var1,$var9,$var2,$var3,$freetutor,$var8);
$stmt->execute();
$stmt->bind_result($return1);
$stmt->fetch();
$stmt->close();
}

if ($return1 != "" && $return2 != ""){
    $return1 = orderlst($return1);
    $return2 = orderlst($return2);
    $returnval = $return2.$return1;
}else if ($return1 != "") {
    $return1 = orderlst($return1);
    $returnval = $return1;
}else if ($return2 != ""){
    $return2 = orderlst($return2);
$returnval = $return2;
}
return $returnval;
}else{
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
$freetutor = 0;
if ($_POST['freetutor'] == "false"){
$stmt = $con->prepare('SELECT GROUP_CONCAT(c.id ORDER BY c.minprice ASC) FROM tutor_classes c WHERE c.class = ? AND ((c.face = ? AND c.stay=? AND c.travel = ?) OR (c.face = ? AND c.stay=? AND c.travel = ?) OR (c.face = ? AND c.stay = ? AND c.travel = ?) )  AND c.minprice <= ? AND c.verified = ?');
$stmt->bind_param('ssssssssssss',$var1,$var9,$var2,$var3opp,$var9,$var2opp,$var3,$var9,$var2,$var3,$var6,$var8);
$stmt->execute();
$stmt->bind_result($return2);
$stmt->fetch();
$stmt->close();

} else{
$freetutor = 0;
$stmt = $con->prepare('SELECT GROUP_CONCAT(c.id ORDER BY c.minprice ASC) FROM tutor_classes c WHERE c.class = ? AND ((c.face = ? AND c.stay=? AND c.travel = ?) OR (c.face = ? AND c.stay=? AND c.travel = ?) OR (c.face = ? AND c.stay = ? AND c.travel = ?) )  AND c.minprice = ? AND c.verified = ?');
$stmt->bind_param('ssssssssssss',$var1,$var9,$var2,$var3opp,$var9,$var2opp,$var3,$var9,$var2,$var3,$freetutor,$var8);
$stmt->execute();
$stmt->bind_result($return2);
$stmt->fetch();
$stmt->close();  
}
return orderlst($return2);
}
}




function filtertst1($var1,$var2,$var3,$var4,$var5,$var6,$var7){
    $DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
$stmt = $con->prepare('SELECT c.location FROM tutor_classes c WHERE c.class = ?');
$stmt->bind_param('s',$var3);
$stmt->execute();
$stmt->bind_result($tstlocation);
$stmt->fetch();
$stmt->close();

if ($var1 == "true"){
    $var1opp = "false";
}else{
    $var1opp = "true";
}
$verified = 'No';
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
$freetutor = 0;
if ($_POST['freetutor'] == "false"){
$stmt = $con->prepare('SELECT GROUP_CONCAT(c.id ORDER BY c.minprice ASC) FROM tutor_classes c WHERE c.class = ? AND (c.etutor = ? AND c.sixtoone = ?) AND c.minprice <= ? AND c.verified = ?');
$stmt->bind_param('sssss',$var3,$var6,$var1,$var7,$verified);
$stmt->execute();
$stmt->bind_result($return2);
$stmt->fetch();
$stmt->close();
$stmt = $con->prepare('SELECT GROUP_CONCAT(c.id ORDER BY c.minprice ASC) FROM tutor_classes c WHERE c.class = ? AND (c.etutor = ? AND c.sixtoone = ?) AND c.minprice <= ? AND c.verified = ?');
$stmt->bind_param('sssss',$var3,$var6,$var1opp,$var7,$verified);
$stmt->execute();
$stmt->bind_result($return1);
$stmt->fetch();
$stmt->close();
} else{
   $stmt = $con->prepare('SELECT GROUP_CONCAT(c.id ORDER BY c.minprice ASC) FROM tutor_classes c WHERE c.class = ? AND (c.etutor = ? AND c.sixtoone = ?) AND c.minprice = ? AND c.verified = ?');
$stmt->bind_param('sssss',$var3,$var6,$var1,$freetutor,$verified);
$stmt->execute();
$stmt->bind_result($return2);
$stmt->fetch();
$stmt->close();
$stmt = $con->prepare('SELECT GROUP_CONCAT(c.id ORDER BY c.minprice ASC) FROM tutor_classes c WHERE c.class = ? AND (c.etutor = ? AND c.sixtoone = ?) AND c.minprice = ? AND c.verified = ?');
$stmt->bind_param('sssss',$var3,$var6,$var1opp,$freetutor,$verified);
$stmt->execute();
$stmt->bind_result($return1);
$stmt->fetch();
$stmt->close(); 
}
$returnval = $return2.$return1;
if (is_int($returnval)){
$array2 = array();
array_push($array2, $returnval);
return $array2;}else{
    $count = 0;
    $count1 = 1;
    $array2 = array();
    while ($returnval[$count] != ""){
        array_push($array2,$returnval[$count]);
        $count += 2;
        $count1 += 2;
    }
    return $array2;
}
}


$_SESSION['truebool'] = "true";
$val1 = filtertst($_POST['classes'],$_POST['stay1'],$_POST['travel1'],$_POST['etutor'],$sixtoone,$_POST['price'],$verified,$_POST['face'],$_POST['dist'],$_POST['location']);
$val2 = filtertst1($_SESSION['truebool'],$_POST['location'],$_POST['classes'],$_POST['dist'],$_SESSION['truebool'],$_SESSION['truebool'],$_POST['price']);
unset($_SESSION["save2"]);
$_SESSION['save1'] = "true";
$_SESSION['val1'] = $val1;
$_SESSION['val2'] = $val2;
$_SESSION['class'] = $_POST['classes'];
echo json_encode(array("statusCode"=>200));

?>
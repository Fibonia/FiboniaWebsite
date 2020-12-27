<?php
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



$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('users', ['pageSize' => 1000000]);
$counter = 0;
try{
while ($collections["documents"][$counter]->get('appointments') != NULL){
$var = $collections["documents"][$counter]->get('appointments')[0];
$ratings = $collections["documents"][$counter]->get('rating');
$experience = $collections["documents"][$counter]->get('experience');
$array = (array) $var;
ob_start();
var_dump($array);
$array = ob_get_clean();
$array1 = substr($array, 0, -3);
$arraynew = substr($array1, 71, strlen($array1));
$var = unvar_dump($arraynew);
if ($var[0]["tutorEmail"] == $_GET['email']){
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
        if($var[0]["uid"] == $_GET['code']){
            $rating = $var[0]["rated"];
            $email = $var[0]["tutorEmail"];
            break;
        }
    }
    break;
}else{
    $counter += 1;
}
}
}catch (\Throwable $t){
}

if ($rating == false){
$ratingsum = $ratings * $experience;
$ourrating = (integer)$_GET['code'];
$newrating = ($ratingsum+$ourrating)/($experience+1);
$experience += 1;

    echo '
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-firestore.js"></script>
<script>
  var firebaseConfig = {
    apiKey: "AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU",
    authDomain: "fibonia-83e34.firebaseapp.com",
    databaseURL: "https://fibonia-83e34.firebaseio.com",
    projectId: "fibonia-83e34",
    storageBucket: "fibonia-83e34.appspot.com",
    messagingSenderId: "588850587483",
    appId: "1:588850587483:web:4eb45758ccf907a87a1c7e",
    measurementId: "G-66NVK8XV01"
  };
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
var db = firebase.firestore();
db.collection("tutors").doc("'.$email.'").get().then(function(doc) {
    if (doc.exists) {
    var i;
    for (i = 0; doc.data()["classes"][i] != ""; i++) {
    db.collection(doc.data()["classes"][i]).doc("'.$email.'").update({"rating": '.$newrating.',"experience":'.$experience.'}).then(function() {});
    }
    }});
</script>';

echo '<link href="message3.css" rel="stylesheet" id="bootstrap-css">';
echo '<div class="popup popup--icon -success js_success-popup popup--visible" style="opacity:1; z-index:1;" id = "popup_this9"><div class="popup__background"></div><div class="popup__content"><h3 class="popup__content__title">Rating Tutor</h3><p>Your rating has been successfully registered! Thank you for helping Fibonia and using our product.</p><p><button type="submit" onclick="changewindow();" class="button b-close button--success" data-for="js_success-popup"><span>CLOSE</span></button></p></div></div>';
echo '<style>document.getElementById("popup_this9").style.opacity="1";document.getElementById("popup_this9").style.zIndex=10005;</style>';

}else{
echo '<link href="message3.css" rel="stylesheet" id="bootstrap-css">';
echo '<div class="popup popup--icon -error js_error-popup popup--visible" style="opacity:1; z-index:1;" id = "popup_this9"><div class="popup__background"></div><div class="popup__content"><h3 class="popup__content__title">Error!</h3><p>There was an error whilst running this link!</p><p><button onclick="changewindow();" class="button b-close button--error" data-for="js_error-popup"><span>CLOSE</span></button></p></div></div>';
echo '<style>document.getElementById("popup_this9").style.opacity="1";document.getElementById("popup_this9").style.zIndex=10005;</style>';

}
?>
<script>
function changewindow(){
    window.location.href = "home.php";
}
</script>
<style>
.b-close{
    right:44% !important;
}
</style>
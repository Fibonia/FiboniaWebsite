<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
use MrShan0\PHPFirestore\FirestoreClient;
require 'vendor/autoload.php';
$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('users', ['pageSize' => 1000000]);
$counter = 0;
$count = 0;
$email = array();
$class = array();
try{
while ($collections["documents"][$counter]->get('email') != NULL){    
$tstcount = 0;
if ($collections["documents"][$counter]->get('update_classes') != NULL){
    while ($collections["documents"][$counter]->get('update_classes')[$tstcount] != NULL){
        $email1 = $collections["documents"][$counter]->get('email');
        $class1 = $collections["documents"][$counter]->get('update_classes')[$tstcount];
        $email[$count] = $email1;
        $class[$count] = $class1;
        $tstcount += 1;
        $count += 1;
    }
}else{
}
$counter += 1;
}
}catch (\Throwable $t){
}

$counter = 0;
while ($counter < $count){
    $firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
    $collections = $firestoreClient->listDocuments($class[$counter], ['pageSize' => 1000000]);

    if ($collections[0] == NULL){
    $counter += 1;
    }else{
        
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
$mail->addAddress($email[$counter]);
$mail->isHTML(true);
$output ='<p>Good news! A new tutor has been added to your previously requested class of '.$class[$counter].', you may search for the tutor in the Fibonia website.';
$body = $output; 
$mail->Subject = 'New Tutor - Fibonia Team';
$mail->Body    = $body;
if(!$mail->send()) {
  
} else {
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
echo '<script>var db = firebase.firestore();

db.collection("users").where("email", "==", "'.$email[$counter].'")
  .get()
  .then(function(querySnapshot) {
      querySnapshot.forEach(function(doc) {
          var ourdata = doc.data()["update_classes"];
          var newArr = ourdata.filter(e => e !== "'.$class[$counter].'");
          db.collection("users").doc(doc.id).update({update_classes: newArr}).then(function(tst){})
      });
 })</script>';
    
    $counter += 1;
    }
}

?>
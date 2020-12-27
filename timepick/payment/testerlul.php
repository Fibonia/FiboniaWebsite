<?php

use MrShan0\PHPFirestore\FirestoreClient;
require 'vendor/autoload.php';
$firestoreClient =  new FirestoreClient('fibonia-83e34','AIzaSyDCl5yDLEEmgH3Sn-qH-rb8PVT0dLQFAWU', ['database' => '(default)',]);
$collections = $firestoreClient->listDocuments('tutors', ['pageSize' => 100]);
$tutorid = "abelyagubyan@berkeley.edu";
$counter = 0;
try{
while ($collections["documents"][$counter]->get('calEmail') != NULL){    
if ($collections["documents"][$counter]->get('calEmail') == $tutorid){
    var_dump($collections["documents"][$counter]->get('calEmail'));    
    echo $collections["documents"][$counter]->get('appointments')[0];
    break;
}else{
    $counter += 1;
}
}
}catch (\Throwable $t){
}

?>
<?php
session_start();
if (isset($_POST['submit'])){
    $file = $_FILES['file'];
    
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    $allowed = array('jpg','png');
    
    if (in_array($fileActualExt,$allowed)){
        if($fileError == 0){
            if($fileSize < 1000000){
                 $fileNameNew = uniqid('',true).".".$fileActualExt;
                 $fileDestination = 'uploads/'.$fileNameNew;
                 move_uploaded_file($fileTmpName,$fileDestination);
                 $fileNameNew = 'https://www.fibonia.com/1/html/uploads/'.$fileNameNew;
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
db.collection("users").where("email", "==", "'.$_SESSION["id"].'")
  .get()
  .then(function(querySnapshot) {
      querySnapshot.forEach(function(doc1) {
         db.collection("users").doc(doc1.id).update({"img": "'.$fileNameNew.'"}).then(function() {window.location.href = "pages-profile.php?uploadsuccess";});
      })
      });
</script>';
            } else {
            echo "Your file is too big!";
            }
        } else {
            echo " There was an error uploading your file!";
        }
    }
}
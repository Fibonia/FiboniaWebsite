<!DOCTYPE html>
<html>
<head>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-firestore.js"></script>
<script>
  var firebaseConfig = {
    apiKey: "AIzaSyCybEfgXisiWAgnFz1aeogb3AHvwDKgASU",
    authDomain: "fibonia-sql-to-firebase.firebaseapp.com",
    databaseURL: "https://fibonia-sql-to-firebase.firebaseio.com",
    projectId: "fibonia-sql-to-firebase",
    storageBucket: "fibonia-sql-to-firebase.appspot.com",
    messagingSenderId: "395385711462",
    appId: "1:395385711462:web:e86850de3bd9fd7c6076a7",
    measurementId: "G-JEQLB77YRW"
  };
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
var db = firebase.firestore();
var ouruid = "a12345";
db.collection("users").where("email", "==", "arthurwilkins123@yahoo.com")
  .get()
  .then(function(querySnapshot) {
      querySnapshot.forEach(function(doc1) {
         db.collection("users").doc(doc1.id).update({"test": "rwanda"})
          .then(function() {window.location.href = "testerlul.php#test";})
      })
      });

</script>
</head>
<body>
</body>
</html>

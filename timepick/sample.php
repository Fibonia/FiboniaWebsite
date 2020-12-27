<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
  <style>
    /* -------------------------------------
          GLOBAL RESETS
      ------------------------------------- */
    img {
      border: none;
      -ms-interpolation-mode: bicubic;
      max-width: 100%;
    }

    body {
      background-color: rgb(0,0,0,0);
      opacity:1;
      -webkit-font-smoothing: antialiased;
      font-size: 14px;
      line-height: 1.4;
      margin: 0;
      padding: 0;
      border-color:rgb(0,0,0,0);
      -ms-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%;
    }

    table {
      border-collapse: separate;
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
      width: 100%;
    }

    table td {
      font-size: 14px;
      vertical-align: top;
    }

    /* -------------------------------------
          BODY & CONTAINER
      ------------------------------------- */
    .body {
        margin-top:30%;
        margin-right:30%;
      background-color: rgb(0,0,0,0);
      width: 100%;
      font-family: 'Roboto Condensed';
    }

    /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
    .container {
      display: block;
      Margin: -14% -8% !important;
      /* makes it centered */
      max-width: 580px;
      padding: 10px;
      width: 580px;
    }

    /* This should also be a block element, so that it will fill 100% of the .container */
    .content {
      box-sizing: border-box;
      display: block;
      Margin: 0 auto;
      max-width: 580px;
      padding: 10px;
    }

    /* -------------------------------------
          HEADER, FOOTER, MAIN
      ------------------------------------- */
    .main {
      border-radius: 3px;
      width: 100%;
      margin: 150px auto;
    }

    .wrapper {
      box-sizing: border-box;
      padding: 20px;
    }

    .content-block {
      padding-bottom: 10px;
      padding-top: 10px;
    }

    .footer {
      clear: both;
      Margin-top: 10px;
      text-align: center;
      width: 100%;
    }

    .footer td,
    .footer p,
    .footer span,
    .footer a {
      color: #999999;
      font-size: 12px;
      text-align: center;
    }

    /* -------------------------------------
          TYPOGRAPHY
      ------------------------------------- */
    h1,
    h2,
    h3,
    h4 {
      color: #000000;
      font-weight: 400;
      line-height: 1.4;
      margin: 0;
      Margin-bottom: 30px;
    }

    h1 {
      font-size: 35px;
      font-weight: 300;
      text-align: center;
      text-transform: capitalize;
    }

.disabled{
    cursor:default !important;
    background-color:#dee2e6 !important;
}

    p,
    ul,
    ol {
      font-size: 14px;
      font-weight: normal;
      margin: 0;
      Margin-bottom: 15px;
      display:flex;
      flex-wrap:wrap;
    }

    p li,
    ul li,
    ol li {
      list-style-position: inside;
      margin-left: 5px;
    }

    a {
      color: #3498db;
      text-decoration: underline;
    }

    /* -------------------------------------
          BUTTONS
      ------------------------------------- */
    .btn {
      box-sizing: border-box;
      width: 100%;
    }

    .btn>tbody>tr>td {
      padding-bottom: 15px;
    }

    .btn table {
      width: auto;
    }

    .btn table td {
      background-color: #ffffff;
      border-radius: 5px;
      text-align: center;
    }

    .btn a {
      background-color: #ffffff;
      border: solid 1px #3498db;
      border-radius: 5px;
      box-sizing: border-box;
      color: #3498db;
      cursor: pointer;
      display: inline-block;
      font-size: 14px;
      font-weight: bold;
      margin: 0;
      padding: 12px 25px;
      text-decoration: none;
      text-transform: capitalize;
    }

    .btn-primary table td {
      background-color: #3498db;
    }

    .btn-primary a {
      background-color: #3498db;
      border-color: #3498db;
      color: #ffffff;
    }

    /* -------------------------------------
          OTHER STYLES THAT MIGHT BE USEFUL
      ------------------------------------- */
    .last {
      margin-bottom: 0;
    }

    .first {
      margin-top: 0;
    }

    .align-center {
      text-align: center;
    }

    .align-right {
      text-align: right;
    }

    .align-left {
      text-align: left;
    }

    .clear {
      clear: both;
    }

    .mt0 {
      margin-top: 0;
    }

    .mb0 {
      margin-bottom: 0;
    }

    .preheader {
      color: transparent;
      display: none;
      height: 0;
      max-height: 0;
      max-width: 0;
      opacity: 0;
      overflow: hidden;
      mso-hide: all;
      visibility: hidden;
      width: 0;
    }

    .powered-by a {
      text-decoration: none;
    }

    hr {
      border: 0;
      border-bottom: 1px solid #f6f6f6;
      Margin: 20px 0;
    }

    /* -------------------------------------
          RESPONSIVE AND MOBILE FRIENDLY STYLES
      ------------------------------------- */
    @media only screen and (max-width: 620px) {
      table[class=body] h1 {
        font-size: 28px !important;
        margin-bottom: 10px !important;
      }
      
html {
    overflow-y:hidden !important;
}
      table[class=body] p,
      table[class=body] ul,
      table[class=body] ol,
      table[class=body] td,
      table[class=body] span,
      table[class=body] a {
        font-size: 16px !important;
      }

      table[class=body] .wrapper,
      table[class=body] .article {
        padding: 10px !important;
      }

      table[class=body] .content {
        padding: 0 !important;
      }

      table[class=body] .container {
        padding: 0 !important;
        width: 100% !important;
      }

      table[class=body] .main {
        border-left-width: 0 !important;
        border-radius: 0 !important;
        border-right-width: 0 !important;
      }

      table[class=body] .btn table {
        width: 100% !important;
      }

      table[class=body] .btn a {
        width: 100% !important;
      }

      table[class=body] .img-responsive {
        height: auto !important;
        max-width: 100% !important;
        width: auto !important;
      }
    }
    /* -------------------------------------
          PRESERVE THESE STYLES IN THE HEAD
      ------------------------------------- */
    @media all {
      .ExternalClass {
        width: 100%;
      }

      .ExternalClass,
      .ExternalClass p,
      .ExternalClass span,
      .ExternalClass font,
      .ExternalClass td,
      .ExternalClass div {
        line-height: 100%;
      }

      .apple-link a {
        color: inherit !important;
        font-family: inherit !important;
        font-size: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
        text-decoration: none !important;
      }

      .btn-primary table td:hover {
        background-color: #34495e !important;
      }

      .btn-primary a:hover {
        background-color: #34495e !important;
        border-color: #34495e !important;
      }
    }

.bgcol {
    background-color:white;
}
  
.btn-success {
  color: #fff;
  background-color: #36bea6;
  border-color: #36bea6; }
  .btn-success:hover {
    color: #fff;
    background-color: #2ea08c;
    border-color: #2b9683; }
  .btn-success:focus, .btn-success.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(54, 190, 166, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(54, 190, 166, 0.5); }
  .btn-success.disabled, .btn-success:disabled {
    color: #fff;
    background-color: #36bea6;
    border-color: #36bea6; }
  .btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
  .show > .btn-success.dropdown-toggle {
    color: #fff;
    background-color: #2b9683;
    border-color: #288c7b; }
    .btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-success.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(54, 190, 166, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(54, 190, 166, 0.5); }
      .btn {
  display: inline-block;
  font-weight: 400;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  .btn:hover, .btn:focus {
    text-decoration: none; }
  .btn:focus, .btn.focus {
    outline: 0;
    -webkit-box-shadow: transparent;
    box-shadow: transparent; }
  .btn.disabled, .btn:disabled {
    opacity: 0.65; }
  .btn:not(:disabled):not(.disabled) {
    cursor: pointer; }
  .btn:not(:disabled):not(.disabled):active, .btn:not(:disabled):not(.disabled).active {
    background-image: none; }
  </style>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script type="text/javascript" src="src/jquery-weekdays.js"></script>
  <script type="text/javascript">
    $(function () {
      $('#weekdays').weekdays();

      $('#weekdaysSelectedValues').weekdays1({
        selectedIndexes: []
      });
      $('#weekdaysSelectedValues1').weekdays2({
        selectedIndexes: []
      });
      $('#weekdaysSelectedValues2').weekdays3({
        selectedIndexes: []
      });
      $('#weekdaysSelectedValues3').weekdays4({
        selectedIndexes: []
      });
      $('#weekdaysSelectedValues4').weekdays5({
        selectedIndexes: []
      });
      $('#weekdaysSelectedValues5').weekdays6({
        selectedIndexes: []
      });
      $('#weekdaysSelectedValues6').weekdays7({
        selectedIndexes: []
      });
    });
  </script>
  <link href="src/jquery-weekdays.css" rel="stylesheet" />

</head>

<body>
  <table border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
      <td>&nbsp;</td>
      <td class="container">
        <div class="content">

          <table class="main">

            <!-- START MAIN CONTENT AREA -->
            <tr>
              <td class="wrapper">
                <table border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td>
                      <p style="margin-left:15%;color:red;font-weight:bold;" >Select your available 1-hour slots (5 slots per day) for each day you are free for appointments in general (in your local timezone).</p>
                      <p id="errormsg" style="color:red;margin-left:15%;"></p>
                      <div  style="margin-left:15%;z-index:100" id="weekdays"> </div>
                      <div style="margin-left:15%;z-index:1;" id="weekdaysSelectedValues"></div>
                      <div style="margin-left:15%;z-index:-2;position:relative;top:-260px;" id="weekdaysSelectedValues1"></div>
                      <div style="margin-left:15%;z-index:-3;position:relative;top:-520px;" id="weekdaysSelectedValues2"></div>
                      <div style="margin-left:15%;z-index:-4;position:relative;top:-780px;" id="weekdaysSelectedValues3"></div>
                      <div style="margin-left:15%;z-index:-5;position:relative;top:-1040px;" id="weekdaysSelectedValues4"></div>
                      <div style="margin-left:15%;z-index:-6;position:relative;top:-1300px;" id="weekdaysSelectedValues5"></div>
                      <div style="margin-left:15%;z-index:-7;position:relative;top:-1560px;" id="weekdaysSelectedValues6"></div>
                        <div style="opacity:0;z-index:-1;height:0px;" id="weekdaysCustom"> 
                        </div>
                        <button style="position:relative;top: -1550px;right: -28%;width: 50%;height: 30px;background-color:#7CFC00;" id="test" class = "btn btn-success">Submit</button>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>

            <!-- END MAIN CONTENT AREA -->
          </table>

          <!-- START FOOTER -->
          <div class="footer">
            <table border="0" cellpadding="0" cellspacing="0"></table>
          </div>
          <!-- END FOOTER -->

          <!-- END CENTERED WHITE CONTAINER -->
        </div>
      </td>
      <td>&nbsp;</td>
    </tr>
  </table>
</body>
    <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-auth.js"></script>
<script type="text/javascript">
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
  const db = firebase.firestore(); 
var x;
var lst = ["00:00","00:30", "01:00", "01:30", "02:00", "02:30", "03:00","03:30","04:00", "04:30", "05:00", "05:30", "06:00", "06:30","07:00","07:30", "08:00", "08:30", "09:00", "09:30", "10:00","10:30","11:00", "11:30", "12:00","12:30","13:00", "13:30", "14:00", "14:30", "15:00", "15:30","16:00","16:30", "17:00", "17:30", "18:00", "18:30", "19:00","19:30","20:00", "20:30", "21:00", "21:30", "22:00", "22:30","23:00","23:30","None"];
var finlst1 = []
var finlst2 = []
var finlst3 = []
var finlst4 = []
var finlst5 = []
var finlst6 = []
var finlst7 = []

$('#test').on('click', function() {
var lst1 = [];
    for (i = 1; i != 50; i+= 1) {
        if (document.getElementById(49).classList.contains("weekday-selected")){
            lst1 = [];
        }
        else if(document.getElementById(i).classList.contains("weekday-selected")){
            var xy = i-1;
            if (lst[xy] == "None"){
                
            }else{
            x = lst[xy][0]+lst[xy][1]+lst[xy][3]+lst[xy][4];
            lst1.push(parseInt(x));
            }
        };
    }
if (lst1.length > 5){
    document.getElementById("errormsg").innerHTML = "Please only select 5 times per day";
}else{
    finlst1 = lst1
}
});

$('#test').on('click', function() {
var lst2 = [];
    for (i = 1; i != 50; i+= 1) {
        if (document.getElementById('a'+49).classList.contains("weekday-selected")){
            lst2 = [];
        }
        else if(document.getElementById('a'+i).classList.contains("weekday-selected")){
            var xy = i-1;
            if (lst[xy] == "None"){
                
            }else{
            lst[xy] = lst[xy][0]+lst[xy][1]+lst[xy][3]+lst[xy][4];
            lst2.push(parseInt(lst[xy]));
            }
        };
    }
if (lst2.length > 5){
    document.getElementById("errormsg").innerHTML = "Please only select 5 times per day";
}else{
    finlst2 = lst2
}
});

$('#test').on('click', function() {
var lst3 = [];
    for (i = 1; i != 50; i+= 1) {
        if (document.getElementById('b'+49).classList.contains("weekday-selected")){
            lst3 = [];
        }
        else if(document.getElementById('b'+i).classList.contains("weekday-selected")){
            var xy = i-1;
            if (lst[xy] == "None"){
                
            }else{
            lst[xy] = lst[xy][0]+lst[xy][1]+lst[xy][3]+lst[xy][4];
            lst3.push(parseInt(lst[xy]));
            }
        };
    }
if (lst3.length > 5){
    document.getElementById("errormsg").innerHTML = "Please only select 5 times per day";
}else{
    finlst3 = lst3
}
});

$('#test').on('click', function() {
var lst4 = [];
    for (i = 1; i != 50; i+= 1) {
        if (document.getElementById('c'+49).classList.contains("weekday-selected")){
            lst4 = [];
        }
        else if(document.getElementById('c'+i).classList.contains("weekday-selected")){
            var xy = i-1;
            if (lst[xy] == "None"){
                
            }else{
            lst[xy] = lst[xy][0]+lst[xy][1]+lst[xy][3]+lst[xy][4];
            lst4.push(parseInt(lst[xy]));
            }
        };
    }
if (lst4.length > 5){
    document.getElementById("errormsg").innerHTML = "Please only select 5 times per day";
}else{
    finlst4 = lst4
}
});

$('#test').on('click', function() {
var lst5 = [];
    for (i = 1; i != 50; i+= 1) {
        if (document.getElementById('d'+49).classList.contains("weekday-selected")){
            lst5 = [];
        }
        else if(document.getElementById('d'+i).classList.contains("weekday-selected")){
            var xy = i-1;
            if (lst[xy] == "None"){
                
            }else{
            lst[xy] = lst[xy][0]+lst[xy][1]+lst[xy][3]+lst[xy][4];
            lst5.push(parseInt(lst[xy]));
            }
        };
    }
if (lst5.length > 5){
    document.getElementById("errormsg").innerHTML = "Please only select 5 times per day";
}else{
    finlst5 = lst5
}
});

$('#test').on('click', function() {
var lst6 = [];
    for (i = 1; i != 50; i+= 1) {
        if (document.getElementById('e'+49).classList.contains("weekday-selected")){
            lst6 = [];
        }
        else if(document.getElementById('e'+i).classList.contains("weekday-selected")){
            var xy = i-1;
            if (lst[xy] == "None"){
                
            }else{
            lst[xy] = lst[xy][0]+lst[xy][1]+lst[xy][3]+lst[xy][4];
            lst6.push(parseInt(lst[xy]));
            }
        };
    }
if (lst6.length > 5){
    document.getElementById("errormsg").innerHTML = "Please only select 5 times per day";
}else{
    finlst6 = lst6
}
});

$('#test').on('click', function() {
var lst7 = [];
    for (i = 1; i != 50; i+= 1) {
        if (document.getElementById('f'+49).classList.contains("weekday-selected")){
            lst7 = [];
        }
        else if(document.getElementById('f'+i).classList.contains("weekday-selected")){
            var xy = i-1;
            if (lst[xy] == "None"){
                
            }else{
            lst[xy] = lst[xy][0]+lst[xy][1]+lst[xy][3]+lst[xy][4];
            lst7.push(parseInt(lst[xy]));
            }
        };
    }

});
$('#test').on('click', function() {
if (finlst1.length > 5 || finlst2.length > 5 || finlst3.length > 5 || finlst4.length > 5 || finlst5.length > 5 || finlst6.length > 5 || finlst7.length > 5){
        document.getElementById("errormsg").innerHTML = "Please only select 5 times per day";
}else{
if ((finlst1.length <= 5 && finlst1.length !=0) || (finlst2.length <= 5 && finlst2.length !=0) ||(finlst3.length <= 5 && finlst3.length !=0) ||(finlst4.length <= 5 && finlst4.length !=0) ||(finlst5.length <= 5 && finlst5.length !=0) ||(finlst6.length <= 5 && finlst6.length !=0) ||(finlst7.length <= 5 && finlst7.length !=0)){
  db.collection("tutors").doc("<?php echo $_GET['code']; ?>").update({setPrefs: true,"prefTime.0":finlst2,"prefTime.1":finlst3,"prefTime.2":finlst4,"prefTime.3":finlst5,"prefTime.4":finlst6,"prefTime.5":finlst7,"prefTime.6":finlst1}).then(function(){window.top.location.href = "https://www.work.fibonia.com/1/html/pages-profile.php?success"; }); 
}
    
}});
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</html>

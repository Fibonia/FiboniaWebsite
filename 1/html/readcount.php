<?php
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (isset($_SESSION['loggedin'])){
$studentid = $_SESSION['id'];
}else if (isset($_SESSION['userData1'])){
$username = $_SESSION['userData1']['email_id'];  
$studentid = $_SESSION['userData1']['email_id'];
}else if (isset($_SESSION['userData'])){
$username = $_SESSION['userData']['email_id'];  

$studentid = $_SESSION['userData']['email_id'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <base target="_parent" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Messages | Fibonia</title>
    
</head>

<body>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400&amp;display=swap">
<a href="chat.php"><button class="Button">
  <span class="Button-inner">
    &#9993;
  </span>
<span id="unread-message-count" class="Badge"></span>
</button></a>
<style>
  .Button {
      
  background: transparent;
  border: 0;
  border-radius: 0;
  color: inherit;
  display: inline-block;
  font: inherit;
  height: auto;
  line-height: 1;
  margin: 0;
  padding: 0;
  position: relative;
  text-align: center;
  text-decoration: none;
  user-select: none;
}

/**
 * Override default focus styles so we can apply our own.
 * Never do this unless you will replace them!!
 */

.Button:focus {
  outline: none;
}

.Button::-moz-focus-inner {
  border: 0;
}

.Button-inner {
  align-items: center;
  background: #456BD9;
  border: 2px solid transparent;
  border-radius: 99em;
  color: #fff;
  display: flex;
  font-weight: 600;
  height: 3em;
  min-width: 2.5em;
  padding: 0 1em;
  position: relative;
  transition: 0.2s ease;
  width: 100%;
}

.Button:focus .Button-inner {
  border-color: #fff;
  box-shadow: 0 0 0 2px #456BD9;
}

.Button:hover .Button-inner {
  filter: brightness(1.1);
}

.Button:active .Button-inner {
  filter: brightness(0.9);
}

* {
  box-sizing: border-box;
  margin: 0;
}

html {
  height: 100%;
}

body {
  align-items: center;
  display: flex;
  font: 1.125em/1.5625 Source Sans Pro, Tahoma, Helvetica Neue, Helvetica, Arial, sans-serif;
  margin: 0;
}

.Badge {
  align-items: center;
  background: #ce2c6c;
  border: 2px solid #fff;
  border-radius: 99em;
  color: #fff;
  display: flex;
  font-size: 0.77em;
  font-weight: 400;
  height: 1.44em;
  justify-content: center;
  line-height: 1;
  min-width: 1.44em;
  position: absolute;
  right: -2px;
  top: -2px;
}

.u-hiddenVisually {
  border: 0 !important;
  clip: rect(1px, 1px, 1px, 1px) !important;
  height: 1px !important;
  overflow: hidden !important;
  padding: 0 !important;
  position: absolute !important;
  width: 1px !important;
}
</style>
    <script>
        (function (t, a, l, k, j, s) {
            s = a.createElement('script'); s.async = 1; s.src = "https://cdn.talkjs.com/talk.js"; a.getElementsByTagName('head')[0].appendChild(s); k = t.Promise
            t.Talk = { ready: { then: function (f) { if (k) return new k(function (r, e) { l.push([f, r, e]) }); l.push([f]) }, catch: function () { return k && new k() }, c: l } }
        })(window, document, []);
    </script>
    <script>
        window._demo = {};

        Talk.ready.then(function () {
            _demo.me = new Talk.User(<?php echo json_encode($studentid); ?>);
            _demo.session = new Talk.Session({
                // Replace YOUR_APP_ID with your own appId which you can find in the TalkJS dashboard (https://talkjs.com/dashboard)
                appId: "tiSkPmO8",
                me: _demo.me
            });
            _demo.session.unreads.on("change", function (conversationIds) {
                var unreadCount = conversationIds.length;
                document.getElementById("unread-message-count").innerHTML = unreadCount;
                console.log("Conversation ID's", conversationIds);
            });

        }, function (e) { console.log(e) }).catch(function (e) { console.log(e) });

    </script>

</body>

</html>
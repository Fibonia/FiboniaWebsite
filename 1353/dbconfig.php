<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'abelo999_abelo');    // DB username
define('DB_PASSWORD', 'Mamagan9');    // DB password
define('DB_DATABASE', 'abelo999_phplogin');      // DB name
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'abelo999_abelo';
$DATABASE_PASS = 'Mamagan9';
$DATABASE_NAME = 'abelo999_phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
date_default_timezone_set('America/Los_Angeles');
$error="";
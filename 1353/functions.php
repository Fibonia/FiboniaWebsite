<?php
require 'dbconfig.php';
function checkuser($fuid,$ffname,$femail){
    $check = mysql_query("select * from Usersfb where Fuid='$fuid'");
	$check = mysql_num_rows($check);
	if (empty($check)) {		
	$query = "INSERT INTO Usersfb (Fuid,Ffname,Femail) VALUES ('$fuid','$ffname','$femail')";
	mysql_query($query);	
	} else {	
	$query = "UPDATE Usersfb SET Ffname='$ffname', Femail='$femail' where Fuid='$fuid'";
	mysql_query($query);
	}
}?>
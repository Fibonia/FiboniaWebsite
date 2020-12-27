<?php
session_start();

$count = 0;
if ($count == 0) {
	echo json_encode(array("statusCode"=>200));
}  else{
    echo json_encode(array("statusCode"=>202));
}
mysqli_close($conn);
?>
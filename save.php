<?php


if ($_POST['face'] == "true" && $_POST['etutor'] == "false") {
	echo json_encode(array("statusCode"=>200));
} elseif ($_POST['face'] == "false" && $_POST['etutor'] == "true") {
    echo json_encode(array("statusCode"=>203));
}elseif ($_POST['face'] == "true" && $_POST['etutor'] == "true") {
    echo json_encode(array("statusCode"=>204));
}elseif ($worked == "error1") {
	echo json_encode(array("statusCode"=>201));
} else{
    echo json_encode(array("statusCode"=>202));
}
?>
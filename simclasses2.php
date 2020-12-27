<?php
session_start();
if ($_GET['code'] == "5ef99fc2ea99b5ef99fc2ea9d95ef99fc2eaa145ef99fc2eaa4c5ef99fc2eaa85"){
$var = substr($_GET['class'], 1, -1);
$pieces = explode(' ', $var);
$last_word = array_pop($pieces);
$var = rtrim($var, " ");
$var= preg_replace('/\W\w+\s*(\W*)$/', '$1', $var);
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.berkeleytime.com/api/grades/grades_json/?form=long",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
$response = json_decode($response, true);
$count = 0;
while ($response["courses"][$count] != NULL){
if ($response["courses"][$count]["abbreviation"] == $var && $response["courses"][$count]["course_number"] == $last_word){
    $id = $response["courses"][$count]["id"];
    $title = $response["courses"][$count]["title"];
}else{
    
}
$count += 1;
}

$class_names = array();
$count = 0;
while ($response["courses"][$count] != NULL){
if ($response["courses"][$count]["title"] == $title && $response["courses"][$count]["id"] != $id){
    $id1 = $response["courses"][$count]["abbreviation"];
    $title1 = $response["courses"][$count]["course_number"];
    $name = $id1." ".$title1;
    array_push($class_names, $name);
}else{
}

$count += 1;
}

$tstcount = 0;
while ($class_names[$tstcount] != NULL){
    $tstcount += 1;
}


echo json_encode($class_names);
}

?>
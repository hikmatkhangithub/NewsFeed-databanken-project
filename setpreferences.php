<?php
// get data from FORM
$preferenceName = $_POST['preferenceName'];
$preferenceValue = $_POST['preferenceValue'];


// 1.- add your json
$data = array(
    "preferenceName" => $preferenceName,
    "preferenceValue" => $preferenceValue);

$url = 'http://arcane-beach-84843.herokuapp.com/preferences/';

$data_string = json_encode($data);
print_r($data_string);

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json;charset=UTF-8'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);

header("refresh:1; url=preferences.php");
?>

<!--
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));-->

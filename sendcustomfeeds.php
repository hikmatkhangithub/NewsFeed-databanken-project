<!------------------------ For posting custom feeds to the REST API server in PHP--------------------------->
<?php
// get data from FORM
$feedformat = $_POST['select-feed-format'];
$feedtitle = $_POST['feedtitle'];
$feedlink = $_POST['link'];
$feeddescription = $_POST['description'];

// 1.- add your json
$data = array("feedFormat" => $feedformat,
	"feedItemIds" => ["19329213-7702-43c3-85c8-75998c1983c9"],
	"title" => $feedtitle,
	"description" => $feeddescription,
	"link" => $feedlink);

$url = 'http://arcane-beach-84843.herokuapp.com/feeds/';

$data_string = json_encode($data);
print_r($data_string);

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json;charset=UTF-8'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);

header("refresh:1; url=customfeeds.php");
?>
<?php
// get data from FORM

if(isset($_POST['channelnamecreate']) && isset($_POST['channelFeedLinkcreate']) && isset($_POST['select-channelfeed-format-create']) && isset($_POST['submitforcreate'])){



    $channelName = $_POST['channelnamecreate'];
    $Channelfeedlink = $_POST['channelFeedLinkcreate'];
    $channelType = $_POST['select-channelfeed-format-create'];

    $data = array(
        "channelName" => $channelName,
        "channelFeedLink" => $Channelfeedlink,
        "channelType" => $channelType);



    $url = 'http://arcane-beach-84843.herokuapp.com/channels/';

    $data_string = json_encode($data);
    print_r($data_string);

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json;charset=UTF-8'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
}


if(isset($_POST['channelid']) && isset($_POST['channelname']) && isset($_POST['channelFeedLink']) && isset($_POST['select-channelfeed-format']) && isset($_POST['submitforupdate'])){


    $channelId = $_POST['channelid'];
    $channelName = $_POST['channelname'];
    $Channelfeedlink = $_POST['channelFeedLink'];
    $channelType = $_POST['select-channelfeed-format'];

    $data = array("channelId" => $channelId,
        "channelName" => $channelName,
        "channelFeedLink" => $Channelfeedlink,
        "channelType" => $channelType);



    $url = 'http://arcane-beach-84843.herokuapp.com/channels/';

    $data_string = json_encode($data);
    print_r($data_string);

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json;charset=UTF-8'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
}


// 1.- add your json



/*------------------------delete request for channels------------------------*/
if(isset($_POST['channeldelete']) && isset($_POST['submitfordelete'])){


    $channelId = $_POST['channeldelete'];
    $data = array("channelId" => $channelId
        );

    $url = 'http://arcane-beach-84843.herokuapp.com/channels';
    $data_string = json_encode($data);
    print_r($data_string);


    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "Delete");
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json;charset=UTF-8'));
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    $result = curl_exec($ch);
    curl_close($ch);
}


header("refresh:1; url=providers.php");
?>

<!--public function delete($url, $data_string){

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_FAILONERROR, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Content-Type: application/json',
'Content-Length: ' . strlen($data_string))
);

$result = curl_exec($ch);
return $result;
}-->
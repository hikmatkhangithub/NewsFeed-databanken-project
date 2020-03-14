<?php
$client = curl_init("https://arcane-beach-84843.herokuapp.com/items");
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
curl_setopt($client, CURLOPT_SSL_VERIFYPEER, false );
$response = curl_exec($client);
$result = json_decode($response);

$client = curl_init("https://arcane-beach-84843.herokuapp.com/channels");
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
curl_setopt($client, CURLOPT_SSL_VERIFYPEER, false );
$channelsresponse = curl_exec($client);
$channelsresult = json_decode($channelsresponse);

$client = curl_init("https://arcane-beach-84843.herokuapp.com/feeds");
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
curl_setopt($client, CURLOPT_SSL_VERIFYPEER, false );
$customresponse = curl_exec($client);
$customresult = json_decode($customresponse);

$client = curl_init("https://arcane-beach-84843.herokuapp.com/preferences");
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
curl_setopt($client, CURLOPT_SSL_VERIFYPEER, false );
$setpreference = curl_exec($client);
$preferenceresult = json_decode($setpreference);


$timestamp = '$row->itemPublishDate';
$datetimeFormat = 'Y-m-d H:i:s';

$date = new \DateTime();

?>
<!DOCTYPE html>
<html>
<head>
    <title>NewsFeed</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <script src="https://code.jquery.com/jquery-3.4.1.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
    <header id="header">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="header_bottom">
                    <a href=""><img id="tuclogo" src="images/tuclogo.png" alt="TUC logo"></a>
                    <div class="logo_area">

                        <a href="index.php" class="logo"><img src="images/international-news-logo.png" alt="Databanken project logo"/></a></div>

                </div>
            </div>
        </div>
    </header>
    <section id="navArea">
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav main_nav">
                    <li class="active"><a href="index.php"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
                    <li><a href="latestnews.php">Latest News</a></li>
                    <li><a href="providers.php">Providers</a></li>
                    <li><a href="preferences.php">Preferences</a></li>
                    <li><a href="customfeeds.php">Custom feeds</a></li>
                    <li><a href="contact.php">Contact Us</a></li>

                </ul>
            </div>
        </nav>
    </section>

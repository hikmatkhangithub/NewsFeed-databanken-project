<?php include('partials/header.php'); ?>


    <section id="sliderSection">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="slick_slider">

                    <?php
                    foreach ($result as $row) {


                        echo "<div class=\"single_iteam\"> <a href=" . $row->itemLink . " target='_blank'> <img src='$row->itemImage'></a>
                        <div class=\"slider_article\">
                            <h2><a class=\"slider_tittle\" href=" . $row->itemLink . "  target='_blank'>" . $row->itemTitle . "</a></h2>
                            <p>" . $row->itemDescription . " (" . $row->itemPublishDate . ")</p>
                           
                        </div>
                    </div>";
                    }

                    ?>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="popular_post">
                    <h2><span>Popular post</span></h2>
                    <div class="popular_post_container">
                        <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
                        <ul class="popular_postnav">

                            <?php
                            foreach ($result as $row) {


                                echo "<li>
                                               <div class=\"media\"> <a href=" . $row->itemLink . " target='_blank' class=\"media-left\"> <img  src='$row->itemImage'> </a>
                                                    <div class=\"media-body\"> <a href=" . $row->itemLink . " target='_blank' class=\"catg_title\"> " . $row->itemTitle . " (" . $row->itemPublishDate . ")</a> </div>
                                                    
                                                </div>
                                          </li>";
                            }
                            ?>

                        </ul>
                        <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="contentSection">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="left_content">
                    <div class="single_post_content">
                        <h2><span>Todays News</span></h2>


                        <?php

//                        echo count($result);
                        if (isset($_GET["page"])) {
                           $page = $_GET['page'];
                            $end_count = ($_GET['page'] * 5);
                            $start_count = $end_count - 5;
                        } else {
                            $end_count = 5;
                            $start_count = 0;
                        }


                        foreach ($result as $index => $row) {

                            if ($index >= $start_count && $index < $end_count) {

                                echo "<div class=\"new_media\">
                                
                                      <a href=" . $row->itemLink . " target='_blank' class=\"media-left\"> <img  src='$row->itemImage'> </a>
                                                <div class=\"media-body\"> <a href=" . $row->itemLink . " target='_blank' class=\"catg_title\"> " . $row->itemTitle . " </a> 
                                                 <p>" . $row->itemDescription . " <br> ( <b>Date " . $row->itemPublishDate . "</b>)<br><br> <b>Entry date in the Web Feed: </b>" . $date->format($datetimeFormat) . " </p>
                                                  <p > <b>Channel Name </b>: <a href='$row->channelLink.' style='color: blue' target='_blank'>" . $row->channelName . "</a></p>
                                                  <p > <b>Channel link </b>: <a href='$row->channelLink.' style='color: blue' target='_blank'> " . $row->channelLink . "</a></p>
                                                  </div>
                                 </div>";
                            }
                        }
                        ?>

                        </ul>

                        <!--   <div class="single_post_content_right">
                            <ul class="spost_nav">
                                <?php
                        /*                                foreach ($result as $row){



                                                            echo  "<li>
                                                                       <div class=\"media\"> <a href=".$row ->itemLink." target='_blank' class=\"media-left\"> <img  src=\"images/post_img1.jpg\"> </a>
                                                                            <div class=\"media-body\"> <a href=".$row ->itemLink." target='_blank' class=\"catg_title\"> ".$row ->itemTitle." (".$row ->itemPublishDate.")</a> </div>

                                                                        </div>
                                                                  </li>"; }
                                                        */ ?>

                            </ul>
                        </div>-->
                    </div>

                </div>
            </div>
            <div class="container">
                <h2>Pagination</h2>
                <ul class="pagination">
                    <?php


                    if (isset($_GET["page"])) {
                        if ($page > 1) {

                            echo "<li><a href=index.php?page=" . ($page - 1) . "> « </a></li>";
                        }
                    }


                    ?>

                    <li><a href="index.php">1</a></li>
                    <li><a href="?page=2">2</a></li>
                    <li><a href="?page=3">3</a></li>
                    <li><a href="?page=4">4</a></li>
                    <?php
                    if (isset($_GET["page"])) {
                        if ($page < 4) {

                            echo "<li><a href=index.php?page=" . ($page + 1) . ">»</a></li>";
                        }
                    }


                    ?>
                </ul>
            </div>

            <!-- <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="latest_post">
                    <h2><span>Latest post</span></h2>
                    <div class="latest_post_container">
                        <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
                        <ul class="latest_postnav">

                            <?php
            /*                            foreach ($result as $row){



                                            echo  "<li>
                                                           <div class=\"media\"> <a href=".$row ->itemLink." class=\"media-left\"> <img  src=\"images/post_img1.jpg\"> </a>
                                                                <div class=\"media-body\"> <a href=\"pages/single_page.html\" class=\"catg_title\"> ".$row ->itemTitle."</a> </div>
                                                            </div>
                                                      </li>"; }
                                        */ ?>

                        </ul>
                        <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
                    </div>
                </div>
            </div>-->
        </div>
    </section>
<?php include('partials/footer.php'); ?>
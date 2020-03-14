<?php include('partials/header.php'); ?>

<!--<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="left_content">
        <div class="single_post_content">
            <h2><span>????????????????</span></h2>


            <form action="sendcustomfeeds.php" method="post" class="contact_form" id="formid">
                Enter Feed Format : <br>
                <select  class="form-control" name="select-feed-format">

                    <option value="rss">RSS</option>
                    <option value="atom">ATOM</option>
                </select> <br/> <br>
                Enter Feed title :<input type="text" name="feedtitle" placeholder="feed title"
                                         class="form-control"> <br/>
                Enter the Link: <input type="url" name="link" placeholder="link...." class="form-control"> <br/>
                Description: <textarea name="description" placeholder="description...." class="form-control" rows="4"
                                       cols="50"></textarea><br/>

                <input type="submit" value="submit"/>
            </form>
        </div>

    </div>
</div>-->

<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="left_content">
        <div class="single_post_content">
            <h2><span>Create Custom Feeds</span></h2>


            <form action="sendcustomfeeds.php" method="post" class="contact_form" id="formid">
                Enter Feed Format : <br>
                <select  class="form-control" name="select-feed-format">

                    <option value="rss">RSS</option>
                    <option value="atom">ATOM</option>
                </select> <br/> <br>
                Enter Feed title :<input type="text" name="feedtitle" placeholder="feed title"
                                            class="form-control"> <br/>
                Enter the Link: <input type="url" name="link" placeholder="link...." class="form-control"> <br/>
                Description: <textarea name="description" placeholder="description...." class="form-control" rows="4"
                                       cols="50"></textarea><br/>

                <input type="submit" value="submit"/>
            </form>
        </div>

    </div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="left_content">
        <div class="single_post_content">
            <h2><span>Custom Feeds</span></h2>


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


            foreach ($customresult as $index => $row) {

                if ($index >= $start_count && $index < $end_count) {

                    echo "<div class=\"new_media\"> 
                                
                                      <a href='#' target='_blank' class=\"media-left\"> <img  src='./images/news.jpg'> </a>
                                                    <div class=\"media-body\"> <a href=" . $row->rssLink . " target='_blank' class=\"catg_title\"> " . $row->feedTitle . " </a> 
                                                     <p>" . $row->feedDescription . "<br> <b>Entry date in the Web Feed: </b>" . $date->format($datetimeFormat) . " </p>
                                                      
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

                echo "<li><a href=customfeeds.php?page=" . ($page - 1) . "> « </a></li>";
            }
        }


        ?>

        <li><a href="customfeeds.php">1</a></li>
        <li><a href="?page=2">2</a></li>
        <li><a href="?page=3">3</a></li>
        <li><a href="?page=4">4</a></li>
        <?php
        if (isset($_GET["page"])) {
            if ($page < 4) {

                echo "<li><a href=customfeeds.php?page=" . ($page + 1) . ">»</a></li>";
            }
        }


        ?>
    </ul>
</div>

<?php include('partials/footer.php'); ?>

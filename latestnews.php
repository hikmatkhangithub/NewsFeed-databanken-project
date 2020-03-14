<?php include('partials/header.php'); ?>

    <div class="col-lg-12 ">
        <div class="latest_post">
            <h2><span>Latest post</span></h2>
            <div class="latest_post_container">
                <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
                <ul class="latest_postnav">

                    <?php
                    foreach ($result as $row){



                        echo  "<li>
                                               <div class=\"latestnewsmedia\"> <a href=".$row ->itemLink." class=\"media-left\"> <img  src='$row->itemImage'> </a>
                                                    <div class=\"media-body\"><a href=" . $row->itemLink . " target='_blank' class=\"catg_titles\"> " . $row->itemTitle . "</a> 
                                                      <p>" . $row->itemDescription . " <br> ( <b>Date " . $row->itemPublishDate . "</b>)<br><br> <b>Entry date in the Web Feed: </b>". $date->format($datetimeFormat) . " </p>
                                                      <p > <b>Channel Name </b>: <a href='.$row->channelLink.' style='color: blue' target='_blank'>".$row->channelName."</a></p>
                                                      <p > <b>Channel link </b>: <a href='.$row->channelLink.' style='color: blue' target='_blank'> ".$row->channelLink."</a></p>
                                                     
                                                     </div>
                                                </div>
                                          </li>"; }
                    ?>

                </ul>
                <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
            </div>
        </div>
    </div>



<?php include('partials/footer.php'); ?>
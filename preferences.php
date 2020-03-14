<?php  include("partials/header.php");?>


<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="left_content">
        <div class="single_post_content">
            <h2><span>Update Preferences of Feeds</span></h2>


            <form action="setpreferences.php" method="post" class="contact_form" id="formid">
                Enter Preference Name <br>
               <input type="text" name="preferenceName" placeholder="preference name" class="form-control"> <br/>
                Enter preference Value <br>
                <input type="text" name="preferenceValue" placeholder="preference value...." class="form-control"> <br/>

                <input type="submit" value="submit"/>
            </form>
        </div>

    </div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="left_content">
        <div class="single_post_content">
            <h2><span>Preferences</span></h2>


            <?php




            foreach ($preferenceresult as $row) {


                    echo "<div class=\"new_media\"> 
                                                    <div class=\"media-body\"> 
                                                     <p> <b>Preference Name: </b>" . $row->preferenceName . "<br> <b>Preference Value: </b>" . $row->preferenceValue . " </p>
                                                      
                                                     </div>
                                 </div>";

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


<?php  include("partials/footer.php");?>

<?php include('partials/header.php'); ?>

    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="left_content">
            <div class="single_post_content">
                <h2><span>Create Channels </span></h2>


                <form action="updatechannelsinfo.php" method="post" class="contact_form" id="formid">


                    Channel Name <input type="text" name="channelnamecreate" placeholder="channel name"
                                        class="form-control"><br/>
                    Enter channel Link: <input type="url" name="channelFeedLinkcreate" placeholder="channel link...." class="form-control"> <br/>

                    Enter Channel type (Mandatory): <br>
                    <select  class="form-control" name="select-channelfeed-format-create">

                        <option value="rss">RSS</option>
                        <option value="atom">ATOM</option>
                    </select> <br/> <br>
                    <input type="submit" name="submitforcreate" value="submit"/>
                </form>
            </div>

        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="left_content">
            <div class="single_post_content">
                <h2><span>Update Channels info</span></h2>


                <form action="updatechannelsinfo.php" method="post" class="contact_form" id="formidforupdate">

                    Enter Channel ID (Mandatory) :<input type="text" name="channelid" placeholder="channel Id"
                                             class="form-control"> <br/>
                    Channel Name <input type="text" name="channelname" placeholder="channel name"
                                        class="form-control"><br/>
                    Enter channel Link: <input type="url" name="channelFeedLink" placeholder="channel link...." class="form-control"> <br/>

                    Enter Channel type (Mandatory): <br>
                    <select  class="form-control" name="select-channelfeed-format">

                        <option value="rss">RSS</option>
                        <option value="atom">ATOM</option>
                    </select> <br/> <br>
                    <input type="submit" name="submitforupdate" value="submit"/>
                </form>
            </div>

        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="left_content">
            <div class="single_post_content">
                <h2><span>Delete Channels completely</span></h2>


                <form action="updatechannelsinfo.php" method="post" class="contact_form" id="formid">

                    Enter Channel ID (Mandatory) :<input type="text" name="channeldelete" placeholder="channel Id to delete"
                                                         class="form-control"> <br/>

                    <input type="submit"  name="submitfordelete" value="submit"/>
                </form>
            </div>

        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="left_content">
            <div class="single_post_content">
                <h2><span class="feedstest">Feeds providers and channels</span></h2>


                <?php
                foreach ($channelsresult as $row) {
                    echo "<div class=\"new_media\"> 
                                
                                      <a href=" . $row->channelLink . " target='_blank' class=\"media-left\"> <img  src='./images/news.jpg'> </a>
                                                    <div class=\"media-body\"> 
                                                    <p > <b>Channel Id </b>: " . $row->channelId . "</p>
                                                    <p > <b>Channel Type </b>: " . $row->channelType . "</p>
                                                      <p > <b>Channel Name </b>: <a href='$row->channelLink.' style='color: blue' target='_blank'>" . $row->channelName . "</a></p>
                                                      <p > <b>Channel link </b>: <a href='$row->channelLink.' style='color: blue' target='_blank'> " . $row->channelLink . "</a></p>
                                                        <p > <b>Channel Description </b>: " . $row->channelDescription . "</p>
                                                      </div>
                                                      <div class=\"switch-button\">
                                                         <label class=\"switch\">
                                                              <input type=\"checkbox\" class=\"selected_input\"  value='checked' checked>
                                                              <span class=\"slider round\"></span>
                                                          </label>
                                                      </div>
                            </div>
                                 
                                 
                                 
                                 ";

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

<script type="text/javascript">

    $(document).ready(function () {
        $('.selected_input').on( "click", function () {
alert("hello world");
            });
    });
 $(document).ready(function () {
        $('.feedstest').on( "click", function () {
alert("hello world");
            });
    });

    $(document).ready(function () {


        var channelsId = $('channelsresult.channelId').val();

        var get_filter  = getfilter('input:selected_input');

        var action = 'filterfeeds';

        $('.selected_input').on('keypress',function () {

            alert("hello world");
            $.ajax(
                dataType: "application/json",
                method: "POST",
                url: "EnableDisableChannels.php,
            data: { get_filter: get_filter}
        })
            .done(function( msg ) {

                alert( "Data Saved: " + get_filter );


            }).fail(function() {
        alert( "error" );
    })
        .always(function() {
            alert( "complete" );
        });;
        });

    });





    //----------------------- function for getting all the class name when selected --------------
    function getfilter(classname) {
        var filter = [];
        $('.'+classname+':checked').each(function () {
            filter.push($(this).val());
        })

        return filter;
    }

    //---------------------------------------------------------------------------------------------
</script>
<?php include('partials/footer.php'); ?>
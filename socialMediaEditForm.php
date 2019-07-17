<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');

    //Get Records
    $newID=$_GET['ID'];
    $query_social=mysqli_query($link, "SELECT * FROM socialmedia_master WHERE ID='$newID'");
    $view_social=mysqli_fetch_array($query_social);
    $newMediaID=$view_social['ID'];
    $newMediaName=$view_social['MediaName'];
    $newMediaLogo=$view_social['Logo'];

    //Fetch User's Social Links
    $query_userMedia=mysqli_query($link, "SELECT * FROM freelancer_social_media WHERE FreelancerID='$userID' AND SocialMediaID='$newMediaID'");
    $view_userMedia=mysqli_fetch_array($query_userMedia);
    $myURL=$view_userMedia['URL'];
?>

<form name="mySocialForm" id="mySocialForm" method="POST">

    <!--Language List Starts-->
    <div class="container" style="margin-bottom:20px;">
        <div class="row" style="margin-bottom:15px">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-size:10pt; padding-right:0px;">
                <img src="images/<?=$newMediaLogo?>" />&nbsp;<?=$newMediaName?>
            </div>
        </div>
        <div class="row" style="margin-bottom:15px">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-size:10pt; padding-right:0px;">
                <input type="text" class="form-control" value="<?=$myURL?>" name="txt_url" id="txt_url" placeholder="Enter URL*" />
            </div>
        </div>
    </div>
    <!--Language List Ends-->

    <div class="row">
        <div class="col-lg-12">
            <a href="#" class="btn btn-default btnSave" style="float:right">
                <img src="images/save.png" style="margin-top:-5px" />
            </a>
            <a href="#" class="btn btn-default btnCancel" style="float:right; margin-right:10px">
                <img src="images/arrowBack.png" style="margin-top:-5px" />
            </a>
        </div>
    </div>

</form>


<?php include_once('scripts/bottomScripts.php') ?>

<script>
    $(document).ready(function(){

        //Check Class
        $('.btnSave').click(function(){

            $('#btnSave').attr("disabled", true);

            $.post("app/socialMediaEditFormEntry?ID=<?=$newID?>",
            $("#mySocialForm").serialize(),
            function(data){
                if(data=='social_1')
                {
                    $('#social').load('socialMediaShow');
                }
                if(data=='social_0')
                {
                    alert('Error occured!');
                    $('#social').load('socialMediaShow');
                }
            });

            return false;
        });



        //Cancel Button
        $('.btnCancel').click(function(){
            $('#social').load('socialMediaShow');
            return false;
        });

    });
</script>

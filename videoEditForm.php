<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
    //Get Records
    $newLinkID=$_GET['ID'];

    $query_vid=mysqli_query($link, "SELECT * FROM freelancer_upload_videos WHERE ID='$newLinkID'");
    $view_vid=mysqli_fetch_array($query_vid);
    $vidID=$view_vid['ID'];
    $vidTitle=$view_vid['Title'];
    $vidFileName=$view_vid['FileName'];
?>
<form name="myVideoForm" id="myVideoForm" method="POST">
    <div class="row" style="margin-bottom:15px">
        <div class="col-lg-12">
            <input type="hidden" class="form-control" value="<?=$vidID?>" id="txt_ID" name="txt_ID" >
            <input type="text" class="form-control" value="<?=$vidTitle?>" id="txt_videoTitle" name="txt_videoTitle" placeholder="Enter Title*">
        </div>
    </div>
    <div class="row" style="margin-bottom:15px">
        <div class="col-lg-12">
            <video width="320" height="200" controls>
                <source src="userVideos/<?=$vidFileName?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

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
            var myTitle=$('#txt_videoTitle').val();

            if(myTitle!='')
            {
                $.post("app/videoEditFormEntry",
                $("#myVideoForm").serialize(),
                function(data){
                    if(data=='video_1')
                    {
                        $('#videos').load('videoShow');
                    }
                    if(data=='video_0')
                    {
                        alert('Error occured!');
                        $('#videos').load('videoShow');
                    }
                });
            }
            return false;
        });

        //Cancel Button
        $('.btnCancel').click(function(){
            $('#videos').load('videoShow');
            return false;
        });

    });
</script>

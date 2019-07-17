<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
?>

<style>
#upload-file-container {
   width: 150px;
   height: 150px;
   position: relative;
   border: dashed 1px #898989;
   overflow: hidden;
   margin:25px auto;
   background-image:url(images/uploadAudio.png);
   background-repeat:no-repeat;
   background-position:center;
}

#upload-file-container input[type="file"]
{
   margin: 0;
   opacity: 0;
   font-size: 100px;
}

.success_alert{
    background-color:#6C3;
    color:#FFF;
    border:dashed 1px #666;
    width:100%;
    height:30px;
    padding-top:4px;
    text-align:center;
    display:none;
}
</style>

<form name="myFormAudio" id="myFormAudio" method="POST" enctype="multipart/form-data" action="app/audioAddFormEntry">
    <div class="row" style="margin-bottom:15px">
        <div class="col-lg-12">
            <input type="text" class="form-control" id="txt_audioTitle" name="txt_audioTitle" placeholder="Enter Title*">
        </div>
    </div>
    <div class="row" style="margin-bottom:15px">
        <div class="col-lg-12">
            <!-- File Input Starts -->
            <div id="upload-file-container" >
                <input type="file" name="file" id="file" />
            </div>
            <!-- File Input Ends -->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <span id="fileStatus"></span>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <button type="submit" class="btn btn-default" onclick="profileAudio()" style="float:right; background-color:#FFF">
                <img src="images/save.png" style="margin-top:-5px" />
            </button>
            <a href="#" class="btn btn-default btnCancel" style="float:right; margin-right:10px">
                <img src="images/arrowBack.png" style="margin-top:-5px" />
            </a>
        </div>
    </div>
</form>
<?php include_once('scripts/bottomScripts.php') ?>

<script>
    $(document).ready(function(){

        //Cancel Button
        $('.btnCancel').click(function(){
            $('#audio').load('audioShow');
            return false;
        });

    });
</script>

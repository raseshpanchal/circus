<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
    //Get Records
    $newLinkID=$_GET['ID'];

    $query_mp3=mysqli_query($link, "SELECT * FROM freelancer_upload_audio WHERE ID='$newLinkID'");
    $view_mp3=mysqli_fetch_array($query_mp3);
    $mp3ID=$view_mp3['ID'];
    $mp3Title=$view_mp3['Title'];
    $mp3FileName=$view_mp3['FileName'];
?>
<form name="myAudioForm" id="myAudioForm" method="POST">
    <div class="row" style="margin-bottom:15px">
        <div class="col-lg-12">
            <input type="hidden" class="form-control" value="<?=$mp3ID?>" id="txt_ID" name="txt_ID" >
            <input type="text" class="form-control" value="<?=$mp3Title?>" id="txt_audioTitle" name="txt_audioTitle" readonly>
        </div>
    </div>
    <div class="row" style="margin-bottom:15px">
        <div class="col-lg-12">
            <audio controls controlsList="nodownload" controls="none" style="width:90%">
                <source src="userAudio/<?=$mp3FileName?>" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <a href="#" class="btn btn-default btnDel" style="float:right">
                <img src="images/trash.png" style="margin-top:-5px" />
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
        $('.btnDel').click(function(){
            var myTitle=$('#txt_audioTitle').val();

            if(myTitle!='')
            {
                $.post("app/audioDeleteFormEntry",
                $("#myAudioForm").serialize(),
                function(data){
                    if(data=='audio_1')
                    {
                        $('#audio').load('audioShow');
                    }
                    if(data=='audio_0')
                    {
                        alert('Error occured!');
                        $('#audio').load('audioShow');
                    }
                });
            }
            return false;
        });

        //Cancel Button
        $('.btnCancel').click(function(){
            $('#audio').load('audioShow');
            return false;
        });

    });
</script>

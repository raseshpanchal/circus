<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
?>

<?php
    $query_mp3=mysqli_query($link, "SELECT * FROM freelancer_upload_audio WHERE FreelancerID='$userID'");
    while($view_mp3=mysqli_fetch_array($query_mp3))
    {
        $mp3ID=$view_mp3['ID'];
        $mp3Title=$view_mp3['Title'];
        $mp3FileName=$view_mp3['FileName'];
        ?>
        <div class="row">
            <div class="col-lg-4">
                <audio controls controlsList="nodownload" controls="none" style="width:90%">
                    <source src="userAudio/<?=$mp3FileName?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>

            <div class="col-lg-6" style="padding:0px; padding-top:10px">
                <p><?=$mp3Title?></p>
            </div>

            <div class="col-lg-2" style="padding:0px; padding-top:10px; padding-right:10px; text-align:right">
                <a href="#" class="btn btn-default btnEdit" myID="<?=$mp3ID?>">
                    <img src="images/edit.gif" style="margin-top:-5px" />
                </a>
                <a href="#" class="btn btn-default btnDelete" myID="<?=$mp3ID?>">
                    <img src="images/delete.gif" style="margin-top:-5px" />
                </a>
            </div>
        </div>
        <?php
    }
?>


<div class="row" style="margin-top:50px">
    <div class="col-lg-12">
        <a href="#" class="btn btn-default btnAdd" style="float:right">
            <img src="images/add-green.png" style="margin-top:-5px" />
        </a>
    </div>
</div>


<?php include_once('scripts/bottomScripts.php') ?>

<script>
    $(document).ready(function(){

        //Add Class
        $('.btnAdd').click(function(){
            $('#audio').load('audioAddForm');
            return false;
        });

        //Edit Class
        $('.btnEdit').click(function(){
            var myID = $(this).attr('myID');
            $('#audio').load('audioEditForm?ID='+myID);
            return false;
        });

        //Delete Class
        $('.btnDelete').click(function(){
            var myID = $(this).attr('myID');
            $('#audio').load('audioDeleteForm?ID='+myID);
            return false;
        });

    });
</script>

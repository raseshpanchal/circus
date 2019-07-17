<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
?>

<div class="row" style="margin-bottom:30px; padding-bottom:10px;">

<?php
    $query_vid=mysqli_query($link, "SELECT * FROM freelancer_upload_videos WHERE FreelancerID='$userID'");
    while($view_vid=mysqli_fetch_array($query_vid))
    {
        $vidID=$view_vid['ID'];
        $vidTitle=$view_vid['Title'];
        $vidFileName=$view_vid['FileName'];
        ?>

        <div class="col-lg-6" style="margin-bottom:130px">
            <div class="card" style="width:320px; height:200px; border:0">

                <video width="320" height="200" controls>
                    <source src="userVideos/<?=$vidFileName?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

                <div class="card-body" style="height:100px; margin-top:10px; padding:0px">
                    <p class="card-text"><?=$vidTitle?></p>
                    <a href="#" class="btn btn-default btnEdit" myID="<?=$vidID?>">
                        <img src="images/edit.gif" style="margin-top:-5px" />
                    </a>
                    <a href="#" class="btn btn-default btnDelete" myID="<?=$vidID?>">
                        <img src="images/delete.gif" style="margin-top:-5px" />
                    </a>
                </div>
            </div>
        </div>

        <?php
    }
?>

</div>

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
            $('#videos').load('videoAddForm');
            return false;
        });

        //Edit Class
        $('.btnEdit').click(function(){
            var myID = $(this).attr('myID');
            $('#videos').load('videoEditForm?ID='+myID);
            return false;
        });

        //Delete Class
        $('.btnDelete').click(function(){
            var myID = $(this).attr('myID');
            $('#videos').load('videoDeleteForm?ID='+myID);
            return false;
        });

    });
</script>

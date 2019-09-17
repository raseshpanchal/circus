<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
?>

<style>
    .myBox{
        border: solid 0px red;
        height: 200px;
        background-size: cover;
        background-position: center center;
        padding-left: 0px;
        padding-right: 0px;
    }

    .myBox .boxTitle{
        position: relative;
        padding-left: 5px;
        background-color: rgb(255,255,255,0.5);
        font-size:10pt;
    }

    .myBox .boxBtns{
        position: relative;
        margin-top: 135px;
        border: solid 0px red;
        height: 42px;
        text-align: right;
        background-color: rgb(255,255,255,0.1);
        padding-top: 4px;
        padding-right: 4px;
    }
</style>

<div class="row" style="margin-bottom:30px; padding-bottom:10px;">
<?php
    $query_pic=mysqli_query($link, "SELECT * FROM freelancer_upload_images WHERE FreelancerID='$userID'");
    while($view_pic=mysqli_fetch_array($query_pic))
    {
        $picID=$view_pic['ID'];
        $picTitle=$view_pic['Title'];
        $picFileName=$view_pic['FileName'];
        ?>

            <div class="col-lg-3 myBox" style="background-image:url(<?='userPhotos/'.$picFileName?>);">
                <div class="boxTitle"><?=$picTitle?></div>
                <div class="boxBtns">
                    <a href="#" class="btn btn-default btnEdit" style="background-color:#fff" myID="<?=$picID?>">
                        <img src="images/edit.gif" style="margin-top:0px" />
                    </a>
                    <a href="#" class="btn btn-default btnDelete" style="background-color:#fff" myID="<?=$picID?>">
                        <img src="images/delete.gif" style="margin-top:0px" />
                    </a>
                </div>
            </div>

        <?php
    }
?>

</div>

<div class="row">
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
            $('#photos').load('photoAddForm');
            return false;
        });

        //Edit Class
        $('.btnEdit').click(function(){
            var myID = $(this).attr('myID');
            $('#photos').load('photoEditForm?ID='+myID);
            return false;
        });

        //Delete Class
        $('.btnDelete').click(function(){
            var myID = $(this).attr('myID');
            $('#photos').load('photoDeleteForm?ID='+myID);
            return false;
        });

    });
</script>

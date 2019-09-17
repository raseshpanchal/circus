<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');

    //Fetch Messages Count
    $query_messages = mysqli_query($link, "SELECT * FROM freelancer_inquiries WHERE UserID='$userID' AND Status='New'");
    $count_messages=mysqli_num_rows($query_messages);
?>
<div class="card">
    <div class="card-header text-white bg-dark">
    Basic Information
        <?php
        if($count_messages>=1)
        {
            ?>
                <button type="button" class="btn btn-primary btnMsgInfo" style="float:right;">
                    New Messages&nbsp;&nbsp;
                    <span class="badge badge-light">&nbsp;<?=$count_messages?>&nbsp;</span>
                </button>
            <?php
        }
        ?>


    </div>
    <div class="card-body">
        <div class="profile__avatar">
          <img src="profilePics/<?=$userProfilePic?>" alt="...">
        </div>

        <h5 class="card-title"><?=$userFullName?></h5>
        <p class="card-text" style="border:0px; border-bottom:dotted 1px #CCC"><i><?=$userBusinessTitle?></i></p>
        <p class="card-text" style="border:0px"><?=$userDescription?></p>
        <a href="#" class="btn btn-default btnBasicInfo" style="float:right">
            <img src="images/edit.gif" style="margin-top:-5px" />
        </a>
    </div>
</div>

<?php include_once('scripts/bottomScripts.php') ?>

<script>
    $(document).ready(function(){

        //Check Class
        $('.btnBasicInfo').click(function(){
            $('#basicInfo').load('basicInfoForm');
            return false;
        });

    });
</script>

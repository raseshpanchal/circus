<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
?>
<div class="card">
    <div class="card-header text-white bg-dark">
    Basic Information
    </div>
    <div class="card-body">
        <div class="profile__avatar">
          <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="...">
        </div>

        <h5 class="card-title"><?=$userFullName?>&nbsp;<small><i>( <?=$userProfessional?> )</i></small></h5>
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

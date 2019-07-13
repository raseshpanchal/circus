<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
?>
<div class="card">
    <div class="card-header bg-light">
    Contact Infomation
    </div>
    <div class="card-body">
        <h6 class="card-title">Registered Email ID</h6>
        <p class="card-text"><?=$myEmail?></p>
        <h6 class="card-title">Registered Mobile Number</h6>
        <p class="card-text"><?=$userMobile?></p>
        <h6 class="card-title">Registered Address</h6>
        <p class="card-text"><?=$userAddress?></p>
        <h6 class="card-title">Date of Birth</h6>
        <p class="card-text"><?=$userDOB?></p>
        <h6 class="card-title">Gender</h6>
        <p class="card-text"><?=$userGender?></p>

        <a href="#" class="btn btn-info btnContactInfo" style="float:right">Make Changes</a>
    </div>
</div>

<?php include_once('scripts/bottomScripts.php') ?>

<script>
    $(document).ready(function(){

        //Check Class
        $('.btnContactInfo').click(function(){
            $('#contactInfo').load('contactInfoForm');
        });

    });
</script>

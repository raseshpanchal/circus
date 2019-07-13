<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
?>
<div class="card">
    <form name="myForm" id="myForm" method="POST">
        <div class="card-header bg-info">
        Edit Contact Infomation
        </div>
        <div class="card-body">
            <h6 class="card-title">Registered Email ID</h6>
            <p class="card-text"><?=$myEmail?></p>
            <h6 class="card-title">Registered Mobile Number</h6>
            <p class="card-text">
            <input type="text" class="form-control" value="<?=$userMobile?>" id="txt_mobile" name="txt_mobile" placeholder="Mobile*">
            </p>
            <h6 class="card-title">Registered Address</h6>
            <p class="card-text">
                <input type="text" class="form-control" value="<?=$userAddress?>" id="txt_address" name="txt_address" placeholder="Address*">
            </p>
            <h6 class="card-title">Date of Birth</h6>
            <p class="card-text">
                <input type="text" class="form-control" value="<?=$userDOB?>" id="txt_dob" name="txt_dob" placeholder="dd/mm/yyyy*">
            </p>
            <h6 class="card-title">Gender</h6>
            <p class="card-text">
                <input type="text" class="form-control" value="<?=$userGender?>" id="txt_gender" name="txt_gender" placeholder="Gender*">
            </p>

            <a href="#" class="btn btn-dark btnContactInfo" style="float:right">Make Changes</a>
            <a href="#" class="btn btn-danger btnCancel" style="float:right; margin-right:10px">Cancel</a>

        </div>
    </form>
</div>

<?php include_once('scripts/bottomScripts.php') ?>

<script>
    $(document).ready(function(){

        //Check Class
        $('.btnContactInfo').click(function(){
            var myMobile=$('#txt_mobile').val();
            var myAddress=$('#txt_address').val();
            var myDOB=$('#txt_dob').val();
            var myGender=$('#txt_gender').val();

            if(myMobile!='' || myAddress!='' || myDOB!='' || myGender!='')
            {
                $.post("app/contactInfoFormEntry",
                $("#myForm").serialize(),
                function(data){
                    if(data=='1')
                    {
                        $('#contactInfo').load('contactInfoShow');
                    }
                    if(data=='0')
                    {
                        alert('Error occured!');
                        $('#contactInfo').load('contactInfoShow');
                    }
                });
            }
            return false;
        });

        //Cancel Button
        $('.btnCancel').click(function(){
            $('#contactInfo').load('contactInfoShow');
        });

    });
</script>

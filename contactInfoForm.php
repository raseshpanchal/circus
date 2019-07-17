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
            <h6 class="card-title">Date of Birth</h6>
            <p class="card-text">
                <input type="text" class="form-control" value="<?=$userDOB?>" id="txt_dob" name="txt_dob" placeholder="dd/mm/yyyy*">
            </p>
            <h6 class="card-title">Gender</h6>
            <p class="card-text">
                <input type="text" class="form-control" value="<?=$userGender?>" id="txt_gender" name="txt_gender" placeholder="Gender*">
            </p>

            <h6 class="card-title">Registered Mobile Number</h6>
            <p class="card-text">
            <input type="text" class="form-control" value="<?=$userMobile?>" id="txt_mobile" name="txt_mobile" placeholder="Mobile*">
            </p>
            <h6 class="card-title">Registered Address</h6>
            <p class="card-text">
                <input type="text" class="form-control" value="<?=$userAddress?>" id="txt_address" name="txt_address" placeholder="Address*">
            </p>
            <h6 class="card-title">City</h6>
            <p class="card-text">
                <input type="text" class="form-control" value="<?=$userCity?>" id="txt_city" name="txt_city" placeholder="City*">
            </p>
            <h6 class="card-title">State</h6>
            <p class="card-text">
                <input type="text" class="form-control" value="<?=$userState?>" id="txt_state" name="txt_state" placeholder="State*">
            </p>
            <h6 class="card-title">Zip Code</h6>
            <p class="card-text">
                <input type="text" class="form-control" value="<?=$userZipCode?>" id="txt_zip" name="txt_zip" placeholder="Zip Code*">
            </p>
            <h6 class="card-title">Country</h6>
            <p class="card-text">
                <input type="text" class="form-control" value="<?=$userCountry?>" id="txt_country" name="txt_country" placeholder="Country*">
            </p>


            <a href="#" class="btn btn-default btnContactInfo" style="float:right">
                <img src="images/save.png" style="margin-top:-5px" />
            </a>
            <a href="#" class="btn btn-default btnCancel" style="float:right; margin-right:10px">
                <img src="images/arrowBack.png" style="margin-top:-5px" />
            </a>

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
            return false;
        });

    });
</script>

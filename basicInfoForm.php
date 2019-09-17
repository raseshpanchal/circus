<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');

     $_SESSION['whrsrtfruser'];
?>
<div class="card">
    <div class="card-header text-white bg-info">
    Edit Basic Information
    </div>
    <div class="card-body">
        <form name="myForm" id="myForm" method="POST">

            <div class="profile__avatar">
              <img src="profilePics/<?=$userProfilePic?>" alt="...">
            </div>

            <h5 class="card-title">
                <div class="row">
                    <div class="col-lg-6">
                        <input type="text" class="form-control" value="<?=$userFirstName?>" readonly />
                    </div>

                    <div class="col-lg-6">
                        <input type="text" class="form-control" value="<?=$userLastName?>" readonly />
                    </div>
                </div>
            </h5>

            <div class="row" style="margin-bottom:10px">
                <div class="col-lg-12">
                    <input type="text" class="form-control" value="<?=$userBusinessTitle?>" id="txt_company" name="txt_company" placeholder="Business Title OR Company Name">
                </div>
            </div>

            <div class="row" style="margin-bottom:10px">
                <div class="col-lg-12">
                    <textarea class="form-control" rows="10" id="txt_desc" name="txt_desc" maxlength="250" style="margin-bottom:10px" placeholder="About you within 250 characters..."><?=$userDescription?></textarea>
                </div>
            </div>

            <div class="row" style="margin-bottom:10px">
                <div class="col-lg-12" style="text-align:right">
                    <a href="#" class="btn btn-default btnCancel" >
                        <img src="images/arrowBack.png" style="margin-top:-5px" />
                    </a>
                    &nbsp;&nbsp;
                    <a href="#" class="btn btn-default btnSave">
                        <img src="images/save.png" style="margin-top:-5px" />
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include_once('scripts/bottomScripts.php') ?>

<script>
    $(document).ready(function(){

        //Save Info
        $('.btnSave').click(function(){
            var myFirstName=$('#txt_fname').val();
            var myLastName=$('#txt_lname').val();
            var myProfession=$('#txt_profession').val();

            if(myFirstName!='' || myLastName!='' || myProfession!='')
            {
                $.post("app/basicInfoFormEntry",
                $("#myForm").serialize(),
                function(data){
                    if(data=='1')
                    {
                        $('#basicInfo').load('basicInfoShow');
                    }
                    if(data=='0')
                    {
                        alert('Error occured!');
                        $('#basicInfo').load('basicInfoShow');
                    }
                });
            }
            return false;
        });

        //Cancel Button
        $('.btnCancel').click(function(){
            $('#basicInfo').load('basicInfoShow');
            return false;
        });
    });
</script>

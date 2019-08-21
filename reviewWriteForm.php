<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');

    $newUserID=$_GET['ID'];
?>

<div class="card-body">
    <form name="myForm" id="myForm" method="POST">

        <input type="hidden" class="form-control" id="txt_user" name="txt_user" value="<?=$newUserID?>">
        <h5 class="card-title">
            <div class="row">
                <div class="col-lg-6">
                    <input type="text" class="form-control" id="txt_name" name="txt_name" placeholder="Your Name*">
                </div>

                <div class="col-lg-6">
                    <input type="text" class="form-control" id="txt_email" name="txt_email" placeholder="Email ID*">
                </div>
            </div>
        </h5>

        <div class="row" style="margin-bottom:10px">
            <div class="col-lg-12">
                <textarea class="form-control" rows="5" id="txt_review" name="txt_review" style="margin-bottom:10px" placeholder="Write review...."></textarea>
            </div>
        </div>

        <div class="row" style="margin-bottom:10px">
            <div class="col-lg-4">
                <div class="form-group">
                    <select id="starRating" class="form-control">
                        <option value="1">Rating &#128954;</option>
                        <option value="2">Rating &#128954;&#128954;</option>
                        <option value="3" selected>Rating &#128954;&#128954;&#128954;</option>
                        <option value="4">Rating &#128954;&#128954;&#128954;&#128954;</option>
                        <option value="5">Rating &#128954;&#128954;&#128954;&#128954;&#128954;</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-8" style="text-align:right">
                <button class="btn btn-sm btn-secondary" id="btnCancelReview" name="btnCancelReview">Cancel</button>
                &nbsp;&nbsp;
                <button class="btn btn-sm btn-info" id="btnSendReview" name="btnSendReview">Submit Review</button>
            </div>
        </div>


    </form>
</div>

<?php include_once('scripts/bottomScripts.php') ?>

<script>
    $(document).ready(function(){

        //Save Info
        $('#btnSendReview').click(function(){
            var myName=$('#txt_name').val();
            var myEmail=$('#txt_email').val();
            var myReview=$('#txt_review').val();
            var myRating = $('#starRating').find(":selected").val();

            if(myName!='' || myEmail!='' || myReview!='')
            {
                $.post("app/reviewWriteFormEntry?RT="+myRating,
                $("#myForm").serialize(),
                function(data){
                    if(data=='1')
                    {
                        $('.reviewHolder').load('reviewShow');
                        $('.btnReview').attr("disabled", false);
                    }
                    if(data=='0')
                    {
                        alert('Error occured!');
                        $('.reviewHolder').load('reviewShow');
                        $('.btnReview').attr("disabled", false);
                    }
                });
            }
            return false;
        });

        //Cancel Review
        $('#btnCancelReview').click(function(){
            $('.reviewHolder').load('reviewShow');
            $('.btnReview').attr("disabled", false);
            return false;
        });

    });
</script>

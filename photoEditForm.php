<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
    //Get Records
    $newLinkID=$_GET['ID'];

    $query_img=mysqli_query($link, "SELECT * FROM freelancer_upload_images WHERE ID='$newLinkID'");
    $view_img=mysqli_fetch_array($query_img);
    $imgID=$view_img['ID'];
    $imgTitle=$view_img['Title'];
    $imgName=$view_img['FileName'];
?>
<form name="myPhotoForm" id="myPhotoForm" method="POST">
    <div class="row" style="margin-bottom:15px">
        <div class="col-lg-12">
            <input type="hidden" class="form-control" value="<?=$imgID?>" id="txt_ID" name="txt_ID" >
            <input type="text" class="form-control" value="<?=$imgTitle?>" id="txt_photoTitle" name="txt_photoTitle" placeholder="Enter Title*">
        </div>
    </div>
    <div class="row" style="margin-bottom:15px">
        <div class="col-lg-12">
            <!--Card Starts-->
            <div class="card" style="width:150px; height:150px; background-image:url(<?='userPhotos/'.$imgName?>); background-size:cover; background-position:center center"></div>
            <!--Card Ends-->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <a href="#" class="btn btn-default btnSave" style="float:right">
                <img src="images/save.png" style="margin-top:-5px" />
            </a>
            <a href="#" class="btn btn-default btnCancel" style="float:right; margin-right:10px">
                <img src="images/arrowBack.png" style="margin-top:-5px" />
            </a>
        </div>
    </div>
</form>
<?php include_once('scripts/bottomScripts.php') ?>

<script>
    $(document).ready(function(){

        //Check Class
        $('.btnSave').click(function(){
            var myTitle=$('#txt_photoTitle').val();

            if(myTitle!='')
            {
                $.post("app/photoEditFormEntry",
                $("#myPhotoForm").serialize(),
                function(data){
                    if(data=='photo_1')
                    {
                        $('#photos').load('photoShow');
                    }
                    if(data=='photo_0')
                    {
                        alert('Error occured!');
                        $('#photos').load('photoShow');
                    }
                });
            }
            return false;
        });

        //Cancel Button
        $('.btnCancel').click(function(){
            $('#photos').load('photoShow');
            return false;
        });

    });
</script>

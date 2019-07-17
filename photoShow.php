<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
?>
<div class="row" style="margin-bottom:30px; padding-bottom:10px;">
<?php
    $query_pic=mysqli_query($link, "SELECT * FROM freelancer_upload_images WHERE FreelancerID='$userID'");
    while($view_pic=mysqli_fetch_array($query_pic))
    {
        $picID=$view_pic['ID'];
        $picTitle=$view_pic['Title'];
        $picFileName=$view_pic['FileName'];
        ?>

            <div class="col-lg-3" style="margin-bottom:130px">
                <div class="card" style="width:150px; height:150px; background-image:url(<?='userPhotos/'.$picFileName?>); background-size:cover; background-position:center center">
                    <div class="card-body" style="height:100px; margin-top:150px; padding:0px">
                        <p class="card-text"><?=$picTitle?></p>
                        <a href="#" class="btn btn-default btnEdit" myID="<?=$picID?>">
                            <img src="images/edit.gif" style="margin-top:-5px" />
                        </a>
                        <a href="#" class="btn btn-default btnDelete" myID="<?=$picID?>">
                            <img src="images/delete.gif" style="margin-top:-5px" />
                        </a>
                    </div>
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

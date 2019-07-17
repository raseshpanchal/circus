<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
?>

<?php
    $query_link=mysqli_query($link, "SELECT * FROM freelancer_upload_weblink WHERE FreelancerID='$userID'");
    while($view_link=mysqli_fetch_array($query_link))
    {
        $linkID=$view_link['ID'];
        $linkTitle=$view_link['Title'];
        $linkURL=urldecode($view_link['URL']);
        ?>
        <div class="row">
            <div class="col-lg-10">
                <?=$linkTitle?>
            </div>
            <div class="col-lg-2" style="text-align:right">
                <a href="#" class="btn btn-default btnEdit" myID="<?=$linkID?>">
                    <img src="images/edit.gif" style="margin-top:-5px" />
                </a>
                <a href="#" class="btn btn-default btnDelete" myID="<?=$linkID?>">
                    <img src="images/delete.gif" style="margin-top:-5px" />
                </a>
            </div>
        </div>
        <div class="row" style="margin-bottom:30px; padding-bottom:10px; border-bottom:solid 1px #CCC">
            <div class="col-lg-12">
                <a href="<?=$linkURL?>" target="_blank">
                    <?=$linkURL?>
                </a>
            </div>
        </div>
        <?php
    }
?>

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
            $('#links').load('linkAddForm');
        });

        //Edit Class
        $('.btnEdit').click(function(){
            var myID = $(this).attr('myID');
            $('#links').load('linkEditForm?ID='+myID);
            return false;
        });

        //Delete Class
        $('.btnDelete').click(function(){
            var myID = $(this).attr('myID');
            $('#links').load('linkDeleteForm?ID='+myID);
            return false;
        });

    });
</script>

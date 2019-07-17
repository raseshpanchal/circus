<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
?>

<?php
    $query_service=mysqli_query($link, "SELECT * FROM freelancer_services WHERE FreelancerID='$userID'");
    while($view_service=mysqli_fetch_array($query_service))
    {
        $serviceID=$view_service['ID'];
        $serviceTitle=$view_service['Title'];
        $serviceCurrency=$view_service['Currency'];
        $servicePrice=$view_service['Price'];
        $serviceDescription=urldecode($view_service['Description']);
        ?>
        <div class="row" style="border-bottom:dotted 1px #333; margin-bottom:10px; padding-bottom:10px">
            <div class="col-lg-9">
                <b><?=$serviceTitle?></b>
            </div>
            <div class="col-lg-3" style="text-align:right">
                <?=$serviceCurrency.' '.$servicePrice?>
                <a href="#" class="btn btn-default btnEdit" myID="<?=$serviceID?>">
                    <img src="images/edit.gif" style="margin-top:-5px" />
                </a>
                <a href="#" class="btn btn-default btnDelete" myID="<?=$serviceID?>">
                    <img src="images/delete.gif" style="margin-top:-5px" />
                </a>
            </div>
        </div>
        <div class="row" style="margin-bottom:30px; padding-bottom:10px; border-bottom:solid 1px #CCC">
            <div class="col-lg-12">
                <?=$serviceDescription?>
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
            $('#services').load('servAddForm');
        });

        //Edit Class
        $('.btnEdit').click(function(){
            var myID = $(this).attr('myID');
            $('#services').load('servEditForm?ID='+myID);
            return false;
        });

        //Delete Class
        $('.btnDelete').click(function(){
            var myID = $(this).attr('myID');
            $('#services').load('servDeleteForm?ID='+myID);
            return false;
        });

    });
</script>

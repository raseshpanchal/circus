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
            <div class="col-lg-2">
                <?=$serviceCurrency.' '.$servicePrice?>
            </div>
            <div class="col-lg-1" style="text-align:right">
                <a href="#" class="btn btn-primary btnEdit" style="float:right">Edit</a>
            </div>
        </div>
        <div class="row" style="margin-bottom:10px; padding-bottom:10px">
            <div class="col-lg-12">
                <?=$serviceDescription?>
            </div>
        </div>
        <?php
    }
?>

<div class="row">
    <div class="col-lg-12">
        <a href="#" class="btn btn-info btnAdd" style="float:right">Add</a>
    </div>
</div>


<?php include_once('scripts/bottomScripts.php') ?>

<script>
    $(document).ready(function(){

        //Check Class
        $('.btnAdd').click(function(){
            $('#services').load('servAddForm');
        });
        
        $('.btnEdit').click(function(){
        $('#services').load('servEditForm');
        });

    });
</script>

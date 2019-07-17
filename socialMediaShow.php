<?php
    error_reporting(0);
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
?>

<!--Language List Starts-->
<div class="container" style="margin-bottom:20px;">
    <div class="row">
        <?php
        $query_social=mysqli_query($link, "SELECT * FROM socialmedia_master WHERE Publish='Yes' ORDER BY MediaName ASC");
        while($view_social=mysqli_fetch_array($query_social))
        {
            $newMediaID=$view_social['ID'];
            $newMediaName=$view_social['MediaName'];
            $newMediaLogo=$view_social['Logo'];
            ?>
                <div class="col-lg-3 col-md-2 col-sm-6 col-xs-12 btnEdit" myID="<?=$newMediaID?>" style="font-size:10pt; padding-right:0px; margin-bottom:15px">
                    <img src="images/<?=$newMediaLogo?>" />
                    <?=$newMediaName?>
                </div>
            <?php
        }
        ?>
    </div>
</div>
<!--Language List Ends-->

<?php include_once('scripts/bottomScripts.php') ?>

<script>
    $(document).ready(function(){

        //Edit Class
        $('.btnEdit').click(function(){
            var myID=$(this).attr('myID');
            $('#social').load('socialMediaEditForm?ID='+myID);
            return false;
        });

    });
</script>

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
        $query_language=mysqli_query($link, "SELECT * FROM language_master WHERE Publish='Yes' ORDER BY Language ASC");
        while($view_language=mysqli_fetch_array($query_language))
        {
            $newLanguageID=$view_language['ID'];
            $newLanguage=$view_language['Language'];
            //Fetch User's Skills
            $query_userLang=mysqli_query($link, "SELECT * FROM freelancer_languages WHERE FreelancerID='$userID' AND LanguageID='$newLanguageID'");
            $view_userLang=mysqli_fetch_array($query_userLang);
            $myLanguageID=$view_userLang['LanguageID'];
            if($newLanguageID==$myLanguageID)
            {
            ?>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12" style="font-size:10pt; padding-right:0px; margin-bottom:5px">
                    <?='&#10004;'.$newLanguage?>
                </div>
            <?php
            }
        }
        ?>
    </div>
</div>
<!--Language List Ends-->

<a href="#" class="btn btn-default btnEdit" style="float:right">
    <img src="images/edit.gif" style="margin-top:-5px" />
</a>


<?php include_once('scripts/bottomScripts.php') ?>

<script>
    $(document).ready(function(){

        //Edit Class
        $('.btnEdit').click(function(){
            $('#languages').load('languagesEditForm');
            return false;
        });

    });
</script>

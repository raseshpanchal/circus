<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
?>

<form name="myLanguageForm" id="myLanguageForm" method="POST">

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
            ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="font-size:10pt; padding-right:0px; margin-bottom:5px">
                    <input type="checkbox" id="checkboxvar[]"
                    <?php
                    if($newLanguageID==$myLanguageID)
                    {
                        echo 'checked="checked"';
                    }
                    ?>
                           name="checkboxvar[]" value="<?=$newLanguageID?>" />
                    <?=$newLanguage?>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <!--Language List Ends-->

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

            $('#btnSave').attr("disabled", true);

            $.post("app/languageEditFormEntry",
            $("#myLanguageForm").serialize(),
            function(data){
                if(data=='language_1')
                {
                    $('#languages').load('languagesShow');
                }
                if(data=='language_0')
                {
                    alert('Error occured!');
                    $('#languages').load('languagesShow');
                }
            });

            return false;
        });



        //Cancel Button
        $('.btnCancel').click(function(){
            $('#languages').load('languagesShow');
            return false;
        });

    });
</script>

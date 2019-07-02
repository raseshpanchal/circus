<?php
    //error_reporting(0);
    session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');

    $newEmail=myDecode($_GET['ID']);

    //Find User Details
    $query_user=mysqli_query($link, "SELECT * FROM recruiter_registration WHERE EmailID='$newEmail'");
    $view_user=mysqli_fetch_array($query_user);
    $newFirstName=$view_user['FirstName'];
    $newLastName=$view_user['LastName'];
    $newFullName=$newFirstName.' '.$newLastName;

?>
<!DOCTYPE html>
<html>
<head>
    <title><?=$newPageTitle?></title>
    <meta charset="UTF-8">
    <meta name="description" content="<?=$newPageDesc?>">
    <meta name="keywords" content="<?=$newPageKeywords?>">
    <?php include_once('scripts/headTags.php') ?>
</head>
<body>

    <!--Top Menu Starts-->
    <?php
    include_once('topMenu.php');
    ?>
    <!--Top Menu Ends-->


    <div class="container-fluid innerSlide">

        <h1>
            EMAIL CONFIRMATION - RECRUITER
        </h1>

    </div>

    <div class="container">
        <div class="row" style="padding-top:50px; padding-bottom:50px;">
            <?php
            //Check Email Confirmation
            $query_confirm=mysqli_query($link, "SELECT * FROM recruiter_registration WHERE EmailID='$newEmail' AND Status='No'");
            $view_confirm=mysqli_num_rows($query_confirm);

            if($view_confirm!=0)
            {
                //Update Email Status
                $query_1=mysqli_query($link, "UPDATE recruiter_registration SET Status='Valid' WHERE EmailID='$newEmail'");

                if($query_1)
                {
                    ?>
                    Dear <?=$newFullName?>,<br/><br/>
                    Your email ID has been confirmed. Thanks for registering with WhereSert.com as a recruiter.<br/><br/>
                    Now you can login into system and add your profile details. To add or update profile details, you can visit "My Account" section after login.<br/><br/>
                    Thanks for using WhereSert!<br/><br/>
                    Team WhereSert.com
                    <?php
                }
            }
            else if($view_confirm==0)
            {
                ?>
                Dear <?=$newFullName?>,<br/><br/>
                Your email ID is already confirmed. Thanks for registering with WhereSert.com as a recruiter.<br/><br/>
                Now you can login into system and add your profile details. To add or update profile details, you can visit "My Account" section after login.<br/><br/>
                Thanks for using WhereSert!<br/><br/>
                Team WhereSert.com
                <?php
            }
            ?>
        </div>
    </div>

    <!--Survey Info Starts-->
    <div class="container-fluid" style="border-top:solid 2px #CCC;">
        <?php
        include_once('survey.php');
        ?>
    </div>
    <!--Survey Info Ends-->

    <!--Survey Numbers Starts-->
    <div class="container-fluid" style="border-top:solid 2px #CCC; padding-top:20px; padding-bottom:20px;">
        <?php
        include_once('surveyNumbers.php');
        ?>
    </div>
    <!--Survey Numbers Ends-->

    <?php include_once('footer-01.php') ?>
    <?php include_once('footer-02.php') ?>


    <?php include_once('scripts/bottomScripts.php') ?>

    <script>
        $(document).ready(function(){

        });
    </script>

    <script type="text/javascript">
        function googleTranslateElementInit()
        {
            new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,ar,hi'}, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>

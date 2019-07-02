<?php
    error_reporting(0);
    session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
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
            <img src="images/wheresert-logo-3d.png" />
            WE ARE HAPPY TO HELP YOU
        </h1>

    </div>

    <div class="container">
        <div class="row" style="padding-top:50px; padding-bottom:50px;">

            <div class="col"></div>

            <div class="col-lg-6">
                <form action="post">

                    <h3 style="border-bottom:dotted 1px #333; padding-bottom:15px; margin-bottom:15px">Registration Problem?</h3>

                    <div class="form-group">
                        <input type="text" class="form-control" id="txt_email" name="txt_email" placeholder="Type Your Email ID*">
                    </div>

                    <div class="form-check-inline" style="margin-bottom:10px;">
                        <label class="form-check-label">
                            I was trying to get register as &nbsp;&nbsp;
                            <input type="radio" class="form-check-input" id="txt_userType" name="txt_userType" checked> Freelancer / Small Business
                        </label>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="txt_userType" name="txt_userType"> Recruiter / Hirer
                        </label>
                    </div>

                    <button class="btn btnWhereSert" style="float:right">Send</button>

                </form>
            </div>

            <div class="col"></div>



        </div>
    </div>

    <!--Why Wheresert Starts-->
    <div class="container-fluid whyWheresert">
        <?php
        include_once('whyWheresert.php');
        ?>
    </div>
    <!--Why Wheresert Ends-->

    <!--Download App Starts-->
    <div class="container-fluid downloadApp">
        <?php
        include_once('downloadApp.php');
        ?>
    </div>
    <!--Download App Ends-->

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

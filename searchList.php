<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');

    $newCN=$_GET['CN'];
    $newLF=$_GET['LF'];
    $query_find=mysqli_query($link, "SELECT * FROM freelancer_registration WHERE City='$newCN' AND Professional='$newLF'");
    $num_profile=mysqli_num_rows($query_find);
?>
<!DOCTYPE html>
<html>
<head>
    <title><?=$newPageTitle?></title>
    <meta charset="UTF-8">
    <meta name="description" content="<?=$newPageDesc?>">
    <meta name="keywords" content="<?=$newPageKeywords?>">
    <?php include_once('scripts/headTags.php') ?>
    <style>
        .btn-default{
            border:solid 1px #898989;
        }
    </style>
</head>
<body>

    <!--Top Menu Starts-->
    <?php
    include_once('topMenu.php');
    ?>
    <!--Top Menu Ends-->


    <div class="container-fluid innerSlide">
        <h1 style="margin-left:-50px">Result for <?=$newLF?> in <?=$newCN?> city</h1>
    </div>

    <div class="container">

        <div class="row" style="padding-bottom:5px; margin-top:10px; margin-bottom:5px; border-bottom:dotted 1px #333">
            <div class="col-lg-12">
                Total <?=$num_profile?> result found
            </div>
        </div>

        <div class="row" style="padding-top:5px; padding-bottom:50px; margin-bottom:50px">
            <?php
            //Find Profile Details
            $query_user=mysqli_query($link, "SELECT * FROM freelancer_registration WHERE City='$newCN' AND Professional='$newLF'");
            while($view_user=mysqli_fetch_array($query_user))
            {
                $newUserID=$view_user['ID'];
                $newFirstName=$view_user['FirstName'];
                $newLastName=$view_user['LastName'];
                $newProfession=$view_user['Professional'];
                $newCity=$view_user['City'];
                $newState=$view_user['State'];
                $newCountry=$view_user['Country'];

                ?>
                <div class="col-lg-3">
                    <div class="card" style="width:100%; height:200px; background-image:url('userPhotos/1563278377_RajeshPanchal.jpg'); background-size:cover; background-position:center center; margin-bottom:150px;">

                      <div class="card-body" style="margin-top:200px; background-color:#FFF">
                        <h5 class="card-title"><?=$newFirstName.' '.$newLastName?></h5>
                        <p class="card-text"><?=$newProfession?></p>
                        <p style="font-size:9pt; border-top:dotted 1px #898989; padding-top:7px">
                            <img src="images/mapLocation.png"/> <?=$newCity.' / '.$newState.' / '.$newCountry?>
                        </p>
                        <a href="#" class="btn btn-default btn-sm btnProfile" style="float:right" myID="<?=myEncode($newUserID)?>">See Profile</a>
                      </div>
                    </div>
                </div>

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

            $('.btnProfile').click(function(){
                var myID = $(this).attr('myID');
                window.location.href="profileDetails?ID="+myID;
            });

            /*
            $('.btnProfile').click(function(){
                var myID=$(this).attr('myID');
                 window.location.href="profileDetails?ID="+myID;
            });
            */

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

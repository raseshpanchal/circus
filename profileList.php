<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');

    $newSubCatID=myDecode($_GET['ID']);
    $query_subCat=mysqli_query($link, "SELECT * FROM subcategories WHERE ID='$newSubCatID'");
    $view_subCat=mysqli_fetch_array($query_subCat);
    $newSubCategory=$view_subCat['SubCategory'];
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
        <h1 style="margin-left:-50px"><?=$newSubCategory?></h1>
    </div>

    <div class="container">
        <div class="row" style="padding-top:50px; padding-bottom:50px; margin-bottom:50px">
            <?php
            $query_skills = mysqli_query($link, "SELECT * FROM freelancer_skills WHERE SkillID='$newSubCatID'");
            while($view_skills=mysqli_fetch_array($query_skills))
            {
                $newFreelancerID=$view_skills['FreelancerID'];
                //Find User Details
                $query_user=mysqli_query($link, "SELECT * FROM freelancer_registration WHERE ID='$newFreelancerID'");
                $view_user=mysqli_fetch_array($query_user);
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
                        <a href="#" class="btn btn-default btn-sm btnProfile" style="float:right" myID="<?=myEncode($newFreelancerID)?>">See Profile</a>
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
                var myID=$(this).attr('myID');
                 window.location.href="profileDetails?ID="+myID;
            });

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

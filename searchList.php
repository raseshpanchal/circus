<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');

    $newCN=$_GET['CN'];
    $newLF=$_GET['LF'];

    //Find Skill ID
    $query_skill=mysqli_query($link, "SELECT * FROM subcategories WHERE SubCategory='$newLF'");
    $view_skill=mysqli_fetch_array($query_skill);
    $newSkillID=$view_skill['ID'];

    $query_find=mysqli_query($link, "SELECT * FROM freelancer_skills WHERE SkillID='$newSkillID'");
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
                Total <?=$num_profile?> result(s) found
            </div>
        </div>

        <div class="row" style="padding-top:5px; padding-bottom:50px; margin-bottom:50px">
            <?php
            //Find Profile Details
            //$query_find=mysqli_query($link, "SELECT * FROM freelancer_skills WHERE SkillID='$newSkillID'");
            $query_find=mysqli_query($link, "SELECT * FROM freelancer_skills WHERE SkillName LIKE '$newLF%'");
            while($view_find=mysqli_fetch_array($query_find))
            {
                $newFreelancerID=$view_find['FreelancerID'];
                //Find Profile Details
                $query_user=mysqli_query($link, "SELECT * FROM freelancer_registration WHERE ID='$newFreelancerID'");
                $view_user=mysqli_fetch_array($query_user);
                $newUserID=$view_user['ID'];
                $newFirstName=$view_user['FirstName'];
                $newLastName=$view_user['LastName'];
                $newProfilePic=$view_user['ProfilePic'];
                $newCity=$view_user['City'];
                $newState=$view_user['State'];
                $newCountry=$view_user['Country'];

                ?>
                <div class="col-lg-3">
                    <div class="card" style="width:100%; height:80px; background-image:url('profilePics/<?=$newProfilePic?>'); background-position:center center; background-repeat:no-repeat; margin-bottom:150px; text-align:center; padding-top:160px">
                      <div class="card-body" style="margin-top:-30px; background-color:#FFF">
                        <h5 class="card-title"><?=$newFirstName.' '.$newLastName?></h5>
                        <p style="font-size:9pt; border-top:dotted 1px #898989; padding-top:7px; text-align:left">
                            <img src="images/mapLocation.png"/> <?=$newCity.' / '.$newState.' / '.$newCountry?>
                        </p>
                        <a href="#" class="btn btn-default btn-sm btnProfile" style="float:right" myID="<?=myEncode($newUserID)?>">View Profile</a>
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

</body>
</html>

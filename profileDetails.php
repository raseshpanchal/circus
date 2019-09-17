<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');

    $newMainCatID=myDecode($_GET['MID']);
    $query_mainCat=mysqli_query($link, "SELECT * FROM main_categories WHERE ID='$newMainCatID'");
    $view_mainCat=mysqli_fetch_array($query_mainCat);
    $newMainCategory=$view_mainCat['MainCat'];

    $newCatID=myDecode($_GET['CID']);
    $query_cat=mysqli_query($link, "SELECT * FROM categories WHERE ID='$newCatID'");
    $view_cat=mysqli_fetch_array($query_cat);
    $newCategory=$view_cat['Category'];

    $newSkillID=myDecode($_GET['SID']);
    $query_subCat=mysqli_query($link, "SELECT * FROM subcategories WHERE ID='$newSkillID'");
    $view_subCat=mysqli_fetch_array($query_subCat);
    $newSubCategory=$view_subCat['SubCategory'];

    //Fetch Profile Details
    echo $newID=myDecode($_GET['ID']);
    $query_user=mysqli_query($link, "SELECT * FROM freelancer_registration WHERE ID='$newID'");
    $view_user=mysqli_fetch_array($query_user);
    $newProfileID=$view_user['ID'];
    $newProfileFirstName=$view_user['FirstName'];
    $newProfileLastName=$view_user['LastName'];
    $userProfileFullName=$newProfileFirstName.' '.$newProfileLastName;
    $newProfilePic=$view_user['ProfilePic'];
    $newProfileBusinessTitle=$view_user['BusinessTitle'];
    $newProfileDescription=urldecode($view_user['Description']);
    $newProfileAddress=$view_user['Address'];
    $newProfileCity=$view_user['City'];
    $newProfileState=$view_user['State'];
    $newProfileCountry=$view_user['Country'];
    $newProfileZipCode=$view_user['ZipCode'];

    //Fetch Breadcrum Details
    $query_path=mysqli_query($link, "SELECT * FROM freelancer_categories WHERE UserID='$newProfileID'");
    $view_path=mysqli_fetch_array($query_path);
    $newMainCatID=$view_path['MainCatID'];
    $newSubCatID=$view_path['SubCatID'];

    //Fetch Main Cat Name
    $query_cat=mysqli_query($link, "SELECT * FROM main_categories WHERE ID='$newMainCatID'");
    $view_cat=mysqli_fetch_array($query_cat);
    $newMainCat=$view_cat['MainCat'];

    //Fetch Sub Cat Name
    $query_sub=mysqli_query($link, "SELECT * FROM categories WHERE ID='$newSubCatID'");
    $view_sub=mysqli_fetch_array($query_sub);
    $newSubCat=$view_sub['Category'];

?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>
        <?=$newPageTitle?>
    </title>
    <meta charset="UTF-8">
    <meta name="description" content="<?=$newPageDesc?>">
    <meta name="keywords" content="<?=$newPageKeywords?>">

    <?php include_once('scripts/headTags.php') ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body
        {
            margin-top:20px;
            background:#f5f5f5;
        }

        .panel
        {
            box-shadow: none;
        }

        .panel-heading
        {
            border-bottom: 0;
        }

        .panel-title
        {
            font-size: 17px;
        }

        .panel-title > small
        {
            font-size: .75em;
            color: #999999;
        }

        .panel-body *:first-child
        {
            margin-top: 0;
        }

        .panel-footer
        {
            border-top: 0;
        }

        .panel-default > .panel-heading
        {
            color: #333333;
            background-color: transparent;
            border-color: rgba(0, 0, 0, 0.07);
        }

        /**
         * Profile
         */
        /*** Profile: Header  ***/
        .profile__avatar
        {
            float: left;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-right: 20px;
            overflow: hidden;
        }

        @media (min-width: 768px)
        {
            .profile__avatar
            {
                width: 100px;
                height: 100px;
            }
        }

        .profile__avatar > img
        {
            width: 100%;
            height: auto;
        }

        .profile__header
        {
            overflow: hidden;
        }

        .profile__header p
        {
            margin: 20px 0;
        }

        /*** Profile: Table ***/
        @media (min-width: 992px)
        {
            .profile__table tbody th
            {
                width: 200px;
            }
        }

        /*** Profile: Recent activity ***/
        .profile-comments__item
        {
            position: relative;
            padding: 15px 16px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .profile-comments__item:last-child
        {
            border-bottom: 0;
        }

        .profile-comments__item:hover,
        .profile-comments__item:focus
        {
            background-color: #f5f5f5;
        }

        .profile-comments__item:hover .profile-comments__controls,
        .profile-comments__item:focus .profile-comments__controls
        {
            visibility: visible;
        }

        .profile-comments__controls
        {
            position: absolute;
            top: 0;
            right: 0;
            padding: 5px;
            visibility: hidden;
        }

        .profile-comments__controls > a
        {
            display: inline-block;
            padding: 2px;
            color: #999999;
        }

        .profile-comments__controls > a:hover,
        .profile-comments__controls > a:focus
        {
            color: #333333;
        }

        .profile-comments__avatar
        {
            display: block;
            float: left;
            margin-right: 20px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
        }

        .profile-comments__avatar > img
        {
            width: 100%;
            height: auto;
        }

        .profile-comments__body
        {
            overflow: hidden;
        }

        .profile-comments__sender
        {
            color: #333333;
            font-weight: 500;
            margin: 5px 0;
        }

        .profile-comments__sender > small
        {
            margin-left: 5px;
            font-size: 12px;
            font-weight: 400;
            color: #999999;
        }

        @media (max-width: 767px)
        {
            .profile-comments__sender > small
            {
                display: block;
                margin: 5px 0 10px;
            }
        }

        .profile-comments__content
        {
            color: #999999;
        }

/*** Profile: Contact ***/
.profile__contact-btn {
  padding: 12px 20px;
  margin-bottom: 20px;
}
.profile__contact-hr {
  position: relative;
  border-color: rgba(0, 0, 0, 0.1);
  margin: 40px 0;
}
.profile__contact-hr:before {
  content: "OR";
  display: block;
  padding: 10px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  background-color: #f5f5f5;
  color: #c6c6cc;
}
.profile__contact-info-item {
  margin-bottom: 30px;
}
.profile__contact-info-item:before,
.profile__contact-info-item:after {
  content: " ";
  display: table;
}
.profile__contact-info-item:after {
  clear: both;
}
.profile__contact-info-item:before,
.profile__contact-info-item:after {
  content: " ";
  display: table;
}
.profile__contact-info-item:after {
  clear: both;
}
.profile__contact-info-icon {
  float: left;
  font-size: 18px;
  color: #999999;
}
.profile__contact-info-body {
  overflow: hidden;
  padding-left: 20px;
  color: #999999;
}
.profile__contact-info-body a {
  color: #999999;
}
.profile__contact-info-body a:hover,
.profile__contact-info-body a:focus {
  color: #999999;
  text-decoration: none;
}
.profile__contact-info-heading {
  margin-top: 2px;
  margin-bottom: 5px;
  font-weight: 500;
  color: #999999;
}
    /*NEW CSS*/
        .card-title{
            color: #379783;
        }
        .card-text{
            padding-bottom: 5px;
            border-bottom: dotted 1px #333;
        }
        .btn-default{
            border: solid 1px #898989;
            padding: 5px !important;
            min-height: 25px !important;
            min-width: 25px !important;
        }

        .card-header{
            background-color: #77d6c3;
        }

        .card-header a{
            color: #333;
        }
    </style>
</head>

<body>

    <!--Top Menu Starts-->
    <?php
        include_once('topMenu.php');
        ?>
    <!--Top Menu Ends-->

    <!--Breadcrum Starts-->
    <div class="container breadcrum" style="margin-top:20px">
        <div class="row">
            <div class="col-lg-12">
                <a href="./">
                <?=$newMainCat?>
                </a>
                &nbsp;&nbsp;/&nbsp;&nbsp;
                <a href="category?MID=<?=myEncode($newMainCatID)?>&CID=<?=myEncode($newCatID)?>">
                <?=$newSubCat?>
                </a>
                <!--
                &nbsp;&nbsp;/&nbsp;&nbsp;
                <a href="profileList?MID=<?=myEncode($newMainCatID)?>&CID=<?=myEncode($newCatID)?>&SID=<?=myEncode($newSkillID)?>">
                <?=$newSubCategory?>
                </a>
                -->
                &nbsp;&nbsp;/&nbsp;&nbsp;
                <?=$newProfileFirstName.' '.$newProfileLastName?>
            </div>
        </div>
    </div>
    <!--Breadcrum Ends-->

    <div class="container">

        <div class="row" style="padding-top:30px; padding-bottom:50px;">

            <div class="col-lg-3 col-md-3">

                <!--Rating Starts-->
                <div class="card">
                    <div class="card-header text-white bg-dark">
                        User Rating&nbsp;&nbsp;&nbsp;

                        <span class="fa fa-star starChecked"></span>
                        <span class="fa fa-star starChecked"></span>
                        <span class="fa fa-star starChecked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>

                    </div>
                </div>
                <!--Rating Ends-->

                <!--Sample-->
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <div class="row">
                            <div class="col border-right">
                                <span class="text-muted">Like</span>
                                <div class="font-weight-bold">0</div>
                            </div>
                            <div class="col">
                                <span class="text-muted">Share</span>
                                <div class="font-weight-bold">0</div>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px">
                            <div class="col border-right">
                                <span class="text-muted"><small>Click to Like</small></span>
                            </div>
                            <div class="col">
                                <span class="text-muted"><small>Click to Share</small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Sample-->

                <!--Skill Starts-->
                <div class="card" style="margin-top:30px">
                    <div class="card-header text-white bg-dark">
                        My Skills
                    </div>
                    <div class="card-body">
                        <?php
                        $query_skill=mysqli_query($link, "SELECT * FROM freelancer_skills WHERE FreelancerID='$newID'");
                        while($view_skill=mysqli_fetch_array($query_skill))
                        {
                            $skillID=$view_skill['SkillID'];
                            //Fetch Skill Name
                            $query_subCat=mysqli_query($link, "SELECT * FROM subcategories WHERE ID='$skillID'");
                            $view_subCat=mysqli_fetch_array($query_subCat);
                            $newSubCategory=$view_subCat['SubCategory'];
                        ?>
                        <p class="card-text" style="padding-bottom:15px">
                            <?=$newSubCategory?>
                        </p>
                        <?php
                        }
                        ?>

                    </div>
                </div>
                <!--Skill Ends-->

                <!--Language Starts-->
                <div class="card" style="margin-top:30px">
                    <div class="card-header text-white bg-dark">
                        Languages Known
                    </div>
                    <div class="card-body">
                        <?php
                        $query_userLang=mysqli_query($link, "SELECT * FROM freelancer_languages WHERE FreelancerID='$newID'");
                        while($view_userLang=mysqli_fetch_array($query_userLang))
                        {
                            $languageID=$view_userLang['LanguageID'];
                            //Fetch Language Name
                            $query_lang=mysqli_query($link, "SELECT * FROM language_master WHERE ID='$languageID'");
                            $view_lang=mysqli_fetch_array($query_lang);
                            $newLanguage=$view_lang['Language'];
                        ?>
                        <p class="card-text" style="padding-bottom:15px">
                            <?=$newLanguage?>
                        </p>
                        <?php
                        }
                        ?>

                    </div>
                </div>
                <!--Language Ends-->


                <!--Social Starts-->
                <div class="card" style="margin-top:30px">
                    <div class="card-header text-white bg-dark">
                        Social Media
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php
                        $query_userSocial=mysqli_query($link, "SELECT * FROM freelancer_social_media WHERE FreelancerID='$newID'");
                        while($view_userSocial=mysqli_fetch_array($query_userSocial))
                        {
                            $newSocialMediaID=$view_userSocial['SocialMediaID'];
                            $newSocialMediaURL=$view_userSocial['URL'];
                            //Fetch Social Media Name
                            $query_social=mysqli_query($link, "SELECT * FROM socialmedia_master WHERE ID='$newSocialMediaID'");
                            $view_social=mysqli_fetch_array($query_social);
                            $newMediaName=$view_social['MediaName'];
                            $newMediaLogo=$view_social['Logo'];

                            if($newSocialMediaURL!='')
                            {
                            ?>

                            <div class="col-lg-3">
                                <a href="<?=$newSocialMediaURL?>" target="_blank">
                                    <img src="images/<?=$newMediaLogo?>" />
                                </a>
                            </div>

                            <?php
                            }
                        }
                        ?>
                        </div>
                    </div>
                </div>
                <!--Social Ends-->
            </div>

            <div class="col-lg-9 col-md-9">
                <div class="card" style="margin-bottom:30px">
                    <div class="card-header text-white bg-dark">
                        Basic Information
                    </div>
                    <div class="card-body">
                        <div class="profile__avatar">
                            <img src="profilePics/<?=$newProfilePic?>" alt="...">
                        </div>

                        <h5 class="card-title">
                            <?=$userProfileFullName?>
                        </h5>
                        <p class="card-text" style="border:0px; border-bottom:dotted 1px #CCC">
                            <?=$newProfileBusinessTitle?>
                        </p>
                        <p style="border:0px; font-size:10pt; padding:0px; margin-top:-8px">
                            <img src="images/mapLocation.png" />
                            <?=$newProfileCity.', '.$newProfileCountry?>
                        </p>
                        <p style="padding-top:20px; text-align:justify">
                            <?=$newProfileDescription?>
                        </p>
                    </div>

                </div>

                <div class="card" style="margin-bottom:30px">
                    <div class="card-header text-white bg-dark">
                        Services Provided
                    </div>
                    <div class="card-body">
                        <?php
                            $query_service=mysqli_query($link, "SELECT * FROM freelancer_services WHERE FreelancerID='$newID'");
                            while($view_service=mysqli_fetch_array($query_service))
                            {
                                $serviceID=$view_service['ID'];
                                $serviceTitle=$view_service['Title'];
                                $serviceCurrency=$view_service['Currency'];
                                $servicePrice=$view_service['Price'];
                                $serviceDescription=urldecode($view_service['Description']);
                            ?>
                        <div class="row" style="border-bottom:dotted 1px #333; margin-bottom:10px; padding-bottom:10px">
                            <div class="col-lg-10">
                                <b>
                                    <?=$serviceTitle?></b>
                            </div>
                            <div class="col-lg-2" style="text-align:right">
                                <?php
                                    if($servicePrice=='Ask' || $servicePrice=='ask')
                                    {
                                        echo 'Ask for Price';
                                    }
                                    else
                                    {
                                        echo $serviceCurrency.' '.$servicePrice;
                                    }
                                ?>
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

                    </div>
                </div>

                <!--Work Showcase Starts-->
                <div id="accordion" style="margin-bottom:50px">

                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                            Photo Gallery
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <?php
                                        $query_photo=mysqli_query($link, "SELECT * FROM freelancer_upload_images WHERE FreelancerID='$newID' AND Publish='Yes'");
                                        while($view_photo=mysqli_fetch_array($query_photo))
                                        {
                                            $photoTitle=$view_photo['Title'];
                                            $photoFileName=$view_photo['FileName'];
                                            ?>
                                            <div class="col-lg-2">
                                                <img src="userPhotos/<?=$photoFileName?>" style="width:100%" />
                                            </div>
                                            <?php
                                        }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                            Audio
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                            Lorem ipsum..
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                            Video
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                            Lorem ipsum..
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                            PDF Documents
                            </a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                            Lorem ipsum..
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                            External Website Links
                            </a>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                            Lorem ipsum..
                            </div>
                        </div>
                    </div>

                </div>
                <!--Work Showcase Ends-->



                <!--ConctactMe Start-->

                <div class="card" style="margin-bottom:30px">
                    <div class="card-header text-white bg-dark">
                        Contact <?=$userFullName?>
                    </div>
                    <div class="card-body">
                        <form name="myContactForm" id="myContactForm" method="POST">
                            <input type="hidden" class="form-control" id="txt_user" name="txt_user" value="<?=$newID?>">
                            <div class="row" style="padding:5px">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control form-require" id="txt_fname" name="txt_fname" placeholder="Your First Name*" required />
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control form-require" id="txt_lname" name="txt_lname" placeholder="Your Last Name*" required />
                                </div>

                            </div>

                            <div class="row" style="padding:5px">
                                <div class="col-lg-6">
                                    <label class="form-check-label">
                                        Gender
                                    </label>
                                    <div class="form-check-inline" style="margin-top:10px;">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" id="txt_gender" name="txt_gender" value="Male" checked> Male
                                        </label>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" id="txt_gender" name="txt_gender" value="Female"> Female
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control form-require" id="txt_location" name="txt_location" placeholder="Enter City Name*" list="cityList" required />
                                    <datalist id="cityList">
                                    <?php
                                    //Fetch City List
                                    $query_city=mysqli_query($link, "SELECT * FROM cities ORDER BY CityName ASC");
                                    while($view_city=mysqli_fetch_array($query_city))
                                    {
                                        $newCityName=$view_city['CityName'];
                                        ?>
                                            <option value="<?=$newCityName?>">
                                        <?php
                                    }
                                    ?>
                                    </datalist>
                                </div>

                            </div>

                            <div class="row" style="padding:5px">
                                <div class="col-lg-6">
                                    <input type="email" class="form-control form-require" id="txt_email" name="txt_email" placeholder="Email ID (Optional)" />
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control form-require" id="txt_number" name="txt_number" placeholder="Mobile Number*" required />
                                </div>
                            </div>

                            <div class="row" style="padding:5px">
                                <div class="col-lg-12">
                                    <textarea class="form-control" id="txt_comment" name="txt_comment" placeholder="Short note..."></textarea>
                                </div>
                            </div>

                            <div class="row" style="padding:5px;">
                                <div class="col-lg-12">
                                    Do you want <?=$userFullName?> to&nbsp;&nbsp;&nbsp;
                                    <label>
                                        <input type="checkbox" id="check_userpre" name="check_userpre[]" value="PhoneCall" checked="checked"> Call on your Mobile&nbsp;&nbsp;&nbsp;
                                    </label>
                                    <label>
                                        <input type="checkbox" id="check_userpre" name="check_userpre[]" value="SMS/Whatsapp"> SMS/Whatsapp&nbsp;&nbsp;&nbsp;
                                    </label>
                                    <label>
                                        <input type="checkbox" id="check_userpre" name="check_userpre[]" check="check_userpre" value="Email"> Send an Email
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12" style="text-align:right">
                                    <button class="btn btn-sm btn-info" id="btnSend" name="btnSend">
                                        Send Inquiry &amp; Create My Account
                                    </button>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12" style="font-size:9pt; text-align:right; padding-top:10px">
                                    By creating an account you will be able to write reviews, share your experiences, and manage freelancers track.
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <span id="contStatus"></span>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!--ConctactMe End-->



                <!--Review Starts-->
                <div class="card" style="margin-bottom:30px">
                    <div class="card-header text-white bg-dark">
                        <span style="margin-top:5px;">
                        Reviews
                        </span>
                        <span style="float:right">
                            <button class="btn btn-sm btn-info btnReview">Write Review</button>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="reviewHolder">
                        </div>
                    </div>
                </div>
                <!--Review Ends-->



            </div>

        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            //Save Info
            $('#btnSend').click(function() {
                var myContactName = $('#txt_name').val();
                var myContactEmail = $('#txt_email').val();
                var myContactLoc = $('#txt_location').val();
                var myContactNumber = $('#txt_number').val();
                $('#btnSend').attr("disabled", true);
                var myUserPrefrence = $("input[name='check_userpre']:checked").val();

                if(myContactNumber.length < 10)
                {
                    $('#contStatus').text('Incorrect Mobile Number');
                    $('#txt_number').val('');
                    $('#btnSend').attr("disabled", false);
                }
                else
                {
                    $.post("app/contactDetailEntry",
                        $("#Contact").serialize(),
                        function(data){
                            if(data == 'regiSuccess')
                            {
                                $('#txt_fname').val('');
                                $('#txt_lname').val('');
                                $('#txt_location').val('');
                                $('#txt_email').val('');
                                $('#txt_number').val('');
                                $('#contStatus').html('<br/>Inquiry has been submitted successfully!<br/>User will contact you at the earliest.');
                            }
                            else if(data == '0')
                            {
                                $('#contStatus').html('<span style="color:red">Please check internet connection</span>');
                            }
                        });
                    return false;
                }
            });

            //Load Reviews
            $('.reviewHolder').load('reviewShow?ID=<?=$newID?>');

            //Show Write Review
            <?php
            if($myEmail)
            {
                ?>
                $('.btnReview').click(function(){
                    $('.reviewHolder').load('reviewWriteForm?ID=<?=$newID?>');
                    $('.btnReview').attr("disabled", true);
                    return false;
                });
                <?php
            }
            else
            {
                ?>
                $('.btnReview').click(function(){
                    window.location.href="wheresert-sign-in";
                });
                <?php
            }
            ?>

        });

    </script>
</body>

</html>

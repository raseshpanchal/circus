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
    $newID=myDecode($_GET['ID']);
    $query_user=mysqli_query($link, "SELECT * FROM freelancer_registration WHERE ID='$newID'");
    $view_user=mysqli_fetch_array($query_user);
    $newFirstName=$view_user['FirstName'];
    $newLastName=$view_user['LastName'];
    $userFullName=$newFirstName.' '.$newLastName;
    $newProfession=$view_user['Professional'];
    $newBusinessTitle=$view_user['BusinessTitle'];
    $newDescription=urldecode($view_user['Description']);
    $newAddress=$view_user['Address'];
    $newCity=$view_user['City'];
    $newState=$view_user['State'];
    $newCountry=$view_user['Country'];
    $newZipCode=$view_user['ZipCode'];
    //Fetch Profile Pic
    $query_pic=mysqli_query($link, "SELECT * FROM freelancer_upload_images WHERE FreelancerID='$newID'");
    $view_pic=mysqli_fetch_array($query_pic);
    $newProfilePic=$view_pic['FileName'];

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
        body{
    margin-top:20px;
    background:#f5f5f5;
}
    .panel {
  box-shadow: none;
}
.panel-heading {
  border-bottom: 0;
}
.panel-title {
  font-size: 17px;
}
.panel-title > small {
  font-size: .75em;
  color: #999999;
}
.panel-body *:first-child {
  margin-top: 0;
}
.panel-footer {
  border-top: 0;
}
.panel-default > .panel-heading {
    color: #333333;
    background-color: transparent;
    border-color: rgba(0, 0, 0, 0.07);
}
/**
 * Profile
 */
/*** Profile: Header  ***/
.profile__avatar {
  float: left;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  margin-right: 20px;
  overflow: hidden;
}
@media (min-width: 768px) {
  .profile__avatar {
    width: 100px;
    height: 100px;
  }
}
.profile__avatar > img {
  width: 100%;
  height: auto;
}
.profile__header {
  overflow: hidden;
}
.profile__header p {
  margin: 20px 0;
}
/*** Profile: Table ***/
@media (min-width: 992px) {
  .profile__table tbody th {
    width: 200px;
  }
}
/*** Profile: Recent activity ***/
.profile-comments__item {
  position: relative;
  padding: 15px 16px;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}
.profile-comments__item:last-child {
  border-bottom: 0;
}
.profile-comments__item:hover,
.profile-comments__item:focus {
  background-color: #f5f5f5;
}
.profile-comments__item:hover .profile-comments__controls,
.profile-comments__item:focus .profile-comments__controls {
  visibility: visible;
}
.profile-comments__controls {
  position: absolute;
  top: 0;
  right: 0;
  padding: 5px;
  visibility: hidden;
}
.profile-comments__controls > a {
  display: inline-block;
  padding: 2px;
  color: #999999;
}
.profile-comments__controls > a:hover,
.profile-comments__controls > a:focus {
  color: #333333;
}
.profile-comments__avatar {
  display: block;
  float: left;
  margin-right: 20px;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  overflow: hidden;
}
.profile-comments__avatar > img {
  width: 100%;
  height: auto;
}
.profile-comments__body {
  overflow: hidden;
}
.profile-comments__sender {
  color: #333333;
  font-weight: 500;
  margin: 5px 0;
}
.profile-comments__sender > small {
  margin-left: 5px;
  font-size: 12px;
  font-weight: 400;
  color: #999999;
}
@media (max-width: 767px) {
  .profile-comments__sender > small {
    display: block;
    margin: 5px 0 10px;
  }
}
.profile-comments__content {
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
    </style>
</head>

<body>

    <!--Top Menu Starts-->
    <?php
        include_once('topMenu.php');
        ?>
    <!--Top Menu Ends-->

    <!--Breadcrum Starts-->
    <div class="container breadcrum" style="margin-top:60px">
        <div class="row">
            <div class="col-lg-12">
                <a href="./">
                <?=$newMainCategory?>
                </a>
                &nbsp;&nbsp;/&nbsp;&nbsp;
                <a href="category?MID=<?=myEncode($newMainCatID)?>&CID=<?=myEncode($newCatID)?>">
                <?=$newCategory?>
                </a>
                &nbsp;&nbsp;/&nbsp;&nbsp;
                <a href="profileList?MID=<?=myEncode($newMainCatID)?>&CID=<?=myEncode($newCatID)?>&SID=<?=myEncode($newSkillID)?>">
                <?=$newSubCategory?>
                </a>
                &nbsp;&nbsp;/&nbsp;&nbsp;
                <?=$newFirstName.' '.$newFirstName?>
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
                        Skills
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
                        Languages
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
                            <img src="userPhotos/<?=$newProfilePic?>" alt="...">
                        </div>

                        <h5 class="card-title">
                            <?=$userFullName?>&nbsp;<small><i>(
                                    <?=$newProfession?> )</i></small></h5>
                        <p class="card-text" style="border:0px; border-bottom:dotted 1px #CCC">
                            <?=$newBusinessTitle?>
                        </p>
                        <p style="border:0px; font-size:10pt; padding:0px; margin-top:-8px">
                            <img src="images/mapLocation.png" />
                            <?=$newCity.', '.$newCountry?>
                        </p>
                    </div>

                </div>

                <div class="card" style="margin-bottom:30px">
                    <div class="card-header text-white bg-dark">
                        Profile
                    </div>
                    <div class="card-body">
                        <p class="card-text" style="border:0px">
                            <?=$newDescription?>
                        </p>
                    </div>
                </div>

                <div class="card" style="margin-bottom:30px">
                    <div class="card-header text-white bg-dark">
                        Services
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
                                <?=$serviceCurrency.' '.$servicePrice?>
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

                <!--ConctactMe Start-->

                <div class="card" style="margin-bottom:30px">
                    <div class="card-header text-white bg-dark">
                        Contact Me
                    </div>
                    <div class="card-body">
                        <form name="myForm" id="myForm" method="POST">
                            <input type="hidden" class="form-control" id="txt_user" name="txt_user" value="<?=$newID?>">
                            <div class="row" style="padding:5px">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control form-require" id="txt_name" name="txt_name" placeholder="Full Name*" required />
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control form-require" id="txt_location" name="txt_location" placeholder="Enter City Name*" required />
                                </div>

                            </div>

                            <div class="row" style="padding:5px">
                                <div class="col-lg-6">
                                    <input type="email" class="form-control form-require" id="txt_email" name="txt_email" placeholder="Email ID*" required />
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
                                <div class="col-lg-8">
                                    Do you want me to&nbsp;&nbsp;&nbsp;
                                    <label>
                                        <input type="checkbox" id="check_userpre" name="check_userpre[]" value="PhoneCall" checked="checked"> Call on Mobile&nbsp;&nbsp;&nbsp;
                                    </label>
                                    <label>
                                        <input type="checkbox" id="check_userpre" name="check_userpre[]" value="SMS/Whatsapp"> SMS/Whatsapp&nbsp;&nbsp;&nbsp;
                                    </label>
                                    <label>
                                        <input type="checkbox" id="check_userpre" name="check_userpre[]" check="check_userpre" value="Email"> Send an Email
                                    </label>
                                </div>

                                <div class="col-lg-4" style="text-align:right">
                                     <button class="btn btn-sm btn-info" id="btnSend" name="btnSend">Send Inquiry</button>
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
                if (validateEmail(myContactEmail) != '') {
                    if (myContactNumber.length < 10) {
                        $('#contStatus').text('Incorrect Mobile Number');
                        $('#txt_number').val('');
                        $('#btnSend').attr("disabled", false);
                    } else {
                        $.post("app/contactDetailEntry",
                            $("#myForm").serialize(),
                            function(data){
                                if (data == 'emailError') {
                                    $('#contStatus').text('This Email ID is already registered!');
                                    $('#txt_email').val('');
                                    $('#btnSend').attr("disabled", false);
                                }
                                if (data == 'regiSuccess') {
                                    $('#txt_name').val('');
                                    $('#txt_email').val('');
                                    $('#txt_location').val('');
                                    $('#txt_number').val('');
                                    $('#contStatus').html('<br/><br/>Your contact detail has been submitted successfully!<br/>We will be contact with you soon.');
                                }
                            });
                        return false;
                    }
                } else {
                    $('#contStatus').text('Please Enter Valid Email ID!');
                    $('#txt_email').val('');
                    $('.btnSubmit').attr("disabled", false);
                }
            });

            //Load Reviews
            $('.reviewHolder').load('reviewShow?ID=<?=$newID?>');

            //Show Write Review
            $('.btnReview').click(function(){
                $('.reviewHolder').load('reviewWriteForm?ID=<?=$newID?>');
                $('.btnReview').attr("disabled", true);
                return false;
            });





        });
        //Function Email Validation
        function validateEmail(myEmailID) {
            var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            return re.test(myEmailID);
        }
    </script>
</body>

</html>

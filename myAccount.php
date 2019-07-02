<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title><?=$newPageTitle?></title>
    <meta charset="UTF-8">
    <meta name="description" content="<?=$newPageDesc?>">
    <meta name="keywords" content="<?=$newPageKeywords?>">

    <?php include_once('scripts/headTags.php') ?>
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
    </style>
</head>
<body>

    <!--Top Menu Starts-->
    <?php
    include_once('topMenu.php');
    ?>
    <!--Top Menu Ends-->




    <div class="container" style="margin-top:50px">
        <!--Custom HTML Starts-->
        <div class="row" style="padding-top:50px; padding-bottom:50px;">
            <div class="col-lg-9 col-md-9">

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header text-white bg-dark">
                            Basic Information
                            </div>
                            <div class="card-body">
                                <div class="profile__avatar">
                                  <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="...">
                                </div>

                                <h5 class="card-title"><?=$userFullName?> <small>Administrator</small></h5>
                                <p class="card-text" style="border:0px">Profile description</p>
                                <a href="#" class="btn btn-info" style="float:right">Make Changes</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12" style="margin-top:40px">
                        <div class="card">
                            <div class="card-header bg-light">
                                <ul class="nav nav-tabs card-header-tabs pull-right"  id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="services-tab" data-toggle="tab" href="#services" role="tab" aria-controls="services" aria-selected="false">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="skills-tab" data-toggle="tab" href="#skills" role="tab" aria-controls="skills" aria-selected="false">Skills</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="languages-tab" data-toggle="tab" href="#languages" role="tab" aria-controls="languages" aria-selected="false">Languages</a>
                                    </li>
                                </ul>

                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">

                                        <table class="table profile__table">
                                          <tbody>
                                            <tr>
                                              <th><strong>Location</strong></th>
                                              <td>India</td>
                                            </tr>
                                            <tr>
                                              <th><strong>Company name</strong></th>
                                              <td>WhereSert.com</td>
                                            </tr>
                                            <tr>
                                              <th><strong>Position</strong></th>
                                              <td>Front-end developer</td>
                                            </tr>
                                          </tbody>
                                        </table>

                                        <a href="#" class="btn btn-info" style="float:right">Make Changes</a>

                                    </div>
                                    <div class="tab-pane fade" id="services" role="tabpanel" aria-labelledby="services-tab">
                                        Services
                                        <a href="#" class="btn btn-info" style="float:right">Make Changes</a>
                                    </div>
                                    <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                                        Skills
                                        <a href="#" class="btn btn-info" style="float:right">Make Changes</a>
                                    </div>
                                    <div class="tab-pane fade" id="languages" role="tabpanel" aria-labelledby="languages-tab">
                                        Languages
                                        <a href="#" class="btn btn-info" style="float:right">Make Changes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12" style="margin-top:40px">

                        <div class="card">
                            <div class="card-header text-white bg-dark">
                            Reviews
                            </div>
                            <div class="card-body">

                                <div class="profile__comments">
                                  <div class="profile-comments__item">
                                    <div class="profile-comments__controls">
                                      <a href="#"><i class="fa fa-share-square-o"></i></a>
                                      <a href="#"><i class="fa fa-edit"></i></a>
                                      <a href="#"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                    <div class="profile-comments__avatar">
                                      <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="...">
                                    </div>
                                    <div class="profile-comments__body">
                                      <h5 class="profile-comments__sender">
                                        Leena D'sa <small>2 hours ago</small>
                                      </h5>
                                      <div class="profile-comments__content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
                                      </div>
                                    </div>
                                  </div>
                                  <div class="profile-comments__item">
                                    <div class="profile-comments__controls">
                                      <a href="#"><i class="fa fa-share-square-o"></i></a>
                                      <a href="#"><i class="fa fa-edit"></i></a>
                                      <a href="#"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                    <div class="profile-comments__avatar">
                                      <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="...">
                                    </div>
                                    <div class="profile-comments__body">
                                      <h5 class="profile-comments__sender">
                                        Ashish Yadav <small>5 hours ago</small>
                                      </h5>
                                      <div class="profile-comments__content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero itaque dolor laboriosam dolores magnam mollitia, voluptatibus inventore accusamus illo.
                                      </div>
                                    </div>
                                  </div>
                                  <div class="profile-comments__item">
                                    <div class="profile-comments__controls">
                                      <a href="#"><i class="fa fa-share-square-o"></i></a>
                                      <a href="#"><i class="fa fa-edit"></i></a>
                                      <a href="#"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                    <div class="profile-comments__avatar">
                                      <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="...">
                                    </div>
                                    <div class="profile-comments__body">
                                      <h5 class="profile-comments__sender">
                                        Deepak Nishad <small>1 day ago</small>
                                      </h5>
                                      <div class="profile-comments__content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
                                      </div>
                                    </div>
                                  </div>
                                </div>

                            </div>
                        </div>

                    </div>


                </div>



            </div>
            <div class="col-lg-3 col-md-3">

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header bg-light">
                            Contact Infomation
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Registered Email ID</h6>
                                <p class="card-text"><?=$myEmail?></p>
                                <h6 class="card-title">Registered Mobile Number</h6>
                                <p class="card-text"><?=$userMobile?></p>
                                <h6 class="card-title">Registered Address</h6>
                                <p class="card-text"><?=$userAddress?></p>
                                <h6 class="card-title">Date of Birth</h6>
                                <p class="card-text"><?=$userDOB?></p>
                                <h6 class="card-title">Gender</h6>
                                <p class="card-text"><?=$userGender?></p>

                                <a href="#" class="btn btn-info" style="float:right">Make Changes</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!--Custom HTML Ends-->


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
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>

<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');

    //Get Profile Information
    $checkFUser=is_numeric($_SESSION['whrsrtfruser']);
    $userName=$_SESSION['whrsrtfruser'];

    if($checkFUser==1)
    {
        //Check Profile Picture Uploaded
        $query_1=mysqli_query($link, "SELECT * FROM freelancer_registration WHERE Mobile='$userName'");
        $view_1=mysqli_fetch_array($query_1);
        $userProfilePic=$view_1['ProfilePic'];
    }
    else
    {
        //Check Profile Picture Uploaded
        $query_1=mysqli_query($link, "SELECT * FROM freelancer_registration WHERE EmailID='$userName'");
        $view_1=mysqli_fetch_array($query_1);
        $userProfilePic=$view_1['ProfilePic'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title><?=$newPageTitle?></title>
    <meta charset="UTF-8">
    <meta name="description" content="<?=$newPageDesc?>">
    <meta name="keywords" content="<?=$newPageKeywords?>">
    <?php include_once('scripts/headTags.php') ?>

    <!-- Include SmartWizard CSS -->
    <link href="css-wizard/smart_wizard.css" rel="stylesheet" type="text/css" />
    <link href="css-wizard/smart_wizard_theme_arrows.css" rel="stylesheet" type="text/css" />
    <link href="css-wizard/smart_wizard_theme_circles.css" rel="stylesheet" type="text/css" />
    <link href="css-wizard/smart_wizard_theme_dots.css" rel="stylesheet" type="text/css" />

    <style>
        .wizardBox{
            min-height: 300px;
        }

        #upload-demo-i{
            background:#e1e1e1;
            width:250px;
            height:250px;
            padding:30px;
            padding-left: 80px;
            padding-top: 70px;
            margin-top:30px;
        }

        h3{
            color: #129077;
        }

        input[type=file]
        {
            width:90px;
            color:transparent;
            display:none;
        }

        .file-lablel
        {
            background: #77d6c3;
            width: 147px;
            border-radius: 5px;
            padding: 5px;
            margin-top: 90px;
        }

        .upload-result{
            width: 147px;
            margin-top: 10px;
        }

        .mainCat{
            margin-bottom:10px;
            border-radius: 55px;
            border: solid 5px #fff;
            cursor: pointer;
        }
    </style>

</head>
<body>

    <!--Top Menu Starts-->
    <?php
    include_once('topMenu.php');
    ?>
    <!--Top Menu Ends-->

    <div class="container breadcrum">
        <div class="row">
            <div class="col-lg-12">
                Welcome <?=$userFullName?>
            </div>
        </div>
    </div>



    <!--Wizard Starts-->
    <div class="container">

        <!-- SmartWizard html -->
        <div id="smartwizard">
            <ul>
                <li>
                    <a href="#step-1">Step 1<br/>
                        <small>Upload Profile Pic</small>
                    </a>
                </li>
                <li>
                    <a href="#step-2">Step 2<br/>
                        <small>Choose Main Category</small>
                    </a>
                </li>
                <li>
                    <a href="#step-3" data-content-url="wizardShowSubCategories.php">Step 3<br/>
                        <small>Choose Sub-Categories</small>
                    </a>
                </li>
                <li>
                    <a href="#step-4" data-content-url="wizardShowSkills.php">Step 4<br/>
                        <small>Choose Your Skills</small>
                    </a>
                </li>
            </ul>

            <div>
                <div id="step-1" class="wizardBox">
                    <h3 class="border-bottom border-gray pb-2">Upload Profile Picture</h3>
                    <div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <div id="upload-demo" style="width:250px; margin-left:25px"></div>
                                </div>
                                <div class="col-md-4" style="padding-top:30px; text-align:center">
                                    <label for="upload" class="file-lablel">Choose Picture</label>
                                    <input type="file" id="upload">
                                    <br/>
                                    <button class="btn btn-success upload-result">Upload Picture</button>
                                </div>
                                <div class="col-md-4" style="">
                                    <div id="upload-demo-i" style="margin-left:45px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="step-2" class="wizardBox">
                    <h3 class="border-bottom border-gray pb-2">Choose Main Category</h3>
                    <div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4" style="padding-top:80px; text-align:center;">
                                <div class="row">
                                    <div class="col-lg-4" style="text-align:center">
                                        <img src="images/disabled_wizardMainIcon_003.png" class="mainCat" id="1" />
                                        <br>
                                        HANDICRAFT
                                    </div>
                                    <div class="col-lg-4" style="text-align:center">
                                        <img src="images/wizardMainIcon_002.png" class="mainCat mainCatClick" id="2" />
                                        <br>
                                        PROFESSIONAL
                                    </div>
                                    <div class="col-lg-4" style="text-align:center;">
                                        <img src="images/disabled_wizardMainIcon_001.png" class="mainCat" id="3" />
                                        <br>
                                        SKILLED
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                </div>
                <div id="step-3" class="wizardBox">
                    <h3 class="border-bottom border-gray pb-2">Choose Sub-Categories</h3>
                    <div>
                        Please wait...
                    </div>
                </div>
                <div id="step-4" class="wizardBox">
                    <h3 class="border-bottom border-gray pb-2">Choose Your Skills</h3>
                    <div>
                        Please wait...
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!--Wizard Ends-->

    <!--
    SMART WIZARD
    http://techlaboratory.net/smartwizard
    -->










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

    <script src="js/jquery.smartWizard.js"></script>

    <script>
        $(document).ready(function(){


            //Check Main Category Name
            var mainCatName = localStorage.getItem("maincat");

            function disableNextButton(){
                var $actionBar = $('.actionBar');
                $('.buttonNext', $actionBar).addClass('buttonDisabled').off("click");
            }

            $('#smartwizard').smartWizard({

                <?php
                if($userProfilePic=='')
                {
                    ?>
                    selected: 0,
                    <?php
                }
                else if($userProfilePic!='')
                {
                    ?>
                    selected: 1,
                    <?php
                }
                ?>

                //selected: 1,
                theme: 'default',
                transitionEffect:'fade',
                showStepURLhash: true,
                contentCache: false,
                toolbarSettings: {  toolbarPosition: 'bottom',
                                    toolbarButtonPosition: 'end',
                                    showNextButton: true,
                                    showPreviousButton: false
                                 },
                anchorSettings: {
                    anchorClickable: false,
                    removeDoneStepOnNavigateBack: true
                }


            });

            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
                if($('button.sw-btn-next').hasClass('disabled'))
                {
                    $('.sw-btn-group-extra').show(); // show the button extra only in the last page
                }
                else
                {
                    $('.sw-btn-group-extra').hide();
                }
            });

            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition){
                //alert("You are on step "+stepNumber+" now");
                //alert("You are on step "+stepPosition+" now");

                if(stepPosition=='final')
                {
                    $('.sw-btn-next').hide();
                }
                return false;
            });

            $('.mainCatClick').click(function(){
                var mainCatName=$(this).attr('id');
                $('.mainCat').css('border','solid 5px #FFF');
                $(this).css('border','solid 5px #129077');
                localStorage.setItem("maincat", mainCatName);
                //alert(mainCatName);
                return false;
            });

            //Check MainCat and Apply CSS
            if(mainCatName=='1')
            {
                $('#1').css('border','solid 5px #129077');
            }
            else if(mainCatName=='2')
            {
                $('#2').css('border','solid 5px #129077');
            }
            else if(mainCatName=='3')
            {
                $('#3').css('border','solid 5px #129077');
            }

            ///SubCategories
            $('.subCat').click(function(){
                alert('Hello');
                return false;
            })

        //MAIN ENDS
        });
    </script>

    <!--Slide One Script Starts -->
    <script type="text/javascript">

    $uploadCrop = $('#upload-demo').croppie({
        enableExif: true,
        viewport: {
            width: 100,
            height: 100,
            type: 'circle'
        },
        boundary: {
            width: 250,
            height: 250
        }
    });


    $('#upload').on('change', function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            $uploadCrop.croppie('bind', {
                url: e.target.result
            }).then(function(){
                console.log('jQuery bind complete');
            });

        }
        reader.readAsDataURL(this.files[0]);
    });

    $('.upload-result').on('click', function (ev) {
        $uploadCrop.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function (resp) {


            $.ajax({
                url: "uploadProfilePicture.php",
                type: "POST",
                data: {"image":resp},
                success: function (data) {
                    html = '<img src="' + resp + '" />';
                    $("#upload-demo-i").html(html);
                }
            });
        });
    });

    </script>
    <!--Slide One Script Ends -->


</body>
</html>

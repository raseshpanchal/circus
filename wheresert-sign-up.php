<?php
    //error_reporting(0);
    session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');

    $query_mainCat = mysqli_query($link, "SELECT * FROM categories WHERE Publish='Yes' ORDER BY RAND() LIMIT 1");
    $view_mainCat=mysqli_fetch_array($query_mainCat);
    $newCategory=$view_mainCat['Category'];
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
        .row{
            margin-bottom: 10px;
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

        <h1>
            SIGN UP AS A FREELANCER OR RECRUITER
        </h1>

    </div>

    <div class="container">
        <div class="row" style="padding-top:50px; padding-bottom:50px;">

            <div class="col"></div>

            <div class="col-lg-6">
                <form name="myFormReg" id="myFormReg" method="POST">

                    <div class="row">
                        <div class="col-lg-12">
                            <h3 style="border-bottom:dotted 1px #333; padding-bottom:15px; margin-bottom:15px">Get Sign-up!</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-check-inline" style="margin-bottom:10px;">
                                <label class="form-check-label">
                                    I am &nbsp;&nbsp;
                                    <input type="radio" class="form-check-input" id="txt_userType" name="txt_userType" value="Freelancer" checked> Freelancer / Small Business
                                </label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" id="txt_userType" name="txt_userType" value="Recruiter"> Recruiter / Hirer
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="txt_fname" name="txt_fname" placeholder="First Name*">
                        </div>

                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="txt_lname" name="txt_lname" placeholder="Last Name*">
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-lg-12">
                            <input type="text" class="form-control" id="txt_email" name="txt_email" placeholder="Valid Email ID*">
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-lg-2" style="padding-right:0px">
                            <input type="text" class="form-control" list="codeList" id="txt_code" name="txt_code" placeholder="Code*" value="+971">
                            <datalist id="codeList">
                            <?php
                            //Fetch Country Code
                            $query_code=mysqli_query($link, "SELECT * FROM countries ORDER BY CountryName ASC");
                            while($view_code=mysqli_fetch_array($query_code))
                            {
                                $newPhoneCode=trim($view_code['PhoneCode']);
                                ?>
                                    <option value="<?='+'.$newPhoneCode?>">
                                <?php
                            }
                            ?>
                            </datalist>
                        </div>

                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="txt_mobile" name="txt_mobile" placeholder="Mobile Number*">
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="txt_dob" name="txt_dob" placeholder="Date of Birth (dd/mm/yyyy)*">
                        </div>

                        <div class="col-lg-6" style="padding-top:7px">
                            <div class="form-check-inline" style="margin-bottom:10px;">
                                <label class="form-check-label">
                                    Gender&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" class="form-check-input" id="txt_gender" name="txt_gender" value="Male" checked> Male
                                </label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" id="txt_gender" name="txt_gender" value="Female"> Female
                                </label>
                            </div>
                        </div>



                    </div>

                    <div class="row">


                    </div>

                    <div class="row">

                        <div class="col-lg-12">
                            <button class="btn btnWhereSert btnRegi" style="float:right">Get Register Now!</button>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-lg-12">
                            <span id="regiStatus"></span>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-lg-12">
                            <label class="form-label">
                            <span style="font-size:11pt">Already Member! <a href="wheresert-sign-in">Click Here!</a></span>
                            &nbsp;&nbsp;|&nbsp;&nbsp;
                            <span style="font-size:11pt">Registration Problem? <a href="registrationProblem">Click Here!</a></span>
                            </label>
                        </div>
                    </div>

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
            $('.btnRegi').click(function(){
                var userType = $("input[name='txt_userType']:checked").val();
                $('.btnRegi').attr("disabled", true);
                var myName=$('#txt_fname').val();
                var myEmail=$('#txt_email').val();
                var myMobile=$('#txt_mobile').val();

                if(userType=='Freelancer')
                {
                    if(validateEmail(myEmail)!='')
                    {
                        if(myMobile.length<10)
                        {
                            $('#regiStatus').text('Incorrect Mobile Number');
                            $('#txt_mobile').val('');
                            $('.btnRegi').attr("disabled", false);
                        }
                        else
                        {
                            $.post("app/freelancerRegiEntry",
                            $("#myFormReg").serialize(),
                            function(data){
                                if(data=='emailError')
                                {
                                    $('#regiStatus').text('This Email ID is already registered!');
                                    $('#txt_email').val('');
                                    $('.btnRegi').attr("disabled", false);
                                }
                                if(data=='regiSuccess')
                                {
                                    $('#txt_name').val('');
                                    $('#txt_email').val('');
                                    $('#txt_mobile').val('');
                                    $('#txt_dob').val('');
                                    $('#regiStatus').html('<br/><br/>Registration has been submitted successfully!<br/>Please visit your email inbox to activate your registration.');
                                }
                            });
                            return false;
                        }
                    }
                    else
                    {
                        $('#regiStatus').text('Please Enter Valid Email ID!');
                        $('#txt_email').val('');
                        $('.btnRegi').attr("disabled", false);
                    }
                }
                else if(userType=='Recruiter')
                {
                    if(validateEmail(myEmail)!='')
                    {
                        if(myMobile.length<10)
                        {
                            $('#regiStatus').text('Incorrect Mobile Number');
                            $('#txt_mobile').val('');
                            $('.btnRegi').attr("disabled", false);
                        }
                        else
                        {
                            $.post("app/recruiterRegiEntry",
                            $("#myFormReg").serialize(),
                            function(data){
                                if(data=='emailError')
                                {
                                    $('#regiStatus').text('This Email ID is already registered!');
                                    $('#txt_email').val('');
                                    $('.btnRegi').attr("disabled", false);
                                }
                                if(data=='regiSuccess')
                                {
                                    $('#txt_name').val('');
                                    $('#txt_email').val('');
                                    $('#txt_mobile').val('');
                                    $('#txt_dob').val('');
                                    $('#regiStatus').html('<br/><br/>Registration has been submitted successfully!<br/>Please visit your email inbox to activate your registration.');
                                }
                            });
                            return false;
                        }
                    }
                    else
                    {
                        $('#regiStatus').text('Please Enter Valid Email ID!');
                        $('#txt_email').val('');
                        $('.btnRegi').attr("disabled", false);
                    }
                }
                return false;
            });


        //MAIN DOC ENDS
        });

        //Function Email Validation
        function validateEmail(myEmailID)
        {
            var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            return re.test(myEmailID);
        }
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

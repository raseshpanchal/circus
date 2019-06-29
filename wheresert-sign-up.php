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

                    <h3 style="border-bottom:dotted 1px #333; padding-bottom:15px; margin-bottom:15px">Get Sign-up!</h3>

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

                    <div class="form-group">
                        <input type="text" class="form-control" id="txt_name" name="txt_name" placeholder="Full Name*">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="txt_email" name="txt_email" placeholder="Valid Email ID*">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="txt_mobile" name="txt_mobile" placeholder="Mobile Number*">
                    </div>
                    <div class="form-check-inline" style="margin-bottom:10px;">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="txt_gender" name="txt_gender" value="Male" checked> Male
                        </label>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="txt_gender" name="txt_gender" value="Female"> Female
                        </label>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="txt_dob" name="txt_dob" placeholder="Date of Birth (dd/mm/yyyy)*">
                    </div>
                    <!--
                    <div class="form-group">
                        <input type="text" class="form-control" id="txt_address" name="txt_address" placeholder="Your Address*">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="txt_city" name="txt_city" placeholder="City Name*">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="txt_state" name="txt_state" placeholder="State Name*">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="txt_country" name="txt_country" placeholder="Country Name*">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" id="txt_desc" name="txt_desc" placeholder="Description*"></textarea>
                    </div>

                    <div class="form-group form-check">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> <span style="font-size:9pt">I understand and agree to Service, including the Terms of Service and Privacy Policy.</span>
                        </label>
                    </div>
                    -->
                    <button class="btn btnWhereSert btnRegi" style="float:right">Get Register Now!</button>
                    <br/>
                    <span id="regiStatus"></span>
                </form>



                <div style="margin-top:60px;">
                    <label class="form-label">
                    <span style="font-size:11pt">Already Member! <a href="wheresert-sign-in">Click Here!</a></span>
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                    <span style="font-size:11pt">Registration Problem? <a href="registrationProblem">Click Here!</a></span>
                    </label>
                </div>

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



    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.btnRegi').click(function(){
                var userType = $("input[name='txt_userType']:checked").val();
                $('.btnRegi').attr("disabled", true);
                var myName=$('#txt_name').val();
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
        });

        //Function Email Validation
        function validateEmail(myEmailID)
        {
            var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            return re.test(myEmailID);
        }
    </script>

</body>
</html>

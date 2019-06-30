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
            SIGN IN TO EXPLORE NEW OPPORTUNITIES &amp; CHALLENGES
        </h1>

    </div>

    <div class="container">
        <div class="row" style="padding-top:50px; padding-bottom:50px;">

            <div class="col"></div>

            <div class="col-lg-6">
                <form name="myFormLogin" id="myFormLogin" method="POST">

                    <h3 style="border-bottom:dotted 1px #333; padding-bottom:15px; margin-bottom:15px">Sign-in!</h3>

                    <div class="form-check-inline" style="margin-bottom:10px;">
                        <label class="form-check-label">
                            Login as &nbsp;&nbsp;
                            <input type="radio" class="form-check-input" id="txt_userType" name="txt_userType" value="Freelancer" checked> Freelancer / Small Business
                        </label>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="txt_userType" name="txt_userType" value="Recruiter"> Recruiter / Hirer
                        </label>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="txt_user" name="txt_user" placeholder="Enter Registered Email ID">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="txt_pass" name="txt_pass" placeholder="Enter Password">
                    </div>
                    <button class="btn btnWhereSert btnLogin" style="float:right">Login</button>
                    <br/>
                    <span id="loginStatus"></span>

                    <div class="form-group">
                        <label class="form-label">
                        <span style="font-size:11pt">New User! <a href="wheresert-sign-up">Click Here!</a></span>
                            &nbsp;&nbsp;|&nbsp;&nbsp;
                        <span style="font-size:11pt">Login Problem? <a href="loginProblem">Click Here!</a></span>
                        </label>
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


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.btnLogin').click(function(){
                var userType = $("input[name='txt_userType']:checked").val();
                $('.btnLogin').attr("disabled", true);
                $('#loginStatus').html('Please wait...').fadeIn(300);
                var myEmail=$('#txt_user').val();
                var myPass=$('#txt_pass').val();

                if(userType=='Freelancer')
                {
                    if(validateEmail(myEmail)!='')
                    {
                        if(myPass=='')
                        {
                            $('#loginStatus').html('<span style="color:red">Enter Password</span>');
                            $('#txt_pass').val('');
                            $('.btnLogin').attr("disabled", false);
                        }
                        else
                        {
                            $.post("app/freelancerLoginEntry",
                            $("#myFormLogin").serialize(),
                            function(data){
                                if(data=='emailError')
                                {
                                    $('#loginStatus').html('<span style="color:red">Wrong Email ID</span>').fadeIn(300);
                                    $('#login_user').val('');
                                    $('#login_pass').val('');
                                    $('.btnLogin').attr("disabled", false);
                                }
                                else if(data=='validationError')
                                {
                                    $('#loginStatus').html('<span style="color:red">Please Validate Your Email ID Before Login</span>').fadeIn(300);
                                    $('#login_user').val('');
                                    $('#login_pass').val('');
                                    $('.btnLogin').attr("disabled", false);
                                }
                                else if(data=='passwordError')
                                {
                                    $('#loginStatus').html('<span style="color:red">Wrong Password</span>').fadeIn(300);
                                    $('#login_user').val('');
                                    $('#login_pass').val('');
                                    $('.btnLogin').attr("disabled", false);
                                }
                                else if(data=='validUser')
                                {
                                    $('#loginStatus').html('<span style="color:green">Account Athenticated. Please wait...</span>').fadeIn(300);
                                    $('#login_user').val('');
                                    $('#login_pass').val('');
                                    window.location.href='myAccount';
                                }
                            });
                            return false;
                        }
                    }
                    else
                    {
                        $('#regiStatus').text('Please Enter Valid User Name');
                        $('#txt_user').val('');
                        $('.btnLogin').attr("disabled", false);
                    }
                }
                else if(userType=='Recruiter')
                {
                    if(validateEmail(myEmail)!='')
                    {
                        if(myPass=='')
                        {
                            $('#loginStatus').html('<span style="color:red">Enter Password</span>');
                            $('#txt_pass').val('');
                            $('.btnLogin').attr("disabled", false);
                        }
                        else
                        {
                            $.post("app/recruiterLoginEntry",
                            $("#myFormLogin").serialize(),
                            function(data){
                                if(data=='emailError')
                                {
                                    $('#loginStatus').html('<span style="color:red">Wrong Email ID</span>').fadeIn(300);
                                    $('#login_user').val('');
                                    $('#login_pass').val('');
                                    $('.btnLogin').attr("disabled", false);
                                }
                                else if(data=='validationError')
                                {
                                    $('#loginStatus').html('<span style="color:red">Please Validate Your Email ID Before Login</span>').fadeIn(300);
                                    $('#login_user').val('');
                                    $('#login_pass').val('');
                                    $('.btnLogin').attr("disabled", false);
                                }
                                else if(data=='passwordError')
                                {
                                    $('#loginStatus').html('<span style="color:red">Wrong Password</span>').fadeIn(300);
                                    $('#login_user').val('');
                                    $('#login_pass').val('');
                                    $('.btnLogin').attr("disabled", false);
                                }
                                else if(data=='validUser')
                                {
                                    $('#loginStatus').html('<span style="color:green">Account Athenticated. Please wait...</span>').fadeIn(300);
                                    $('#login_user').val('');
                                    $('#login_pass').val('');
                                    window.location.href='./';
                                }
                            });
                            return false;
                        }
                    }
                    else
                    {
                        $('#regiStatus').text('Please Enter Valid User Name');
                        $('#txt_user').val('');
                        $('.btnLogin').attr("disabled", false);
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

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
                <form action="post">

                    <h3 style="border-bottom:dotted 1px #333; padding-bottom:15px; margin-bottom:15px">Sign-in!</h3>

                    <div class="form-group">
                        <input type="text" class="form-control" id="txt_user" name="txt_user" placeholder="Enter Registered Email ID">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="txt_pass" name="txt_pass" placeholder="Enter Password">
                    </div>
                    <button class="btn btnWhereSert" style="float:right">Login</button>

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

        });
    </script>

</body>
</html>

<?php
session_start();
include("config/connection.php");
$query_mainCat = mysqli_query($link, "SELECT * FROM categories WHERE Publish='Yes' ORDER BY RAND() LIMIT 1");
$view_mainCat=mysqli_fetch_array($query_mainCat);
$newCategory=$view_mainCat['Category'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>WHERESERT</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/website.css">
</head>
<body>

    <!--Top Menu Starts-->
    <?php
    include_once('topMenu.php');
    ?>
    <!--Top Menu Ends-->


    <div class="container-fluid homeSlide">
        <h1 style="margin-left:-50px">FIND A BEST <?=strtoupper($newCategory)?> IN YOUR CITY</h1>

        <form>
        <div class="row">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-3" style="padding:0px">
                        <select class="form-control">
                            <option value="Dubai">Search in Dubai</option>
                            <option value="Abu Dhabi">Search in Abu Dhabi</option>
                            <option value="Sharjah">Search in Sharjah</option>
                        </select>

                    </div>
                    <div class="col-lg-6" style="padding-right:0px">
                        <input type="text" name="txt_search" id="txt_search" class="form-control" placeholder="Search for a Talent / Services / Professional">
                    </div>
                    <div class="col-lg-3" style="margin-left:-20px">
                        <button type="button" class="btn btn-info" id="btnFind">FIND IT NOW</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">

            </div>

        </div>
        </form>

    </div>

    <div class="container">
        <div class="row" style="padding-top:50px; padding-bottom:50px;">
            <?php
            $query_mainCat = mysqli_query($link, "SELECT * FROM categories WHERE Publish='Yes' ORDER BY Category ASC");
            while($view_mainCat=mysqli_fetch_array($query_mainCat))
            {
                $newCategory=$view_mainCat['Category'];
                ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mainCategory"><?=$newCategory?></div>
                <?php
            }
            ?>
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
            $('#btnFind').click(function(){
                var lookingFor = $('#txt_search').val();
                //$('#showPost').text(lookingFor);
            });
        });
    </script>

</body>
</html>

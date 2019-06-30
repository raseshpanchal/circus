<?php
    error_reporting(0);
    //session_start();
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


    <div class="container-fluid homeSlide d-none d-sm-block">
        <form>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1>FIND A BEST <?=strtoupper($newCategory)?> IN YOUR CITY</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="padding:0px">
                        <select class="form-control">
                            <option value="Dubai">Search in Dubai</option>
                            <option value="Abu Dhabi">Search in Abu Dhabi</option>
                            <option value="Sharjah">Search in Sharjah</option>
                        </select>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="padding-left:8px; padding-right:8px;">
                        <input type="text" name="txt_search" id="txt_search" class="form-control" placeholder="Search for a Talent / Services / Professional">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="padding:0px; text-align:left">
                        <button type="button" class="btn btn-info" id="btnFind">FIND IT NOW</button>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </form>
    </div>

    <div class="container-fluid homeSlideMobile d-block d-sm-none">
        <form>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <h1>FIND A BEST TALENT IN YOUR CITY</h1>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                        <select class="form-control">
                            <option value="Dubai">Search in Dubai</option>
                            <option value="Abu Dhabi">Search in Abu Dhabi</option>
                            <option value="Sharjah">Search in Sharjah</option>
                        </select>
                    </div>
                    <div class="col-sm-12 col-xs-12" style="margin-top:10px; margin-bottom:10px;">
                        <input type="text" name="txt_search" id="txt_search" class="form-control" placeholder="Search for a Talent / Services / Professional">
                    </div>
                    <div class="col-sm-12 col-xs-12">
                        <button type="button" class="btn btn-info" id="btnFind" style="width:100%">FIND IT NOW</button>
                    </div>
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

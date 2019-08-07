<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');

    $query_mainCat = mysqli_query($link, "SELECT * FROM main_categories WHERE Publish='Yes' ORDER BY ID");
    $view_mainCat=mysqli_fetch_array($query_mainCat);
    $newCategory=$view_mainCat['MainCat'];

    //Fetch SearchCity
    $query_serCity = mysqli_query($link, "SELECT * FROM search_city WHERE Publish='Yes' ORDER BY ASC");
    $view_serCity = mysqli_fetch_array($query_serCity);
    $newCityName = $view_serCity['CityName'];
    $newDefaultCity = $view_serCity['DefaultCity']; 


?>
<!DOCTYPE html>
<html lang="en-US">
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
                        <h1>BEST <?=strtoupper($newCategory)?> IN CITY</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="padding:0px">
                        <select class="form-control" name="select_search" id="select_search">
<!--                            <option value="Dubai">Dubai</option>-->
                            <?php
                            $query_serCity = mysqli_query($link, "SELECT * FROM search_city WHERE Publish='Yes' ORDER BY CityName ASC");
                            while($view_serCity=mysqli_fetch_array($query_serCity))
                            {
                                $newCityID=$view_serCity['ID'];
                                $newCityName=$view_serCity['CityName'];
                                $newDefaultCity=$view_serCity['DefaultCity'];
                                ?>
                            <option value="<?=$newCityName?>"
                                    <?php
                                        if($newDefaultCity=='Yes')
                                        {
                                            echo 'selected';
                                        }
                                    ?>><?=$newCityName?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="padding-left:8px; padding-right:8px;">
                        <input type="text" name="txt_search" id="txt_search" class="form-control" placeholder="Search for a Talent / Services / Professional">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="padding:0px; text-align:left">
                        <button type="button" class="btn btn-info" id="btnFind">CLICK</button>
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
<!--                            <option value="Dubai">Search in Dubai</option>-->
                        <?php
                            $query_serCity = mysqli_query($link, "SELECT * FROM search_city WHERE Publish='Yes' ORDER BY CityName ASC");
                            while($view_serCity=mysqli_fetch_array($query_serCity))
                            {
                                $newCityID=$view_serCity['ID'];
                                $newCityName=$view_serCity['CityName'];
                                $newDefaultCity=$view_serCity['DefaultCity'];
                                ?>
                            <option value="<?=$newCityName?>"
                                    <?php
                                        if($newDefaultCity=='Yes')
                                        {
                                            echo 'selected';
                                        }
                                    ?>>Search in <?=$newCityName?></option>
                            <?php
                            }
                            ?>
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
            $query_mainCat = mysqli_query($link, "SELECT * FROM main_categories WHERE Publish='Yes' ORDER BY ID ASC");
            while($view_mainCat=mysqli_fetch_array($query_mainCat))
            {
                $newMainCatID=$view_mainCat['ID'];
                $newMainCategory=$view_mainCat['MainCat'];
                ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mainCategory" mainCatID="<?=myEncode($newMainCatID)?>"><?=$newMainCategory?></div>
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

    <?php include_once('scripts/bottomScripts.php') ?>

    <script>
        $(document).ready(function(){
            $('#btnFind').click(function(){
                var cityName = $("#select_search option:selected").text();
                var lookingFor = $('#txt_search').val();
                window.location.href="searchList?CN="+cityName+"&LF="+lookingFor;
            });

            //Category Function
            $('.mainCategory').click(function(){
                var mainCatName=$(this).attr('mainCatID');
                window.location.href="maincategory?ID="+mainCatName;
            });

        });
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

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

    <style>
        #bg-video
        {
            position: absolute;
            overflow: hidden;
            width: 100%;
            height: 50%;
            top: 0;
            left: 0;
            border: solid 3px red;
        }

        #overlay
        {
            background: rgba(100,100,100,.5);
            position: absolute;
            overflow: hidden;
            left: 0;
            top: 0;
            width: 100%;
            height: 53%;
/*            z-index: 100;*/
            text-align: center;
        }
    </style>

</head>
<body>

    <!--Top Menu Starts-->
    <?php
    include_once('topMenu.php');
    ?>
    <!--Top Menu Ends-->
    <!--
    <div id="overlay">
        <div class="img-wrap html-video-background">
            <video src="vids/001.mp4" autoplay loop muted>
            </video>
        </div>

        <div style="border:solid 3px blue; z-index:101">
            This is my message
        </div>
    </div>
    -->


    <div class="container-fluid homeSlide d-none d-sm-block">

        <div id="overlay">
            <div class="img-wrap html-video-background">
                <video src="vids/001.mp4" autoplay loop muted>
                </video>
            </div>
        </div>

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
                        <button type="button" class="btn btn-info" id="btnFind">SEARCH</button>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </form>
    </div>

    <div class="container-fluid homeSlideMobile d-block d-sm-none">

        <div id="overlay" style="height:60%">
            <div class="img-wrap html-video-background" style="border:solid 3px blue; width:200%">
                <video src="vids/001.mp4" autoplay loop muted>
                </video>
            </div>
        </div>

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
            $query_mainCat = mysqli_query($link, "SELECT * FROM main_categories ORDER BY ID ASC");
            while($view_mainCat=mysqli_fetch_array($query_mainCat))
            {
                $newMainCatID=$view_mainCat['ID'];
                $newMainCategory=$view_mainCat['MainCat'];
                $newImgName=$view_mainCat['ImgName'];
                $disabledImage='disabled_'.$newImgName;
                $newPublish=$view_mainCat['Publish'];

                if($newPublish=='No')
                {
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 disabledCategory" style="background-image: url(images/<?=$disabledImage?>);">
                        <div class="mainSubTitle">
                            <?='<h2>'.$newMainCategory.'</h2>'?>
                        </div>
                    </div>
                    <?php
                }
                else if($newPublish=='Yes')
                {
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mainCategory" style="background-image: url(images/<?=$newImgName?>); background-position: center top;" mainCatID="<?=myEncode($newMainCatID)?>">
                        <div class="mainSubTitle">
                            <?='<h2>'.$newMainCategory.'</h2>'?>
                        </div>
                    </div>
                    <?php
                }
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

            //init videoBackground for html video
            $('.html-video-background').videoBackground();

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

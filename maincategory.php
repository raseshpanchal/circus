<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');

    $newMainCatID=myDecode($_GET['ID']);
    $query_mainCat=mysqli_query($link, "SELECT * FROM main_categories WHERE ID='$newMainCatID'");
    $view_mainCat=mysqli_fetch_array($query_mainCat);
    $newMainCategory=$view_mainCat['MainCat'];
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
        <h1 style="margin-left:-50px"><?=$newMainCategory?></h1>
    </div>

    <div class="container">
        <div class="row" style="padding-top:50px; padding-bottom:50px;">
            <?php
            $query_cat = mysqli_query($link, "SELECT * FROM categories WHERE Publish='Yes' AND MainCatID='$newMainCatID' ORDER BY Category ASC");
            while($view_cat=mysqli_fetch_array($query_cat))
            {
                $newCatID=$view_cat['ID'];
                $newCategory=$view_cat['Category'];
                ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mainCategory" catID="<?=myEncode($newCatID)?>">
                    <div class="row">
                        <div class="col-lg-12">
                            <?=$newCategory?>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
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

            $('.mainCategory').click(function(){
                var catName=$(this).attr('catID');
                window.location.href="category?ID="+catName;
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

<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');

    $newCatID=myDecode($_GET['ID']);
    $query_mainCat=mysqli_query($link, "SELECT * FROM categories WHERE ID='$newCatID'");
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
        <h1 style="margin-left:-50px"><?=$newCategory?></h1>
    </div>

    <div class="container">
        <div class="row" style="padding-top:50px; padding-bottom:50px;">
            <?php
            $query_subCat = mysqli_query($link, "SELECT * FROM subcategories WHERE Publish='Yes' AND CatID='$newCatID' ORDER BY SubCategory ASC");
            while($view_subCat=mysqli_fetch_array($query_subCat))
            {
                $newSubCatID=$view_subCat['ID'];
                $newSubCategory=$view_subCat['SubCategory'];
                //Find Total Registration Skills-wise
                $query_skills=mysqli_query($link, "SELECT * FROM freelancer_skills WHERE SkillID='$newSubCatID'");
                $view_skills=mysqli_num_rows($query_skills);
                ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mainCategory" skillID="<?=myEncode($newSubCatID)?>">
                    <div class="row">
                        <div class="col-lg-12">
                            <?=$newSubCategory?>
                        </div>
                        <div class="col-lg-12" style="height:50px; text-align:right; padding-top:22px">
                            <span style="font-size:9pt"><?=$view_skills?></span>
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
                var myID=$(this).attr('SkillID');
                window.location.href="profileList?ID="+myID;
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

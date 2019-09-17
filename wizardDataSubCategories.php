<style>
    .subCat:hover{
        cursor: pointer;
/*        background-color: #ebebeb;*/
    }

    .iconClose{
        background-image:url(images/iconBgClose.png);
        background-repeat: no-repeat;
        background-position: right top;
        background-color:#77d6c3;
    }
</style>

<div class="container">
    <div class="row">
    <?php
        error_reporting(0);
        //session_start();
        include_once("config/connection.php");
        include_once('userInfo.php');
        include_once('pageInfo.php');

        $newMainCatID=$_POST["mainCat"];

        $query_cat=mysqli_query($link, "SELECT * FROM categories WHERE Publish='Yes' AND MainCatID='$newMainCatID'");
        while($view_cat=mysqli_fetch_array($query_cat))
        {
            $newCatID=$view_cat['ID'];
            $newCatName=$view_cat['Category'];
            $newCatIcon=$view_cat['Icons'];
            ?>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12" mainID="<?=myEncode($newMainCatID)?>">
                <div class="row">
                    <div class="col-lg-12 subCat" style="border-bottom:dotted 1px #333; padding-top:5px; padding-bottom:5px; text-align:center;" catID="<?=myEncode($newCatID)?>">
                        <img src="icons/<?=$newCatIcon?>" class="catIcon" style="width:20%; margin-bottom:5px" />
                        <br/>
                        <?=$newCatName?>
                    </div>
                </div>
            </div>
            <?php
        }

    ?>
    </div>
</div>


<script>
    $(document).ready(function(){
        $('.subCat').click(function(){
            var subCatName=$(this).attr('catID');
            $('.subCat').css('background-color','#fff');
            $('.subCat').removeClass('iconClose');
            //$(this).toggleClass('iconClose');
            $(this).addClass('iconClose');
            //$(this).css('background-color','#77d6c3');
            localStorage.setItem("subcat", subCatName);
            return false;
        });



    });
</script>

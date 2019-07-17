<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
?>

<form name="mySkillForm" id="mySkillForm" method="POST">

    <!--Skills List Starts-->
    <div class="container" style="margin-bottom:20px;">
        <?php
        $query_mainCat=mysqli_query($link, "SELECT * FROM categories WHERE Publish='Yes' ORDER BY Category ASC");
        while($view_mainCat=mysqli_fetch_array($query_mainCat))
        {
            $newCatID=$view_mainCat['ID'];
            $newCategory=$view_mainCat['Category'];
            ?>
            <h6 style="border-bottom:dotted 1px #CCC; padding-bottom:10px; margin-top:10px; margin-bottom:10px;" class="text-info"><?=$newCategory?></h6>
            <div class="row">
            <?php
            $query_skills=mysqli_query($link, "SELECT * FROM subcategories WHERE Publish='Yes' AND CatID='$newCatID' ORDER BY SubCategory ASC");
            while($view_skills=mysqli_fetch_array($query_skills))
            {
                $newSubCatID=$view_skills['ID'];
                $newSubCategory=$view_skills['SubCategory'];
                //Fetch User's Skills
                $query_userSkill=mysqli_query($link, "SELECT * FROM freelancer_skills WHERE FreelancerID='$userID' AND SkillID='$newSubCatID'");
                $view_userSkill=mysqli_fetch_array($query_userSkill);
                $mySkillID=$view_userSkill['SkillID'];
            ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="font-size:10pt; padding-right:0px; margin-bottom:5px">
                    <input type="checkbox" id="checkboxvar[]"
                    <?php
                    if($newSubCatID==$mySkillID)
                    {
                        echo 'checked="checked"';
                    }
                    ?>
                           name="checkboxvar[]" value="<?=$newSubCatID?>" />
                    <?=$newSubCategory?>
                </div>
            <?php
            }
            ?>
            </div>
        <?php
        }
        ?>
    </div>
    <!--Skills List Ends-->

    <div class="row">
        <div class="col-lg-12">
            <a href="#" class="btn btn-default btnSave" style="float:right">
                <img src="images/save.png" style="margin-top:-5px" />
            </a>
            <a href="#" class="btn btn-default btnCancel" style="float:right; margin-right:10px">
                <img src="images/arrowBack.png" style="margin-top:-5px" />
            </a>
        </div>
    </div>

</form>


<?php include_once('scripts/bottomScripts.php') ?>

<script>
    $(document).ready(function(){

        //Check Class
        $('.btnSave').click(function(){

            $('#btnSave').attr("disabled", true);

            $.post("app/skillsEditFormEntry",
            $("#mySkillForm").serialize(),
            function(data){
                if(data=='skills_1')
                {
                    $('#skills').load('skillsShow');
                }
                if(data=='skills_0')
                {
                    alert('Error occured!');
                    $('#skills').load('skillsShow');
                }
            });

            return false;
        });



        //Cancel Button
        $('.btnCancel').click(function(){
            $('#skills').load('skillsShow');
            return false;
        });

    });
</script>

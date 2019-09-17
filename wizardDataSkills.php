<style>
    .subCat:hover{
        cursor: pointer;
        background-color: #ebebeb;
    }
</style>
<form name="mySkillForm" id="mySkillForm" method="POST">
<div class="container">
    <div class="row">
        <input type="hidden" name="txt_mainCat" id="txt_mainCat" />
        <input type="hidden" name="txt_subCat" id="txt_subCat" />
    <?php
        error_reporting(0);
        //session_start();
        include_once("config/connection.php");
        include_once('userInfo.php');
        include_once('pageInfo.php');

        $newMainCatID=$_POST["mainCat"];
        $newSubCatID=myDecode($_POST["subCat"]);

        $query_cat=mysqli_query($link, "SELECT * FROM subcategories WHERE Publish='Yes' AND CatID='$newSubCatID'");
        while($view_cat=mysqli_fetch_array($query_cat))
        {
            $newSubCatID=$view_cat['ID'];
            $newSubCatName=$view_cat['SubCategory'];
            //Fetch User's Skills
            $query_userSkill=mysqli_query($link, "SELECT * FROM freelancer_skills WHERE FreelancerID='$userID' AND SkillID='$newSubCatID'");
            $view_userSkill=mysqli_fetch_array($query_userSkill);
            $mySkillID=$view_userSkill['SkillID'];

            ?>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="height:50px; margin-bottom:0px">
                <div class="row">
                    <div class="col-lg-12 subCat" style="border-bottom:dotted 1px #333; height:50px; padding-top:5px; padding-bottom:5px; text-align:left" catID="<?=myEncode($newSubCatID)?>">
                        <input type="checkbox" id="checkboxvar[]"
                        <?php
                        if($newSubCatID==$mySkillID)
                        {
                            echo 'checked="checked"';
                        }
                        ?>
                               name="checkboxvar[]" value="<?=$newSubCatID?>" />
                        <?=$newSubCatName?>
                    </div>
                </div>
            </div>
            <?php
        }

    ?>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="#" class="btn btn-default btnSave" style="float:right">
                <img src="images/btnFinish.png" style="margin-top:-5px" />
            </a>
        </div>
    </div>
</div>
</form>

<script>
    $(document).ready(function(){

        var mainCatID=localStorage.getItem("maincat");
        var subCatID=localStorage.getItem("subcat");

        $('#txt_mainCat').val(mainCatID);
        $('#txt_subCat').val(subCatID);

        //Check Class
        $('.btnSave').click(function(){

            $('#btnSave').attr("disabled", true);

            $.post("app/wizardSkillsFormEntry",
            $("#mySkillForm").serialize(),
            function(data){
                localStorage.removeItem('maincat');
                localStorage.removeItem('subcat');
                window.location.href='myAccount';
            });

            return false;
        });

    });
</script>

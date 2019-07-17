<?php
    error_reporting(0);
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
?>

<!--Skills List Starts-->
<div class="container" style="margin-bottom:20px;">
    <div class="row">
        <?php
        //Fetch User's Skills
        $query_userSkill=mysqli_query($link, "SELECT * FROM freelancer_skills WHERE FreelancerID='$userID'");
        while($view_userSkill=mysqli_fetch_array($query_userSkill))
        {
            $mySkillID=$view_userSkill['SkillID'];
            //Fetch Skill Name
            $query_skills=mysqli_query($link, "SELECT * FROM subcategories WHERE ID='$mySkillID'");
            $view_skills=mysqli_fetch_array($query_skills);
            $newSubCategory=$view_skills['SubCategory'];
        ?>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="font-size:10pt; padding-right:0px; margin-bottom:5px">
                <?='&#10004;'.$newSubCategory?>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<!--Skills List Ends-->

<a href="#" class="btn btn-default btnEdit" style="float:right">
    <img src="images/edit.gif" style="margin-top:-5px" />
</a>


<?php include_once('scripts/bottomScripts.php') ?>

<script>
    $(document).ready(function(){

        //Edit Class
        $('.btnEdit').click(function(){
            $('#skills').load('skillsEditForm');
            return false;
        });

    });
</script>

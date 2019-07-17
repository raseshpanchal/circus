<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
?>

<?php
    $query_pdf=mysqli_query($link, "SELECT * FROM freelancer_upload_pdf WHERE FreelancerID='$userID'");
    while($view_pdf=mysqli_fetch_array($query_pdf))
    {
        $pdfID=$view_pdf['ID'];
        $pdfTitle=$view_pdf['Title'];
        $pdfFileName=urldecode($view_pdf['FileName']);
        ?>
        <div class="row">
            <div class="col-lg-10">
                <?=$pdfTitle?>
            </div>
            <div class="col-lg-2" style="text-align:right">
                <a href="#" class="btn btn-default btnEdit" myID="<?=$pdfID?>">
                    <img src="images/edit.gif" style="margin-top:-5px" />
                </a>
                <a href="#" class="btn btn-default btnDelete" myID="<?=$pdfID?>">
                    <img src="images/delete.gif" style="margin-top:-5px" />
                </a>
            </div>
        </div>
        <div class="row" style="margin-bottom:30px; padding-bottom:10px; border-bottom:solid 1px #CCC">
            <div class="col-lg-12">
                <a href="<?='userPDFs/'.$pdfFileName?>" target="_blank">
                    <?=$pdfFileName?>
                </a>
            </div>
        </div>
        <?php
    }
?>

<div class="row">
    <div class="col-lg-12">
        <a href="#" class="btn btn-default btnAdd" style="float:right">
            <img src="images/add-green.png" style="margin-top:-5px" />
        </a>
    </div>
</div>


<?php include_once('scripts/bottomScripts.php') ?>

<script>
    $(document).ready(function(){

        //Add Class
        $('.btnAdd').click(function(){
            $('#pdfs').load('pdfAddForm');
            return false;
        });

        //Edit Class
        $('.btnEdit').click(function(){
            var myID = $(this).attr('myID');
            $('#pdfs').load('pdfEditForm?ID='+myID);
            return false;
        });

        //Delete Class
        $('.btnDelete').click(function(){
            var myID = $(this).attr('myID');
            $('#pdfs').load('pdfDeleteForm?ID='+myID);
            return false;
        });

    });
</script>

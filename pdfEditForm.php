<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
    //Get Records
    $newLinkID=$_GET['ID'];

    $query_pdf=mysqli_query($link, "SELECT * FROM freelancer_upload_pdf WHERE ID='$newLinkID'");
    $view_pdf=mysqli_fetch_array($query_pdf);
    $pdfID=$view_pdf['ID'];
    $pdfTitle=$view_pdf['Title'];
    $pdfName=$view_pdf['FileName'];
?>
<form name="myPdfForm" id="myPdfForm" method="POST">
    <div class="row" style="margin-bottom:15px">
        <div class="col-lg-12">
            <input type="hidden" class="form-control" value="<?=$pdfID?>" id="txt_ID" name="txt_ID" >
            <input type="text" class="form-control" value="<?=$pdfTitle?>" id="txt_pdfTitle" name="txt_pdfTitle" placeholder="Enter Title*">
        </div>
    </div>
    <div class="row" style="margin-bottom:15px">
        <div class="col-lg-12">
            <!--Card Starts-->
            <div class="card" style="width:150px; height:150px; background-image:url(<?='userPDFs/'.$pdfName?>); background-size:cover; background-position:center center"></div>
            <!--Card Ends-->
        </div>
    </div>

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
            var myTitle=$('#txt_pdfTitle').val();

            if(myTitle!='')
            {
                $.post("app/pdfEditFormEntry",
                $("#myPdfForm").serialize(),
                function(data){
                    if(data=='pdf_1')
                    {
                        $('#pdfs').load('pdfShow');
                    }
                    if(data=='pdf_0')
                    {
                        alert('Error occured!');
                        $('#pdfs').load('pdfShow');
                    }
                });
            }
            return false;
        });

        //Cancel Button
        $('.btnCancel').click(function(){
            $('#pdfs').load('pdfShow');
            return false;
        });

    });
</script>

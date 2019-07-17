<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
    //Get Records
    $newLinkID=$_GET['ID'];

    $query_link=mysqli_query($link, "SELECT * FROM freelancer_upload_weblink WHERE ID='$newLinkID'");
    $view_link=mysqli_fetch_array($query_link);
    $linkID=$view_link['ID'];
    $linkTitle=$view_link['Title'];
    $linkURL=urldecode($view_link['URL']);
?>
<form name="myLinkForm" id="myLinkForm" method="POST">
    <div class="row" style="margin-bottom:15px">
        <div class="col-lg-12">
            <input type="hidden" class="form-control" value="<?=$linkID?>" id="txt_ID" name="txt_ID" readonly >
            <input type="text" class="form-control" value="<?=$linkTitle?>" id="txt_linkTitle" name="txt_linkTitle" readonly>
        </div>
    </div>
    <div class="row" style="margin-bottom:15px">
        <div class="col-lg-12">
            <input type="text" class="form-control" value="<?=$linkURL?>" id="txt_linkURL" name="txt_linkURL" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <a href="#" class="btn btn-default btnSave" style="float:right">
                <img src="images/trash.png" style="margin-top:-5px" />
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
            var myTitle=$('#txt_linkTitle').val();
            var myURL=$('#txt_linkURL').val();

            if(myTitle!='' && myURL!='')
            {
                $.post("app/linkDeleteFormEntry",
                $("#myLinkForm").serialize(),
                function(data){
                    if(data=='link_1')
                    {
                        $('#links').load('linksShow');
                    }
                    if(data=='link_0')
                    {
                        alert('Error occured!');
                        $('#links').load('linksShow');
                    }
                });
            }
            return false;
        });

        //Cancel Button
        $('.btnCancel').click(function(){
            $('#links').load('linksShow');
            return false;
        });

    });
</script>

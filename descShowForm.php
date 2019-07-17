<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
?>
<div class="card">
    <form name="myForm" id="myForm" method="POST">
        <div class="card-header bg-info">
        <span style="color:white">Edit Description</span>
        </div>
        <div class="card-body">
            <textarea class="form-control" rows="8" id="txt_desc" name="txt_desc" style="margin-bottom:10px"><?=$userDescription?></textarea>

            <a href="#" class="btn btn-default btnDesc" style="float:right">
                <img src="images/save.png" style="margin-top:-5px" />
            </a>
            <a href="#" class="btn btn-default btnCancel" style="float:right; margin-right:10px">
                <img src="images/arrowBack.png" style="margin-top:-5px" />
            </a>

        </div>
    </form>
</div>

<?php include_once('scripts/bottomScripts.php') ?>

<script>
    $(document).ready(function(){

        //Check Class
        $('.btnDesc').click(function(){
            var myDesc=$('#txt_desc').val();

            if(myDesc!='')
            {
                $.post("app/descFormEntry",
                $("#myForm").serialize(),
                function(data){
                    if(data=='1')
                    {
                        $('#description').load('descShow');
                    }
                    if(data=='0')
                    {
                        alert('Error occured!');
                        $('#description').load('descShow');
                    }
                });
            }
            return false;
        });

        //Cancel Button
        $('.btnCancel').click(function(){
            $('#description').load('descShow');
            return false;
        });

    });
</script>

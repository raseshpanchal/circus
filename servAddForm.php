<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
?>
<form name="myForm" id="myForm" method="POST">
    <div class="row">
        <div class="col-lg-8">
            <input type="text" class="form-control" id="txt_title" name="txt_title" placeholder="Enter Title*">
        </div>
        <div class="col-lg-2">
            <input type="text" class="form-control" value="AED" id="txt_currency" name="txt_currency" placeholder="Enter Currency*">
        </div>
        <div class="col-lg-2">
            <input type="text" class="form-control" id="txt_price" name="txt_price" placeholder="Enter Price*">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <textarea class="form-control" rows="8" id="txt_desc" name="txt_desc" placeholder="Enter Description*" style="margin-top:10px; margin-bottom:10px"></textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <a href="#" class="btn btn-default btnSave" style="float:right">Save</a>
            <a href="#" class="btn btn-default btnCancel" style="float:right">Cancel</a>
        </div>
    </div>
</form>
<?php include_once('scripts/bottomScripts.php') ?>

<script>
    $(document).ready(function(){

        //Check Class
        $('.btnSave').click(function(){
            var myTitle=$('#txt_title').val();
            var myCurrency=$('#txt_currency').val();
            var myPrice=$('#txt_price').val();
            var myDesc=$('#txt_desc').val();

            if(myTitle!='' && myCurrency!='' && myPrice!='' && myDesc!='')
            {
                $.post("app/servAddFormEntry",
                $("#myForm").serialize(),
                function(data){
                    if(data=='1')
                    {
                        $('#services').load('servShow');
                    }
                    if(data=='0')
                    {
                        alert('Error occured!');
                        $('#services').load('servShow');
                    }
                });
            }
            return false;
        });

        //Cancel Button
        $('.btnCancel').click(function(){
            $('#services').load('servShow');
        });

    });
</script>

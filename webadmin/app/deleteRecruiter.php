<?php
include_once("../../config/connection.php");
$newID=$_GET['ID'];

//Fetch Records
$query_1=mysqli_query($link, "SELECT * FROM recruiter_registration WHERE ID='$newID'");
$view_1=mysqli_fetch_array($query_1);
$newFullName=$view_1['FullName'];
$newEmailID=$view_1['EmailID'];
$newMobile=$view_1['Mobile'];
$newDOB=$view_1['DOB'];
$newDescription=$view_1['Description'];
$newStatus=$view_1['Status'];
?>
<style>
.success_alert{
    background-color:#6C3;
    color:#FFF;
    border:dashed 1px #666;
    width:100%;
    height:30px;
    padding-top:4px;
    text-align:center;
    display:none;
}
</style>
<script src="app/js/validRecruiter.js"></script>
<script src="app/js/onlyAlpha.js"></script>
<script src="app/js/onlyNum.js"></script>
<script>  
$(document).ready(function(){
    $("#btnSave").click(function(){
        $('#btnSave').attr("disabled", true);
        $.post("app/deleteRecruiterEntry?ID=<?= $newID ?>",
        $("#myForm").serialize(),
        function(data){
            //Remove Deleted Table Row
            $('.success_alert').fadeIn(300);
            $(".success_alert").delay(1500).fadeOut(300);
            $('#middleArea .table tbody #td<?php echo $newID ?>').hide('slow');
			closeFormDelete();
            $('#btnSave').attr("disabled", false);
         });
        return false;
    });
    //Function for Cancel
    $("#btnCancel").click(function(){
        closeForm();
    });
});
</script>
<div class="formShadow"></div>
<div style="background-color:#424a5d; height:37px; border-top:solid 1px #FFF; border-bottom:solid 1px #044636; color:#FFF; padding-left:15px; padding-top:7px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>Delete Recruiter</td>
  </tr>
</table>
</div>
<form name="myForm" id="myForm" method="POST">
<div class="row" style="padding:15px; padding-top:25px;">
    <div class="col-xs-12">
        <input type="text" class="form-control form-require" id="txt_name" name="txt_name" placeholder="Full Name*" value="<?php echo $newFullName ?>" readonly="readonly" />
    </div>
</div>
<div class="row" style="padding:15px">
    <div class="col-xs-12">
        <input type="email" class="form-control form-require" id="txt_email" name="txt_email" placeholder="Email ID*" value="<?php echo $newEmailID ?>" readonly="readonly" />
    </div>
</div>
<div class="row" style="padding:15px">
    <div class="col-xs-12">
        <input type="text" class="form-control form-require" id="txt_mobile" name="txt_mobile" placeholder="Mobile Number*" required maxlength="10" onKeyPress="return numbersonly(event, false)" value="<?php echo $newMobile ?>" readonly="readonly" />
    </div>
</div>
<div class="row" style="padding:15px">
    <div class="col-xs-12">
        <input type="date" class="form-control form-require" id="txt_dob" name="txt_dob" placeholder="Date of Birth*" value="<?php echo $newDOB ?>" readonly="readonly" />
    </div>
</div>  
<div class="row" style="padding:15px">
    <div class="col-xs-12">
        <textarea class="form-control form-require" id="txt_dec" name="txt_dec" placeholder="Description*" readonly="readonly" ><?php echo $newDescription ?></textarea>
    </div>
</div>
<div class="row" style="padding:15px">
    <div class="col-xs-8">
        <label>
            <input type="radio" id="radio_status" name="radio_status" value="Pending" <?php if($newStatus=='Pending') echo 'checked="checked"' ?> disabled="disabled" > Pending&nbsp;&nbsp;&nbsp;
        </label>
        <label>
            <input type="radio" id="radio_status" name="radio_status" value="Active" <?php if($newStatus=='Active') echo 'checked="checked"' ?> disabled="disabled" > Active&nbsp;&nbsp;&nbsp;
        </label>
        <label>
            <input type="radio" id="radio_status" name="radio_status" value="Blocked" <?php if($newStatus=='Blocked') echo 'checked="checked"' ?> disabled="disabled" > Blocked
        </label>
    </div>
    
    <div class="col-xs-4" style="text-align:right">
        <span style="color:#C00">* Mandatory Fields</span>
    </div>
</div>
<div class="row" style="padding:15px">
    <div class="col-xs-12">
        <button type="button" class="btn btn-primary" style="padding:6px; width:100px;" id="btnCancel">Close</button>
        <button type="submit" class="btn btn-danger" style="padding:6px; width:100px;" id="btnSave" >Delete</button>
    </div>
</div>
<div class="row" style="padding:15px">
    <div class="col-xs-12">
        <div class="success_alert">Record Deleted successfully!</div>
    </div>
</div>
</form>

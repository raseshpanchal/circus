<?php
include("../../config/connection.php");
$newID=$_GET['ID'];
//Fetch Existing Records
$query=mysql_query("SELECT * FROM industries WHERE ID='$newID'");
$view=mysql_fetch_array($query);
$newTitle=$view['Title'];
$newInfo=urldecode($view['Info']);
$newPicture=$view['Picture'];
$newPublish=$view['Publish'];

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

<!-- Summernote Starts -->
<link rel="stylesheet" href="../summernote/summernote.css">
<script type="text/javascript" src="../summernote/summernote.js"></script>
<!-- Summernote Ends -->

<script src="app/js/onlyAlpha.js"></script>
<script src="app/js/onlyNum.js"></script>
<script>
$(document).ready(function(){
	$("#btnSave").click(function(){
		$('#btnSave').attr("disabled", true);
		$.post("app/deleteIndustryEntry?ID=<?php echo $newID ?>",
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

<script type="text/javascript">
$(function() {
    $('.summernote').summernote({
        height: 250
    });

});
</script>

<div class="formShadow"></div>

<div style="background-color:#424a5d; height:37px; border-top:solid 1px #FFF; border-bottom:solid 1px #044636; color:#FFF; padding-left:15px; padding-top:7px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>Delete Industry</td>
  </tr>
</table>
</div>

<form name="myForm" id="myForm" method="POST">
<div class="row" style="padding:15px;">
    <div class="col-xs-12">
        <input type="text" class="form-control form-require" id="txt_title" name="txt_title" value="<?php echo $newTitle ?>" required placeholder="Title*" readonly />
    </div>
</div>

<div class="row" style="padding:15px">
    <div class="col-xs-12">
        <textarea class="form-control form-require summernote" id="txt_desc" name="txt_desc" placeholder="Details*" style="resize: none; height:250px;" disabled="disabled"><?php echo $newInfo ?></textarea>
    </div>
</div>

<div class="row" style="padding:15px; padding-top:10px; padding-bottom:10px;">
    <div class="col-xs-6">
        <label><input type="checkbox" <?php if($newPublish=='Yes') echo 'checked="checked"' ?> disabled="disabled"> Publish Online</label>
    </div>
    <div class="col-xs-6" style="text-align:right">
        <!--<span style="color:#C00">* Mandatory Fields</span>-->
    </div>
</div>

<div class="row" style="padding:15px">
    <div class="col-xs-12">
        <button type="button" class="btn btn-primary" style="padding:6px; width:100px;" id="btnCancel">Close</button>
        <button type="submit" class="btn btn-danger" style="padding:6px; width:100px;" id="btnSave">Delete</button>
    </div>
</div>

<div class="row" style="padding:15px">
    <div class="col-xs-12">
        <div class="success_alert">Record deleted successfully!</div>
    </div>
</div>
</form>
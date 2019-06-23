<?php
include("../../config/connection.php");
$newID=$_GET['ID'];
//Fetch Existing Records
$query=mysql_query("SELECT * FROM industries WHERE ID='$newID'");
$view=mysql_fetch_array($query);
$myTitle=$view['Title'];
$myInfo=urldecode($view['Info']);
$myPublish=$view['Publish'];

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
<script src="../js/jquery.min.js"></script>

<!-- Summernote Starts -->
<link rel="stylesheet" href="../summernote/summernote.css">
<script type="text/javascript" src="../summernote/summernote.js"></script>
<!-- Summernote Ends -->

<script src="app/js/onlyAlpha.js"></script>
<script src="app/js/onlyNum.js"></script>
<script>
$(document).ready(function(){
	$("#btnSave").click(function(){
		if ($('#chk_publish').is(":checked"))
		{
		 	var myShow = '<img src="images/mark-yes.png" border="0" />';
		}
		else
		{
			var myShow = '<img src="images/reject.png" border="0" />';
		}
		var myAbout = $( "#contents" ).val();
		$('#btnSave').attr("disabled", true);
		$.post("app/editIndustryEntry?ID=<?php echo $newID ?>",
		$("#myForm").serialize(),
		function(data){
            //Update Edited Table Row
			$("#1_<?php echo $newID ?>").css('background-color','#a3d3d1');
			$("#3_<?php echo $newID ?>").html(myAbout);
			closeFormDelete();
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
    <td>Edit Industry</td>
  </tr>
</table>
</div>

<form name="myForm" id="myForm" method="POST">
<div class="row" style="padding:15px; padding-bottom:5px">
    <div class="col-xs-12">
        <input type="text" class="form-control form-require" value="<?php echo $myTitle ?>" id="txt_title" name="txt_title" required placeholder="Title*" />
    </div>
</div>

<div class="row" style="padding:15px">
    <div class="col-xs-12">
        <textarea class="form-control form-require summernote" id="contents" name="contents" title="Contents">
        <?php echo $myInfo ?>
        </textarea>
    </div>
</div>

<div class="row" style="padding:15px">
    <div class="col-xs-6">
        <label><input type="checkbox" <?php if($myPublish=='Yes') echo 'checked="checked"' ?> id="chk_publish" name="chk_publish" value="Yes"> Publish Online</label>
    </div>
    <div class="col-xs-6" style="text-align:right">
        <span style="color:#C00">* Mandatory Fields</span>
    </div>
</div>

<div class="row" style="padding:15px">
    <div class="col-xs-12">
        <button type="button" class="btn btn-primary" style="padding:6px; width:100px;" id="btnCancel">Close</button>
        <button type="submit" class="btn btn-danger" style="padding:6px; width:100px;" id="btnSave">Update</button>
    </div>
</div>

<div class="row" style="padding:15px">
    <div class="col-xs-12">
        <div class="success_alert">Record updated successfully!</div>
    </div>
</div>
</form>
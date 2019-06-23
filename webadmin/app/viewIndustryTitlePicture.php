<?php
include("../../config/connection.php");
$newID=$_GET['ID'];
//Fetch Existing Records
$query=mysql_query("SELECT * FROM industries WHERE ID='$newID'");
$view=mysql_fetch_array($query);
$myTitle=$view['Title'];
$myPicture=$view['Picture'];
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
<script src="app/js/onlyAlpha.js"></script>
<script src="app/js/onlyNum.js"></script>
<script>
$(document).ready(function(){
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
    <td>View Industry Title Image</td>
  </tr>
</table>
</div>

<form name="myForm" id="myForm" method="POST">
<div class="row" style="padding:15px; padding-bottom:10px;">
    <div class="col-xs-12" style="text-align:center">
        <div style="width:250px; height:160px; border:solid 1px #CCC; margin-left:125px; margin-bottom:10px; background-image:url(../industry-images/<?php echo $myPicture ?>); background-size: 100% 100%;"></div>
        <?php echo $myTitle ?>
    </div>
</div>

<div class="row" style="padding:15px">
    <div class="col-xs-12">
        <button type="button" class="btn btn-primary" style="padding:6px; width:100px;" id="btnCancel">Close</button>
    </div>
</div>
</form>
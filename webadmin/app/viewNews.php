<?php
include("../../config/connection.php");
$newID=$_GET['ID'];
//Fetch Existing Records
$query=mysql_query("SELECT * FROM news WHERE ID='$newID'");
$view=mysql_fetch_array($query);
$myTitle=$view['Title'];
$myShortDesc=urldecode($view['News']);
$myPicture=$view['Picture'];
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
    <td>View News</td>
  </tr>
</table>
</div>

<form name="myForm" id="myForm" method="POST">
<div class="row" style="padding:15px; padding-bottom:10px;">
    <div class="col-xs-12" style="text-align:center">
        <div style="width:80px; height:80px; border:solid 1px #CCC; margin-left:225px; margin-bottom:10px; border-radius:50px; background-image:url(../news-images/<?php echo $myPicture ?>); background-size: 100% 100%;"></div>
        <?php echo $myTitle; ?>
    </div>
</div>

<div class="row" style="padding:15px; padding-bottom:10px;">
    <div class="col-xs-12" style="text-align:center">
        <?php echo $myShortDesc ?>
    </div>
</div>

<div class="row" style="padding:15px">
    <div class="col-xs-12">
        <button type="button" class="btn btn-primary" style="padding:6px; width:100px;" id="btnCancel">Close</button>
    </div>
</div>
</form>
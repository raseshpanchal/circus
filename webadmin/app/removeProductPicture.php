<?php
include("../../config/connection.php");
$newID=$_GET['ID'];
//Fetch Existing Records
$query=mysql_query("SELECT * FROM products WHERE ID='$newID'");
$view=mysql_fetch_array($query);
$newTitle=$view['Title'];
$newPicture=$view['Picture'];
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
	$("#btnSave").click(function(){
		$('#btnSave').attr("disabled", true);
		$.post("app/removeProductPictureEntry?ID=<?php echo $newID ?>",
		$("#myForm").serialize(),
		function(data){
			//Show Updated Table Row
			$("#1_<?php echo $newID ?>").css('background-color','#a3d3d1');
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

<div class="formShadow"></div>

<div style="background-color:#424a5d; height:37px; border-top:solid 1px #FFF; border-bottom:solid 1px #044636; color:#FFF; padding-left:15px; padding-top:7px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>Remove Product Picture</td>
  </tr>
</table>
</div>

<form name="myForm" id="myForm" method="POST">
<div class="row" style="padding:15px; padding-bottom:10px;">
    <div class="col-xs-12" style="text-align:center">
        <div style="width:80px; height:80px; border:solid 1px #CCC; margin-left:225px; margin-bottom:10px; border-radius:50px; background-image:url(../product-images/<?php echo $newPicture ?>); background-size: 100% 100%;"></div>
        <?php echo $newTitle; ?>
    </div>
</div>

<div class="row" style="padding:15px">
    <div class="col-xs-12">
        <button type="button" class="btn btn-primary" style="padding:6px; width:100px;" id="btnCancel">Close</button>
        <?php
        if($newPicture!="")
        {
            ?>
            <button type="submit" class="btn btn-danger" style="padding:6px; width:100px;" id="btnSave">Remove Pic</button>
            <?php
        }
        ?>
    </div>
</div>

<div class="row" style="padding:15px">
    <div class="col-xs-12">
        <div class="success_alert">Record deleted successfully!</div>
    </div>
</div>
</form>
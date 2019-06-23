<?php
include("../../config/connection.php");
$newID=$_GET['ID'];
//Fetch Existing Records
$query=mysql_query("SELECT * FROM products WHERE ID='$newID'");
$view=mysql_fetch_array($query);
$newTitle=$view['Title'];
$newPicture=$view['Picture'];
$newPublish=$view['Publish'];
?>

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
    <td>Add Product Picture</td>
  </tr>
</table>
</div>
<form name="myFormImage" id="myFormImage" method="POST" enctype="multipart/form-data" action="app/addProductPictureEntry?ID=<?php echo $newID ?>">
<div class="row" style="padding:15px; padding-top:20px; padding-bottom:15px;">
    <div class="col-xs-12">
        <input type="text" class="form-control form-require" id="txt_name" name="txt_name" value="<?php echo $newTitle ?>" readonly="readonly"/>
        <div id="error_name"></div>
    </div>
</div>

<div class="row" style="padding:15px; padding-top:0px; padding-bottom:0px;">
    <div class="col-xs-12">
        <!-- File Input Starts -->
        <div id="upload-file-container" >
            <input type="file" name="file" id="file" />
        </div>
        <!-- File Input Ends -->
    </div>
</div>

<div class="row" style="padding:15px; padding-top:0px; padding-bottom:0px; text-align:center">
    <div class="col-xs-12">
        <small>Note: Min Image Size W:520px | H:460px</small>
    </div>
</div>

<div class="row" style="padding:15px; padding-top:0px; padding-bottom:10px;">
    <div class="col-xs-12">
        <label><input type="checkbox" checked="checked" id="chk_publish" name="chk_publish"> Publish Online</label>
    </div>
</div>

<div class="row" style="padding:15px; padding-top:0px; padding-bottom:30px;">
    <div class="col-xs-12">
        <button type="button" class="btn btn-primary" style="padding:6px; width:100px;" id="btnCancel">Close</button>
        <input type="submit" name="submit" class="btn btn-danger" value="Add" style="padding:6px; width:100px;" onclick="productImage()">
    </div>
</div>
</form>
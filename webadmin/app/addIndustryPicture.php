<?php
include("../../config/connection.php");
?>

<script>
$(document).ready(function(){
	//Function for Cancel
	$("#btnCancel").click(function(){
		closeForm();
	});
});

function ddIndustries() {
    var myform = document.getElementById("myFormImage");
    myform.txt_title.value = myform.select_title.value;
}
</script>

<div class="formShadow"></div>

<div style="background-color:#424a5d; height:37px; border-top:solid 1px #FFF; border-bottom:solid 1px #044636; color:#FFF; padding-left:15px; padding-top:7px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>Add Industry Image</td>
  </tr>
</table>
</div>
<form name="myFormImage" id="myFormImage" method="POST" enctype="multipart/form-data" action="app/addIndustryPictureEntry">
<div class="row" style="padding:15px; padding-top:20px; padding-bottom:15px;">
    <div class="col-xs-12">
        <input type="hidden" class="form-control form-require" id="txt_title" name="txt_title" />
        <select class="form-control form-require" name="select_title" id="select_title" onChange="ddIndustries()">
            <option value="">Select Industry</option>
            <?php
            $query_ind=mysql_query("SELECT * FROM industries WHERE Publish='Yes' ORDER BY Title ASC");
            while($view_ind=mysql_fetch_array($query_ind))
            {
                $newID=$view_ind['ID'];
                $newTitle=ucfirst($view_ind['Title']);
            ?>
            <option value="<?php echo $newID; ?>">
                <?php echo $newTitle; ?>
            </option>
            <?php
            }
            ?>
        </select>
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
        <small>Note: Min Image Size W:250px | H:160px</small>
    </div>
</div>

<div class="row" style="padding:15px; padding-top:20px; padding-bottom:15px;">
    <div class="col-xs-12">
        <input type="text" class="form-control form-require" id="txt_image_title" name="txt_image_title" placeholder="Add Image Title" />
    </div>
</div>

<div class="row" style="padding:15px; padding-top:10px; padding-bottom:30px;">
    <div class="col-xs-12">
        <button type="button" class="btn btn-primary" style="padding:6px; width:100px;" id="btnCancel">Close</button>
        <!--<button type="submit" class="btn btn-danger" style="padding:6px; width:100px;" id="btnSave">Add</button>-->
        <input type="submit" name="submit" class="btn btn-danger" value="Add" style="padding:6px; width:100px;" onclick="industryImages()">
    </div>
</div>
</form>
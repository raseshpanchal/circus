<?php
include("../../config/connection.php");
$newID=$_GET['ID'];
//Fetch Course Details
$query_1=mysql_query("SELECT * FROM products WHERE ID='$newID'");
$view_1=mysql_fetch_array($query_1);
$myTitle=$view_1['Title'];
$myProductTitle=str_replace(' ', '', $myTitle);
$myPicture=$view_1['Picture'];

//Delete Existing Picture
if($myPicture!='')
{
	$myImages=glob("../../product-images/$myPicture");
	foreach($myImages as $myImage)
	{
		unlink($myImage);
	}
}

$path = "../../product-images/";
// an array of allowed extensions
$allowedExts = array("gif", "jpeg", "jpg", "png","GIF","JPEG","JPG","PNG");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

//check if the file type is image and then extension
// store the files to upload folder
//echo '0' if there is an error
if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/x-png") || ($_FILES["file"]["type"] == "image/png")) && in_array($extension, $allowedExts))
{
	if ($_FILES["file"]["error"] > 0)
	{
		echo "0";
	}
	else
	{
		//Form Values
		$new_image_name = time()."_".$newID.".".$extension;

        //Publish Online
        $myPublish=$_POST['chk_publish'];
        if(!$myPublish)
        {
            $myPublish = 'No';
        }
        else
        {
            $myPublish = 'Yes';
        }

		if($newID!='')
		{
			move_uploaded_file($_FILES["file"]["tmp_name"], $path.$new_image_name);
			//Insert Values in DB
			$query_1=mysql_query("UPDATE products SET Picture='$new_image_name', Publish='$myPublish' WHERE ID='$newID'");
		}
	}
}
else
{
	echo "0";
}
?>
<?php
include("../../config/connection.php");

$newTitle=$_POST['txt_title'];

$path = "../../web-img/";
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
        $myTitle = str_replace(' ','',$newTitle);
		$new_image_name = time()."_".$myTitle.".".$extension;

		if($newTitle!='')
		{
			move_uploaded_file($_FILES["file"]["tmp_name"], $path.$new_image_name);
			//Insert Values in DB
			$query_1=mysql_query("INSERT INTO web_images SET Title='$newTitle', Picture='$new_image_name'");
		}
	}
}
else
{
	echo "0";
}
?>
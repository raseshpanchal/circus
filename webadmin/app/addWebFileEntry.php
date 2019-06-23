<?php
include("../../config/connection.php");

$newTitle=$_POST['txt_title'];

$path = "../../web-files/";
// an array of allowed extensions
$allowedExts = array("pdf", "doc", "docx", "xls", "xlsx", "ppt", "pptx", "PDF", "DOC", "DOCX", "XLS", "XLSX", "PPT", "PPTX");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

//check if the file type is image and then extension
// store the files to upload folder
//echo '0' if there is an error
if ((($_FILES["file"]["type"] == "application/pdf") || ($_FILES["file"]["type"] == "application/doc") || ($_FILES["file"]["type"] == "application/docx") || ($_FILES["file"]["type"] == "application/xls") || ($_FILES["file"]["type"] == "application/xlsx") || ($_FILES["file"]["type"] == "application/ppt") || ($_FILES["file"]["type"] == "application/pptx")) && in_array($extension, $allowedExts))
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
			$query_1=mysql_query("INSERT INTO web_files SET Title='$newTitle', FileName='$new_image_name'");
		}
	}
}
else
{
	echo "0";
}
?>
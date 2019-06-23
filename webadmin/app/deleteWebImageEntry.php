<?php
include("../../config/connection.php");

$newID=$_GET['ID'];

$query=mysql_query("SELECT * FROM web_images WHERE ID='$newID'");
$view=mysql_fetch_array($query);
$myPicture=$view['Picture'];

//Delete Student Picture
if($myPicture!='')
{
	$myImages=glob("../../web-img/$myPicture");
	foreach($myImages as $myImage)
	{
		unlink($myImage);
	}
}

$query_1=mysql_query("DELETE FROM web_images WHERE ID='$newID'");

?>
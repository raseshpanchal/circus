<?php
include("../../config/connection.php");

$newID=$_GET['ID'];

$query=mysql_query("SELECT * FROM news WHERE ID='$newID'");
$view=mysql_fetch_array($query);
$myPicture=$view['Picture'];

//Delete News Picture
if($myPicture!='')
{
	$myImages=glob("../../news-images/$myPicture");
	foreach($myImages as $myImage)
	{
		unlink($myImage);
	}
}

$query_1=mysql_query("DELETE FROM news WHERE ID='$newID'");

?>
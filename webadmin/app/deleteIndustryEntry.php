<?php
include("../../config/connection.php");

$newID=$_GET['ID'];

$query=mysql_query("SELECT * FROM industries WHERE ID='$newID'");
$view=mysql_fetch_array($query);
$myPicture=$view['Picture'];

//Delete Industry Title Picture
if($myPicture!='')
{
	$myImages=glob("../../industry-images/$myPicture");
	foreach($myImages as $myImage)
	{
		unlink($myImage);
	}
}

$query_1=mysql_query("DELETE FROM industries WHERE ID='$newID'");

?>
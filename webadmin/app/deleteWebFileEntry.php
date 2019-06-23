<?php
include("../../config/connection.php");

$newID=$_GET['ID'];

$query=mysql_query("SELECT * FROM web_files WHERE ID='$newID'");
$view=mysql_fetch_array($query);
$myFileName=$view['FileName'];

//Delete Student Picture
if($myFileName!='')
{
	$myImages=glob("../../web-files/$myFileName");
	foreach($myImages as $myImage)
	{
		unlink($myImage);
	}
}

$query_1=mysql_query("DELETE FROM web_files WHERE ID='$newID'");

?>
<?php
include("../../config/connection.php");

$newID=$_GET['ID'];

$query=mysql_query("SELECT * FROM industries WHERE ID='$newID'");
$view=mysql_fetch_array($query);
$myPicture=$view['Picture'];

//Delete Student Picture
if($myPicture!='')
{
	$myImages=glob("../../industry-images/$myPicture");
	foreach($myImages as $myImage)
	{
		unlink($myImage);
	}

    //Update Values in DB
    $query_1=mysql_query("UPDATE industries SET Picture='' WHERE ID='$newID'");
}

?>
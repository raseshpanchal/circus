<?php
include("../../config/connection.php");

$newID=$_GET['ID'];

$query=mysql_query("SELECT * FROM news WHERE ID='$newID'");
$view=mysql_fetch_array($query);
$myPicture=$view['Picture'];

//Delete Student Picture
if($myPicture!='')
{
	$myImages=glob("../../news-images/$myPicture");
	foreach($myImages as $myImage)
	{
		unlink($myImage);
	}

    //Update Values in DB
    $query_1=mysql_query("UPDATE news SET Picture='' WHERE ID='$newID'");
}

?>
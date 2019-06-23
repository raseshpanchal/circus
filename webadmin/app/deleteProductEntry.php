<?php
include("../../config/connection.php");

$newID=$_GET['ID'];

$query=mysql_query("SELECT * FROM products WHERE ID='$newID'");
$view=mysql_fetch_array($query);
$myPicture=$view['Picture'];

//Delete Product Picture
if($myPicture!='')
{
	$myImages=glob("../../product-images/$myPicture");
	foreach($myImages as $myImage)
	{
		unlink($myImage);
	}
}

$query_1=mysql_query("DELETE FROM products WHERE ID='$newID'");

?>
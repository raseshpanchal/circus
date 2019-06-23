<?php
include("../../config/connection.php");

echo $newID=$_GET['ID'];

$newProduct=urlencode($_POST['contents']);
$myPublish=$_POST['chk_publish'];
if(!$myPublish)
{
	$myPublish = 'No';
}
else
{
	$myPublish = 'Yes';
}

//Update Values in DB
$query_1=mysql_query("UPDATE products SET Product='$newProduct', Publish='$myPublish' WHERE ID='$newID'");

?>
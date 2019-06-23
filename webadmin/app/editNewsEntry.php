<?php
include("../../config/connection.php");

echo $newID=$_GET['ID'];

$myTitle=$_POST['txt_title'];
$myDesc=urlencode($_POST['txt_desc']);

//Publish Online
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
$query_1=mysql_query("UPDATE news SET Title='$myTitle', News='$myDesc', Publish='$myPublish' WHERE ID='$newID'");

?>
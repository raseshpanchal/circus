<?php
include("../../config/connection.php");

$myID=$_GET['ID'];

$myAbout=urlencode($_POST['contents']);

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
$query_1=mysql_query("UPDATE about SET About='$myAbout', Publish='$myPublish' WHERE ID='$myID'");

?>
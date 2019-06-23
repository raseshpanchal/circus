<?php
include("../../config/connection.php");

$myID=$_GET['ID'];

$myTitle=$_POST['txt_title'];
$myInfo=urlencode($_POST['contents']);

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
$query_1=mysql_query("UPDATE industries SET Title='$myTitle', Info='$myInfo', Publish='$myPublish' WHERE ID='$myID'");

?>
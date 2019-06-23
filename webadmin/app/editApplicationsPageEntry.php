<?php
include("../../config/connection.php");

echo $newID=$_GET['ID'];

$newTitle=$_POST['txt_title'];
$newApplication=urlencode($_POST['contents']);

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
$query_1=mysql_query("UPDATE applications_pages SET Title='$newTitle', Application='$newApplication', Publish='$myPublish' WHERE ID='$newID'");

?>
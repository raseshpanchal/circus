<?php
include("../../config/connection.php");

$newID=$_GET['ID'];

$myDesc=$_POST['txt_desc'];

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
$query_1=mysql_query("UPDATE applications SET Applications='$myDesc', Publish='$myPublish' WHERE ID='$newID'");

?>
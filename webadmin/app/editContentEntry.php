<?php
include("../../config/connection.php");

echo $newID=$_GET['ID'];

$myTitle=$_POST['txt_title'];
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
$query_1=mysql_query("UPDATE web_content SET Title='$myTitle', Content='$myDesc', Publish='$myPublish' WHERE ID='$newID'");

?>
<?php
include("../../config/connection.php");

$myDesc=urlencode($_POST['contents']);

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

if($myDesc!="")
{
	//Insert Values in DB
	$query_1=mysql_query("INSERT INTO applications SET Applications='$myDesc', Publish='$myPublish'");
    if($query_1)
    {
        echo '1';
    }
    else
    {
        echo '2';
    }
}
else
{
	echo '0';
}

?>
<?php
include("../../config/connection.php");

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

//Check the existing entry
$query=mysql_query("SELECT * FROM news WHERE Title='$myTitle'");
$test_rows=mysql_num_rows($query);

if($test_rows==0)
{
	//Insert Values in DB
	$query_1=mysql_query("INSERT INTO news SET Title='$myTitle', News='$myDesc', Publish='$myPublish'");
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
<?php
error_reporting(0);
include_once("../config/connection.php");
include_once('../userInfo.php');

$newDesc=urlencode($_POST['txt_desc']);

$query_1=mysqli_query($link, "UPDATE freelancer_registration SET Description='$newDesc' WHERE EmailID='$myEmail'");

if($query_1)
{
    echo '1';
}
else
{
    echo '0';
}


?>

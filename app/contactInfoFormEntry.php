<?php
error_reporting(0);
include_once("../config/connection.php");
include_once('../userInfo.php');

$newMobile=$_POST['txt_mobile'];
$newAddress=$_POST['txt_address'];
$newDOB=$_POST['txt_dob'];
$newGender=$_POST['txt_gender'];

$query_1=mysqli_query($link, "UPDATE freelancer_registration SET Mobile='$newMobile', Address='$newAddress', DOB='$newDOB', Gender='$newGender' WHERE EmailID='$myEmail'");

if($query_1)
{
    echo '1';
}
else
{
    echo '0';
}


?>

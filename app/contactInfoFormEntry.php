<?php
error_reporting(0);
include_once("../config/connection.php");
include_once('../userInfo.php');

$newMobile=$_POST['txt_mobile'];
$newDOB=$_POST['txt_dob'];
$newGender=$_POST['txt_gender'];
$newAddress=$_POST['txt_address'];
$newCity=$_POST['txt_city'];
$newState=$_POST['txt_state'];
$newZip=$_POST['txt_zip'];
$newCountry=$_POST['txt_country'];

$checkFUser=is_numeric($_SESSION['whrsrtfruser']);

$myUser=$_SESSION['whrsrtfruser'];

if($checkFUser==1)
{
    $query_1=mysqli_query($link, "UPDATE freelancer_registration SET Mobile='$newMobile', Address='$newAddress', DOB='$newDOB', Gender='$newGender', City='$newCity', State='$newState', Country='$newCountry', ZipCode='$newZip' WHERE Mobile='$myUser'");
}
else
{
    $query_1=mysqli_query($link, "UPDATE freelancer_registration SET Mobile='$newMobile', Address='$newAddress', DOB='$newDOB', Gender='$newGender', City='$newCity', State='$newState', Country='$newCountry', ZipCode='$newZip' WHERE EmailID='$myUser'");
}

if($query_1)
{
    echo '1';
}
else
{
    echo '0';
}


?>

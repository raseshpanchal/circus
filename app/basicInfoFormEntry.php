<?php
error_reporting(0);
include_once("../config/connection.php");
include_once('../userInfo.php');

//$newFirstName=$_POST['txt_fname'];
//$newLastName=$_POST['txt_lname'];
$newCompany=$_POST['txt_company'];
//$newProfession=$_POST['txt_profession'];
$newDesc=urlencode($_POST['txt_desc']);

$checkFUser=is_numeric($_SESSION['whrsrtfruser']);

$myUser=$_SESSION['whrsrtfruser'];

if($checkFUser==1)
{
    $query_1=mysqli_query($link, "UPDATE freelancer_registration SET BusinessTitle='$newCompany', Description='$newDesc' WHERE Mobile='$myUser'");
}
else
{
    $query_1=mysqli_query($link, "UPDATE freelancer_registration SET BusinessTitle='$newCompany', Description='$newDesc' WHERE EmailID='$myUser'");
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

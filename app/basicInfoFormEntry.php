<?php
error_reporting(0);
include_once("../config/connection.php");
include_once('../userInfo.php');

$newFirstName=$_POST['txt_fname'];
$newLastName=$_POST['txt_lname'];
$newCompany=$_POST['txt_company'];
$newProfession=$_POST['txt_profession'];
$newDesc=$_POST['txt_desc'];

$query_1=mysqli_query($link, "UPDATE freelancer_registration SET FirstName='$newFirstName', LastName='$newLastName', BusinessTitle='$newCompany', Professional='$newProfession', Description='$newDesc' WHERE EmailID='$myEmail'");

if($query_1)
{
    echo '1';
}
else
{
    echo '0';
}


?>

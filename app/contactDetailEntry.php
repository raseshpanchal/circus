<?php
error_reporting(0);
include_once("../config/connection.php");

$newContactName=$_POST['txt_name'];
$newContactEmail=$_POST['txt_email'];
$newContactLocation=$_POST['txt_location'];
$newContactNumber=$_POST['txt_number'];
//$newContactPrefrence=$_POST['check_userpre'];

$newContactPrefrence = implode(',',  $_POST['check_userpre']);

//Check Existing Record of Email ID
$query_1=mysqli_query($link, "SELECT * FROM contact_me WHERE Email='$newContactEmail'");
$view_email=mysqli_num_rows($query_1);
if($view_email!=0)
{
    echo 'emailError';
}
else
{
$query_2=mysqli_query($link, "INSERT INTO contact_me SET Name='$newContactName', Email='$newContactEmail', City='$newContactLocation', Number='$newContactNumber', ContactPrefrence=('" . $newContactPrefrence . "')");

if($query_2)
{
    echo 'regiSuccess';
}
else
{
    echo '0';
}

   
}


?>

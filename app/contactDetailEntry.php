<?php
error_reporting(0);
include_once("../config/connection.php");


$newUserID=$_POST['txt_user'];
$newContactName=$_POST['txt_name'];
$newContactEmail=$_POST['txt_email'];
$newContactLocation=$_POST['txt_location'];
$newContactNumber=$_POST['txt_number'];
$newComment=urlencode($_POST['txt_comment']);

$newContactPrefrence = implode(',',  $_POST['check_userpre']);

$query_1=mysqli_query($link, "INSERT INTO freelancer_inquiries SET UserID='$newUserID', Name='$newContactName', Email='$newContactEmail', City='$newContactLocation', Number='$newContactNumber', Comment='$newComment', PostDate=now(), ContactPrefrence=('" . $newContactPrefrence . "')");

if($query_1)
{
    echo 'regiSuccess';
}
else
{
    echo '0';
}
?>

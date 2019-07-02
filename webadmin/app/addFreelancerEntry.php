<?php
if (!isset($_SESSION)) { session_start(); }
include_once("../../config/connection.php");


$myName=$_POST['txt_name'];
$myEmail=$_POST['txt_email'];
$myMobile=$_POST['txt_mobile'];
$mydob=$_POST['txt_dob'];
$mydec=$_POST['txt_dec'];
$myStatus=$_POST['radio_status'];

//Insert Values in DB
$query_2=mysqli_query($link, "INSERT INTO freelancer_registration SET FullName='$myName', EmailID='$myEmail', Mobile='$myMobile', DOB='$mydob', Description='$mydec', CreateDate=now(), CreateTime=now(), Status='$myStatus'");
?>

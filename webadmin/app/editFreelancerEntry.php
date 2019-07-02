<?php
include_once("../../config/connection.php");

$myID=$_GET['ID'];

$myName=$_POST['txt_name'];
$myEmail=$_POST['txt_email'];
$myMobile=$_POST['txt_mobile'];
$mydob=$_POST['txt_dob'];
$mydec=$_POST['txt_dec'];
$myStatus=$_POST['radio_status'];

//Insert Values in DB
$query_1=mysqli_query($link, "UPDATE freelancer_registration SET FullName='$myName', EmailID='$myEmail', Mobile='$myMobile', DOB='$mydob', Description='$mydec', CreateDate=now(), CreateTime=now(), Status='$myStatus' WHERE ID='$myID'");
?>
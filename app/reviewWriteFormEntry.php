<?php
error_reporting(0);
include_once("../config/connection.php");
include_once('../userInfo.php');

$newRating=$_GET['RT'];
$newUserID=$_POST['txt_user'];
$newName=$_POST['txt_name'];
$newEmail=$_POST['txt_email'];
$newMobile=$_POST['txt_mobile'];
$newReview=urlencode($_POST['txt_review']);

$query_1=mysqli_query($link, "INSERT INTO freelancer_reviews SET UserID='$newUserID', Name='$newName', Email='$newEmail', Mobile='$newMobile', Review='$newReview', Rating='$newRating', ReviewDate=now(), ReviewDateTime=now(), Status='Approved'");

if($query_1)
{
    echo '1';
}
else
{
    echo '0';
}

?>

<?php
error_reporting(0);
include_once("../config/connection.php");
include_once('../userInfo.php');

$newID=$_POST['txt_ID'];
$newTitle=$_POST['txt_videoTitle'];

$query_1=mysqli_query($link, "UPDATE freelancer_upload_videos SET Title='$newTitle' WHERE ID='$newID'");

if($query_1)
{
    echo 'video_1';
}
else
{
    echo 'video_0';
}


?>

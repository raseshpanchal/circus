<?php
error_reporting(0);
include_once("../config/connection.php");
include_once('../userInfo.php');

$newID=$_POST['txt_ID'];

//Fetch Records
$query_1=mysqli_query($link, "SELECT * FROM freelancer_upload_pdf WHERE ID='$newID'");
$view_1=mysqli_fetch_array($query_1);
$newFileName=$view_1['FileName'];

$files=glob("../userPDFs/$newFileName");
foreach($files as $file)
{
    unlink($file);
}

$query_1=mysqli_query($link, "DELETE FROM freelancer_upload_pdf WHERE ID='$newID'");

if($query_1)
{
    echo 'pdf_1';
}
else
{
    echo 'pdf_0';
}

?>
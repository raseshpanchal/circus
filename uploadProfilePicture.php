<?php

    include_once("config/connection.php");
    include_once('userInfo.php');
    session_start();

    $checkFUser=is_numeric($_SESSION['whrsrtfruser']);
    $userName=$_SESSION['whrsrtfruser'];

    $data = $_POST['image'];

    list($type, $data) = explode(';', $data);
    list(, $data)      = explode(',', $data);

    $data = base64_decode($data);
    $imageName = $userName.'_'.time().'.png';
    file_put_contents('profilePics/'.$imageName, $data);

    //Insert Data into DB


    if($checkFUser==1)
    {
        $query_1=mysqli_query($link, "UPDATE freelancer_registration SET ProfilePic='$imageName' WHERE Mobile='$userName'");
    }
    else
    {
        $query_1=mysqli_query($link, "UPDATE freelancer_registration SET ProfilePic='$imageName' WHERE EmailID='$userName'");
    }

    echo 'done';

?>

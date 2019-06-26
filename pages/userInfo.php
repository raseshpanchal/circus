<?php
if(!isset($_SESSION))
{
    session_start();
    
    //Fetch User Info
    if($_SESSION['pkcwebuser'])
    {
        $myEmail=$_SESSION['pkcwebuser'];
        $query_user=mysqli_query($link, "SELECT * FROM registrations WHERE Email='$myEmail'");
        $view_user=mysqli_fetch_array($query_user);
        $userID=$view_user['ID'];
        $userFirstName=$view_user['FirstName'];
        $userLastName=$view_user['LastName'];
        $userFullName=$userFirstName.' '.$userLastName;
    }
}
?>
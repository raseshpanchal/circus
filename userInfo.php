<?php
if(!isset($_SESSION))
{
    session_start();

    //Fetch Freelancer Info
    if($_SESSION['whrsrtfruser'])
    {
        $myEmail=$_SESSION['whrsrtfruser'];
        $query_user=mysqli_query($link, "SELECT * FROM freelancer_registration WHERE EmailID='$myEmail'");
        $view_user=mysqli_fetch_array($query_user);
        $userID=$view_user['ID'];
        $userFirstName=$view_user['FirstName'];
        $userLastName=$view_user['LastName'];
        $userFullName=$userFirstName.' '.$userLastName;
        $userDOB=$view_user['DOB'];
        $userMobile=$view_user['Mobile'];
        $userGender=$view_user['Gender'];
        $userDescription=$view_user['Description'];
        $userBusinessTitle=$view_user['BusinessTitle'];
        $userProfessional=$view_user['Professional'];
        $userAddress=$view_user['Address'];
        $userCityID=$view_user['CityID'];
        $userStateID=$view_user['StateID'];
        $userCountryID=$view_user['CountryID'];
        $userZipCode=$view_user['ZipCode'];
    }

    //Fetch Recruiter Info
    if($_SESSION['whrsrtrcuser'])
    {
        $myEmail=$_SESSION['whrsrtrcuser'];
        $query_user=mysqli_query($link, "SELECT * FROM recruiter_registration WHERE EmailID='$myEmail'");
        $view_user=mysqli_fetch_array($query_user);
        $userID=$view_user['ID'];
        $userFirstName=$view_user['FirstName'];
        $userLastName=$view_user['LastName'];
        $userFullName=$userFirstName.' '.$userLastName;
        $userDOB=$view_user['DOB'];
        $userMobile=$view_user['Mobile'];
        $userGender=$view_user['Gender'];
        $userAddress=$view_user['Address'];
        $userCityID=$view_user['CityID'];
        $userStateID=$view_user['StateID'];
        $userCountryID=$view_user['CountryID'];
        $userZipCode=$view_user['ZipCode'];
    }
}
?>

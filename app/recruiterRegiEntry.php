<?php
//error_reporting(0);
include_once("../config/connection.php");

$newName=$_POST['txt_name'];
$newEmail=$_POST['txt_email'];
$newMobile=$_POST['txt_mobile'];
$newGender=$_POST['txt_gender'];
$newDOB=$_POST['txt_dob'];

function randomPassword() {
    $alphabet = "abcdefghijklmnpqrstuwxyz!@#$%&ABCDEFGHIJKLMNPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 10; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

$newPass = randomPassword();

//Check Existing Record of Email ID
$query_1=mysqli_query($link, "SELECT * FROM recruiter_registration WHERE EmailID='$newEmail'");
$view_email=mysqli_num_rows($query_1);
if($view_email!=0)
{
    echo 'emailError';
}
else
{
    $newFullName=ucwords(strtolower($newName));
    //Insert Values Into DB
    $query_2=mysqli_query($link, "INSERT INTO recruiter_registration SET FullName='$newFullName', Mobile='$newMobile', EmailID='$newEmail', DOB='$newDOB', Gender='$newGender', Password='$newPass', CreateDate=now(), CreateTime=now(), PaidPhoto='No', PaidBanners='No', PaidListing='No', Status='New'");
    if($query_2)
    {
        echo 'regiSuccess';
        /*
        //Code for Sending e-mail to User
        $to=$newEmail;
        $from = "WhereSert";
        $subject="WhereSert Recruiter Registration";
        $header = "From:WhereSert <noreply@wheresert.com>"."\r\n";
        $header .= "Reply-To:noreply@wheresert.com";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $message = '<html><body>';
        $message .= '<p>Dear <b>'.$newFullName.'</b>,<p>';
        $message .= '<p>';
        $message .= 'Thank you for registering at wheresert.com!<br/><br/>In order to prevent unauthorized sign-ups,<br/>Please click the link below to confirm your registration request and verify your e-mail address:';
        $message .= '<br/><br/>';
        $message .= '<a href="http://www.wheresert.com/validateRecruiter?ID='.myEncode($newEmail).'">';
        $message .= 'http://www.wheresert.com/validateRecruiter?ID='.myEncode($newEmail);
        $message .= '</a><br/><br/>Note: If you have problems with the provided link, simply copy and paste the link above into your browser address bar.';
        $message .= '<br/><br/>After your account is activated, you will enjoy the following services:<br/>';
        $message .= '<ol><li>You can create your profile in details</li><li>Add your list of services with prices</li></ol>';
        $message .= '<br/>Your login details are as follows:<br/><br/>';
        $message .= 'UserName: '.$newEmail.'<br/>';
        $message .= 'Password: '.$newPass.'<br/><br/>';
        $message .= 'You can change your password after your first login.<br/><br/>';
        $message .= 'Please do not reply this message, as no recipient has been designated.<br/>';
        $message .= 'Replying this message will not confirm our registration.<br/><br/>';
        $message .= 'Yours Sincerely,<br/>WhereSert Team<br/><br/>';
        $message .= '</p>';
        $message .= '</body></html>';

        $sentmail_1=mail($to, $subject, $message, $header, "noreply@wheresert.com");
        /////////////////////////////////////////

        if($sentmail_1)
        {
            //Alert for Front End Page
            echo 'regiSuccess';
        }
        */
    }
}
?>

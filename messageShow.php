<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
?>

<?php
    $query_review = mysqli_query($link, "SELECT * FROM freelancer_inquiries WHERE UserID='$userID' AND Status='New' ORDER BY PostDate DESC");
    while($view_review=mysqli_fetch_array($query_review))
    {
        $newPostDate=$view_review['PostDate'];
        $newName=$view_review['Name'];
        $newEmail=$view_review['Email'];
        $newCity=$view_review['City'];
        $newNumber=$view_review['Number'];
        $newContactPrefrence=$view_review['ContactPrefrence'];
        $newComment=urldecode($view_review['Comment']);
        ?>

    <div class="profile-comments__item">
        <div class="profile-comments__body">
        <p><b>Name:</b> <?=$newName?>(<?=$newPostDate?>)</p>
        <p>
            <b>Email Id:</b> <?=$newEmail?> 
            <span><b>Contact Number:</b> <?=$newNumber?></span>
            <span><b>Contact Prefrence:</b> <?=$newContactPrefrence?></span>
        </p>
            <div class="profile-comments__content">
                <b>Message:</b> <?=$newComment?>
            </div>
        </div>
    </div>

    <?php
    }
?>

<?php include_once('scripts/bottomScripts.php') ?>

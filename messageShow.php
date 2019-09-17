<?php
    //error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
?>

<div id="accordion">

<?php
    $query_review = mysqli_query($link, "SELECT * FROM freelancer_inquiries WHERE UserID='$userID' ORDER BY PostDate DESC");
    while($view_review=mysqli_fetch_array($query_review))
    {
        $newMsgID=$view_review['ID'];
        $newPostDate=$view_review['PostDate'];
        $newStatus=$view_review['Status'];
        $newFirstName=$view_review['FirstName'];
        $newLastName=$view_review['LastName'];
        $fullName=$newFirstName.' '.$newLastName;
        $newEmail=$view_review['Email'];
        $newCity=$view_review['City'];
        $newNumber=$view_review['ContactNumber'];
        $newContactPrefrence=$view_review['ContactPrefrence'];
        $newComment=urldecode($view_review['Comment']);
    ?>
    <div class="card">
        <div class="card-header">
            <img src="images/emailOpen.png" style="margin-right:10px;" />
            <a class="card-link" data-toggle="collapse" href="#<?=$newMsgID?>" style="color:#343a40">
                <?=$fullName?> <small><i>( <?=$newPostDate?> )</i></small>
            </a>
            <span style="float:right">
                <img src="images/emailForward.png" style="margin-right:5px;" />
                <img src="images/emailDelete.png" />
            </span>
        </div>
        <div id="<?=$newMsgID?>" class="collapse" data-parent="#accordion">
            <div class="card-body">
                <?=$newComment?>
                <br/><br/>
                <p style="font-size:10pt; text-align:right; border-top:dotted 1px #333; padding-top:10px">
                    <i>
                    Preferred Contact Mode: <?=$newContactPrefrence?>
                    </i>
                </p>
                <p style="font-size:10pt; text-align:right">
                    <i>
                        Location: <?=$newCity?>
                        &nbsp;&nbsp;|&nbsp;&nbsp;
                        Email ID: <?=$newEmail?>
                        &nbsp;&nbsp;|&nbsp;&nbsp;
                        Mobile: <?=$newNumber?>
                    </i>
                </p>
            </div>
        </div>
    </div>
    <?php
    }
?>
</div>

<?php include_once('scripts/bottomScripts.php') ?>

<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
?>

<?php
    $query_review = mysqli_query($link, "SELECT * FROM freelancer_reviews WHERE UserID='$userID' AND Status='Approved' ORDER BY ReviewDate DESC");
    while($view_review=mysqli_fetch_array($query_review))
    {
        $newName=$view_review['Name'];
        $newEmail=$view_review['Email'];
        $newReview=urldecode($view_review['Review']);
        $newRating=$view_review['Rating'];
        $newReviewDate=$view_review['ReviewDate'];

        if($newRating==1)
        {
            $showImage='images/star_1.png';
        }
        else if($newRating==2)
        {
            $showImage='images/star_2.png';
        }
        else if($newRating==3)
        {
            $showImage='images/star_3.png';
        }
        else if($newRating==4)
        {
            $showImage='images/star_4.png';
        }
        else if($newRating==5)
        {
            $showImage='images/star_5.png';
        }

        ?>

    <div class="profile-comments__item">
        <div class="profile-comments__avatar">
            <img src="<?=$showImage?>" alt="User Rating">
        </div>
        <div class="profile-comments__body">
            <h5 class="profile-comments__sender">
                <?=$newName?> <small><?=$newReviewDate?></small>
            </h5>
            <div class="profile-comments__content">
                <?=$newReview?>
            </div>
        </div>
    </div>

    <?php
    }
?>

<?php include_once('scripts/bottomScripts.php') ?>

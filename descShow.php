<?php
    error_reporting(0);
    //session_start();
    include_once("config/connection.php");
    include_once('userInfo.php');
    include_once('pageInfo.php');
?>

<p><?=$userDescription?></p>

<a href="#" class="btn btn-info btnDesc" style="float:right">Make Changes</a>

<?php include_once('scripts/bottomScripts.php') ?>

<script>
    $(document).ready(function(){

        //Check Class
        $('.btnDesc').click(function(){
            $('#description').load('descShowForm');
        });

    });
</script>

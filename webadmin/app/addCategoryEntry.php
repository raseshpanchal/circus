<?php
include("../../config/connection.php");
$newID=$_GET['ID'];

$myTitle=$_POST['txt_title'];

//Publish Online
$myPublish=$_POST['chk_publish'];
if(!$myPublish)
{
    $myPublish = 'No';
}
else
{
    $myPublish = 'Yes';
}

//Check the existing entry
$query=mysqli_query($link, "SELECT * FROM categories WHERE Category='$myTitle'");
$test_rows=mysqli_num_rows($query);

if($test_rows==0)
{
    //Insert Values in DB
    $query_1=mysqli_query($link, "INSERT INTO categories SET MyID='0', MainCatID='$newID', Category='$myTitle', Publish='$myPublish'");
    if($query_1)
    {
        echo '1';
    }
    else
    {
        echo '2';
    }
}
else
{
    echo '0';
}

?>

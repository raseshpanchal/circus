<?php
    //Fetch Client Page Title
    $query_1=mysqli_query($link, "SELECT * FROM page_title WHERE CountryID='' AND PageID=''");
    $view_1=mysqli_fetch_array($query_1);
    $newTitle=$view_1['Title'];

    //Fetch Client Page Desc
    $query_2=mysqli_query($link, "SELECT * FROM page_description WHERE CountryID='' AND PageID=''");
    $view_2=mysqli_fetch_array($query_2);
    $newPageDesc=$view_2['PageDesc'];

    //Fetch Client Page Keywords
    $query_3=mysqli_query($link, "SELECT * FROM page_keywords WHERE CountryID='' AND PageID=''");
    $view_3=mysqli_fetch_array($query_3);
    $newPageKeywords=$view_3['pageKeywords'];

    //Fetch Support Number
    $query_4=mysqli_query($link, "SELECT * FROM support_number WHERE CountryID='' AND Publish='Yes'");
    $view_4=mysqli_fetch_array($query_4);
    $newSupportNumber=$view_4['SupportNumber'];
?>

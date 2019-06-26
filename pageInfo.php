<?php

    //Find Country ID
    $query_country = mysqli_query($link, "SELECT * FROM countries WHERE CountryName='United Arab Emirates'");
    $view_country=mysqli_fetch_array($query_country);
    $newCountryID=$view_country['ID'];
    $newCountryName=$view_country['CountryName'];

    //Page ID
    $newPageID=1;

    //Fetch Client Page Title
    $query_1=mysqli_query($link, "SELECT * FROM page_title WHERE CountryID='$newCountryID' AND PageID='$newPageID' AND Publish='Yes'");
    $view_1=mysqli_fetch_array($query_1);
    $newPageTitle=$view_1['PageTitle'];

    //Fetch Client Page Desc
    $query_2=mysqli_query($link, "SELECT * FROM page_description WHERE CountryID='$newCountryID' AND PageID='$newPageID'");
    $view_2=mysqli_fetch_array($query_2);
    $newPageDesc=$view_2['PageDesc'];

    //Fetch Client Page Keywords
    $query_3=mysqli_query($link, "SELECT * FROM page_keywords WHERE CountryID='$newCountryID' AND PageID='$newPageID' AND Publish='Yes'");
    $view_3=mysqli_fetch_array($query_3);
    $newPageKeywords=$view_3['PageKeywords'];

    //Fetch Support Number
    $query_4=mysqli_query($link, "SELECT * FROM support_number WHERE CountryID='$newCountryID' AND Publish='Yes'");
    $view_4=mysqli_fetch_array($query_4);
    $newSupportNumber=$view_4['SupportNumber'];
?>

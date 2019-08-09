<?php
include("../../config/connection.php");

$newID=$_GET['ID'];

$query_1=mysqli_query($link, "DELETE FROM main_categories WHERE ID='$newID'");

?>

<?php
include("../../config/connection.php");

$newID=$_GET['ID'];

$query_1=mysql_query("DELETE FROM applications_pages WHERE ID='$newID'");

?>
<?php
include("../../config/connection.php");

$newID=$_GET['ID'];

$query_1=mysql_query("DELETE FROM web_content WHERE ID='$newID'");

?>
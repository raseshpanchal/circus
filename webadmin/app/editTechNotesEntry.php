<?php
include("../../config/connection.php");

$myID=$_GET['ID'];

$myNotes=urlencode($_POST['txt_desc']);

//Update Values in DB
$query_1=mysql_query("UPDATE technical_notes SET Notes='$myNotes' WHERE ID='$myID'");

?>
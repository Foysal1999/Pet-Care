<?php
include "DB_Connector.php";

$id = $_GET["idno"];


$query = mysqli_query($conn, "delete from address_book where id='$id' ");

if ($query) {
    echo "<h1>The record is deleted.</h1>";
}


?>
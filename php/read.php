<?php
include 'connect_db.php';

$sql = "SELECT * FROM books";

$result = mysqli_query($con, $sql);
?>
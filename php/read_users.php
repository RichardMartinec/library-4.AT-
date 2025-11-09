<?php
include 'connect_db.php';

$sql = "SELECT * FROM users";

$result = mysqli_query($con, $sql);
?>
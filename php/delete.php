<?php
include 'function.php';
include 'connect_db.php';

if (isset($_GET['id'])) {
    $id = check($_GET['id']);
    $sql = "DELETE FROM books WHERE id = $id";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header("Location:../view_admin.php?succ=Book deleted");
    }else{
        header("Location:../view_admin.php?err=Failure to delete!!!");
    }

}

?>
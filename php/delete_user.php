<?php
include 'function.php';
include 'connect_db.php';

if (isset($_GET['id'])) {
    $id = check($_GET['id']);
    $sql = "DELETE FROM users WHERE id = $id";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header("Location:../users_manage.php?succ=User deleted");
    }else{
        header("Location:../users_manage.php?err=Failure to delete!!!");
    }

}

?>
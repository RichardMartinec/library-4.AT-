<?php
include 'connect_db.php';
include 'function.php';

if (isset($_GET['id'])){
    $id = check($_GET['id']);

    $sql = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }else{ 
        header("Location:../update_user.php?err=Failure to update!!!");
    }
}

if (isset($_POST['update_user'])) {

    $id = check($_POST['id']);
    $username = check($_POST['username']);
    $password = check($_POST['password']);
    $role = check($_POST['role']);

    $user_data ='username='.$username.'&password='.$password.'&role='.$role;

    if (empty($username)) {
        header("Location:../update_user.php?err=Insert username&$user_data");
    }else if (empty($password)) {
        header("Location:../update_user.php?err=Insert password&$user_data");
    }else if (empty($role)) {
        header("Location:../update_user.php?err=Insert role&$user_data");
    }else{

        $sql_update = "UPDATE users SET username = '$username', password = '$password', role = '$role' WHERE id = $id";

        $result = mysqli_query($con, $sql_update);

        if($result){
            header("Location:../users_manage.php?succ=User updated");
        }else{
            header("Location:../users_manage.php?err=Failure to update!!!");
        }

    }

}








?>
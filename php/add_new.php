<?php
include 'connect_db.php';
include 'function.php';

if($_SERVER['REQUEST_METHOD'] == "POST") {
        
    $username = check($_POST['username']);
    $password = check($_POST['password']);
    $role = check($_POST['role']);

    $user_data ='username='.$username.'&password='.$password.'&role='.$role;

    if (empty($username)) {
        header("Location:../add_user.php?err_new=Insert username&$user_data");
        exit;
    }else if (empty($password)) {
        header("Location:../add_user.php?err_new=Insert password&$user_data");
        exit;
    }else if(empty($role)) {
        header("Location:../add_user.php?err_new=Insert role&$user_data");
        exit;
    }
    
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($con, $sql);
    if (!$result) {
        $error = "User add unsuccesful, SQL error.";
        header("Location: ../add_user.php?err_new=" . urlencode($error));
        exit;
    }

    if (mysqli_num_rows($result) > 0) {
        $error = "Username already exists";
        header("Location: ../add_user.php?err_new=" . urlencode($error));
        exit;
    }
    
    $sql ="INSERT INTO users(username, password, role) VALUE('$username','$password','$role')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header("Location:../users_manage.php?succ=User added");
    }else{
        header("Location:../users_manage.php?err=Failure to add!!!");
    }
}

?>
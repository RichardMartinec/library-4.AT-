<?php
include 'connect_db.php';
include 'function.php';

$usermane_found = 0;
$password_found = 0;
$role = '';
if($_SERVER['REQUEST_METHOD'] == "POST") {
        
    $username = check($_POST['username']);
    $password = check($_POST['password']);

    $sql = "SELECT * FROM users";

    $result = mysqli_query($con, $sql);

    if (!$result) {
        $error = "Login unsuccesful, SQL error.";
        header("Location: ../login.php?err_login=" . urlencode($error));
        exit;
    }

    while($row = mysqli_fetch_assoc($result)){
        $username_db = $row['username'];
        if($username == $username_db)
        {
            $usermane_found = 1;
            header("Location:../php/input_login.php?err=Login ok");
        }
           
    }

    if (!$usermane_found) {
        $error = "Wrong username or password";
        header("Location: ../login.php?err_login=" . urlencode($error));
        exit;
    }

    if($usermane_found == 1){

        $sql = "SELECT password, role  FROM users WHERE username = '$username'";
        $result = mysqli_query($con, $sql);

        if (!$result) {
            $error = "Login unsuccesful, SQL error.";
            header("Location: ../login.php?err_login=" . urlencode($error));
            exit;
        }

        $row = mysqli_fetch_assoc($result);
        $password_db = $row['password'];
        $role_db = $row['role'];
        if($password == $password_db)
        {
            $password_found = 1;
            header("Location:../php/input_login.php?err=Password ok");
        }
    
        if (!$password_found) {
          $error = "Wrong username or passwordo";
          header("Location: ../login.php?err_login=" . urlencode($error));
          exit;
        }
    
           
    }


    if ($usermane_found == 1 && $password_found == 1 && $role_db =='admin') {
        header("Location: ../view_admin.php");
        exit;

    } elseif ($usermane_found == 1 && $password_found == 1 && $role_db =='user') {
        header("Location: ../view_user.php");
        exit;
    }
}
?>
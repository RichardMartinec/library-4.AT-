<?php
include 'connect_db.php';
include 'function.php';

$usermane_found = 0;
$password_found = 0;
$role = 'user';
if($_SERVER['REQUEST_METHOD'] == "POST") {
        
    $username = check($_POST['username']);
    $password = check($_POST['password']);

    $sql = "SELECT * FROM users";

    $result = mysqli_query($con, $sql);

    if (!$result) {
        $error = "Login unsuccesful, SQL error.";
        header("Location: ../login.php?err_register=" . urlencode($error));
        exit;
    }

    while($row = mysqli_fetch_assoc($result)){
        $username_db = $row['username'];
        if($username == $username_db)
        {
            $usermane_found = 1;
            header("Location:../php/input_register.php?err=Login ok");
        }
           
    }

    if ($usermane_found == 1) {
        $error = "Username already exists.";
        header("Location: ../login.php?err_register=" . urlencode($error));
        exit;
    }

    if($usermane_found != 1){

        if ($password != '') {

                $sql ="INSERT INTO users(username, password, role) VALUES('$username','$password','$role')";
                $result = mysqli_query($con, $sql);
                

                if ($result) {
                    $succes = "Registracion successful.";
                    header("Location: ../login.php?succ_register=" . urlencode($succes));
                    exit;
                }else{
                    $error = "Registracion unsuccessful, error SQL.";
                    header("Location: ../login.php?err_register=" . urlencode($error));
                    exit;
                }
        }else{
                    $error = "Password not entered.";
                    header("Location: ../login.php?err_register=" . urlencode($error));
                    exit;

        }  
    
           
    }
    
}
?>
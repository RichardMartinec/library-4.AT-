<?php
include 'connect_db.php';
include 'function.php';

if (isset($_GET['id'])){
    $id = check($_GET['id']);

    $sql = "SELECT * FROM books WHERE id = $id";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }else{ 
        header("Location:../view_admin.php?err=Failure to update!!!");
    }
}

if (isset($_POST['update_book'])) {

    $id = check($_POST['id']);
    $book_name = check($_POST['nazov']);
    $author = check($_POST['autor']);
    $pages = check($_POST['pocet_stran']);
    $genre = check($_POST['zaner']);
    $borrowed = check($_POST['pozicana']);

    $user_data ='nazov='.$book_name.'&autor='.$author.'&pocet_stran='.$pages.'&zaner='.$genre. '&pozicana='.$borrowed;

    if (empty($book_name)) {
        header("Location:../update.php?err=Insert book title&$user_data");
    }else if (empty($author)) {
        header("Location:../update.php?err=Insert author&$user_data");
    }else if (empty($pages)) {
        header("Location:../update.php?err=Insert number of pages&$user_data");
    }else if (empty($genre)) {
        header("Location:../update.php?err=Insert genre&$user_data");
    }else if (empty($borrowed)) {
        header("Location:../update.php?err=Insert status&$user_data");
    }else{

        $sql_update = "UPDATE books SET nazov = '$book_name', autor = '$author', pocet_stran = '$pages', zaner = '$genre', pozicana = '$borrowed' WHERE id = '$id'";

        $result = mysqli_query($con, $sql_update);

        if($result){
            header("Location:../view_admin.php?succ=Book updated");
        }else{
            header("Location:../view.php?err=Failure to update!!!");
        }

    }

}








?>
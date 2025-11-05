<?php
include 'connect_db.php';
include 'function.php';

if($_SERVER['REQUEST_METHOD'] == "POST") {
        
    $book_name = check($_POST['nazov']);
    $author = check($_POST['autor']);
    $pages = check($_POST['pocet_stran']);
    $genre = check($_POST['zaner']);

    $user_data ='nazov='.$book_name.'&autor='.$author.'&pocet_stran='.$pages.'&zaner='.$genre;

    if (empty($book_name)) {
        header("Location:../add_book.php?err=Insert book title&$user_data");
    }else if (empty($author)) {
        header("Location:../add_book.php?err=Insert author&$user_data");
    }else if (empty($pages)) {
        header("Location:../add_book.php?err=Insert number of pages&$user_data");
    }else if (empty($genre)) {
        header("Location:../add_book.php?err=Insert genre&$user_data");
    }else{
        $sql ="INSERT INTO books(nazov, autor, pocet_stran, zaner) VALUE('$book_name','$author','$pages','$genre')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            header("Location:../view_admin.php?succ=Book added");
        }else{
            header("Location:../view_admin.php?err=Failure to add!!!");
        }

        
        
    }



}

?>
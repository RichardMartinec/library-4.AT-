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
        header("Location:../view_user.php?err=Book not in database!!!");
    }
}

if (isset($_POST['borrow_book'])) {

    $id = check($_POST['id']);
    $book_name = check($_POST['nazov']);
    $author = check($_POST['autor']);
    $pages = check($_POST['pocet_stran']);
    $genre = check($_POST['zaner']);
    $borrowed = check($_POST['pozicana']);

    $user_data ='nazov='.$book_name.'&autor='.$author.'&pocet_stran='.$pages.'&zaner='.$genre. '&pozicana='.$borrowed;

    if (($borrowed) == 'YES') {
        header("Location:../view_user.php?err=Book is already borrowed&$user_data");
    }else{

        $sql_update = "UPDATE books SET pozicana = 'YES' WHERE id = '$id'";

        $result = mysqli_query($con, $sql_update);

        if($result){
            header("Location:../borrow_ticket.php?id=$id&succ=Book borrowed");
        }else{
            header("Location:../borrow.php?err=Failure to borrow!!!");
        }

    }

}
?>
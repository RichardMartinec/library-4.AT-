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

if (isset($_POST['borrow_ticket_print'])) {

    $id = check($_POST['id']);
    $book_name = check($_POST['nazov']);
    $author = check($_POST['autor']);
    $pages = check($_POST['pocet_stran']);
    $genre = check($_POST['zaner']);
    $borrowed = check($_POST['pozicana']);

    $user_data ='nazov='.$book_name.'&autor='.$author.'&pocet_stran='.$pages.'&zaner='.$genre. '&pozicana='.$borrowed;

    ob_start(); // Začiatok výstupu do premennej
    ?>

    <!doctype html>
    <html lang="sk">
    <head>
        <meta charset="utf-8">
        <title>Borrow book ticket</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container bg-secondary text-white p-4 rounded">
            <div class="container bg-primary text-white p-4 rounded" style="border: 2px solid yellow">
                <div class="row bg-primary text-white p-4 rounded" style="border: 2px solid red">
                    <h2>Library</h2><hr><br>
                </div>  
                    <h2>Borrow book ticket-borrowing</h2><hr><br>
                    <div class="mb-3">
                        <strong>Book title:</strong> <?= $book_name ?>
                    </div>
                    <div class="mb-3">
                        <strong>Author:</strong> <?= $author ?>
                    </div>
                    <div class="mb-3">
                        <strong>Number of pages:</strong> <?= $pages ?>
                    </div>
                    <div class="mb-3">
                        <strong>Genre:</strong> <?= $genre ?>
                    </div>
                    <div class="mb-3">
                        <strong>Borrowed:</strong> <?= $borrowed ?>
                    </div>
                </div>   
            </div>
        </div>
    </body>
    </html>

    <?php
    $html = ob_get_clean();

    $filename = 'borrow_ticket_' . date('Ymd_His') . '.html';
    $saved = file_put_contents($filename, $html);

    if ($saved != false) {
        header("Location: ../borrow_ticket.php?succ=Ticket printed&id=$id");
        exit;
    } else {
        header("Location: ../borrow_ticket.php?err=Error while printing the ticket");
        exit;
    }

}
?>
<?php
include 'connect_db.php';
include 'function.php';

if (isset($_POST['return_ticket_print'])) {

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
        <title>Return book ticket</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
                <link rel="stylesheet" href="../css/style.css">
    </head>
     <body>
        <div class="container bg-transparent text-black p-4 rounded" style="border: 1px solid black">
            <div class="header_ticket">
                <nav class="nav_container_ticket">
                    <h1 class="najknihy-logo">Najknihy</h1>
                </nav>
            </div>  
            <div class="mt-4"> 
                <h2>Return book ticket</h2><hr><br>
            </div>
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
    </body>
    </html>

    <?php
    $html = ob_get_clean();

    $filename = 'return_ticket_' . date('Ymd_His') . '.html';
    $saved = file_put_contents($filename, $html);

    if ($saved !== false) {
        header("Location: ../return_ticket.php?succ=Ticket printed&id=$id");
        exit;
    } else {
        header("Location: ../return_ticket.php?err=Error while printing the ticket");
        exit;
    }

}
?>
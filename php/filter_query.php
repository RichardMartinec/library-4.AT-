<?php
include 'connect_db.php';
include 'function.php';

if (isset($_GET['filter_html']) && isset($_GET['author_filter'])) {
    $filter_polozka = check($_GET['author_filter']);
    /*$filter_polozka = ($_GET['filter_html']);*/
    /*print $filter_polozka;*/
    /*print_r($_GET);*/
    /*echo $filter_polozka;*/
    $sql = "SELECT * FROM books WHERE autor = '$filter_polozka'";
    $result = mysqli_query($con, $sql);
       
}
if (isset($_GET['filter_html']) && isset($_GET['genre_filter'])){
    $filter_polozka = check($_GET['genre_filter']);
    /*$filter_polozka = ($_GET['filter_html']);*/
    /*echo $filter_polozka;*/
    
    $sql = "SELECT * FROM books WHERE zaner = '$filter_polozka'";
    $result = mysqli_query($con, $sql);
       
}
if (isset($_GET['filter_html']) && isset($_GET['borrowed_filter'])){
    $filter_polozka = check($_GET['borrowed_filter']);
    /*$filter_polozka = ($_GET['filter_html']);*/
    /*echo $filter_polozka;*/

    $sql = "SELECT * FROM books WHERE pozicana = '$filter_polozka'";
    $result = mysqli_query($con, $sql);
       
}


?>
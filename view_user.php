<?php include 'php/read.php';?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filmy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
  <body>
    <div class="wrapper">
        <h2>Books</h2><hr><br>
        <?php if (isset($_GET['succ'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_GET['succ']; ?>
            </div>
        <?php } elseif(isset($_GET['err'])){?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_GET['err']; ?>    
        </div>
        <?php }?>

        <form action="filter_user.php" method="GET">
            <button type="submit" class="btn btn-primary" name="filter_html">Filter</button>
                    <label for="filter_author" class="form-label">Filter author</label>
                    <input type="text" class="form-control" id="author_filter" name="author_filter" value="">
         </form> 
         <form action="filter_user.php" method="GET">
            <button type="submit" class="btn btn-primary" name="filter_html">Filter</button>
                    <label for="filter_zaner" class="form-label">Filter genre</label>
                    <select class="form-select" id="genre" name="genre_filter">
                        <option value="Komedia">Komedia</option>
                        <option value="Fantasy">Fantasy</option>
                        <option value="Sci-fi">Sci-fi</option>
                        <option value="Komiks">Komiks</option>
                        <option value="Detektivka">Detektivka</option>
                        <option value="Drama">Drama</option>
                    </select>
         </form> 

         <form action="filter_user.php" method="GET">
            <button type="submit" class="btn btn-primary" name="filter_html">Filter</button>
                    <label for="filter_pozicana" class="form-label">Filter status</label>
                    <select class="form-select" id="genre" name="borrowed_filter">
                        <option value="NO">NO</option>
                        <option value="YES">YES</option>
                    </select>
         </form>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Order of numbers</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Number of pages</th>
                <th scope="col">Genre</th>
                <th scope="col">Borowed</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $book_number = 0;
                    while($row = mysqli_fetch_assoc($result)){ 
                    $book_number = $book_number+1;?>
                        <tr>
                            
                            <th scope="row"><?php echo $book_number; ?></th>
                            <td><?php echo $row['nazov']; ?></td>
                            <td><?php echo $row['autor']; ?></td>
                            <td><?php echo $row['pocet_stran']; ?></td>
                            <td><?php echo $row['zaner']; ?></td>
                            <td><?php echo $row['pozicana']; ?></td>
                            <td>
                                <a href="borrow.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Borrow</a>
                                <a href="return.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Return</a>
                            </td>
                        </tr>
                    <?php } ?>
            </tbody>

            

        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
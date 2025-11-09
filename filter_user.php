<?php include 'php/filter_query.php';?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Books</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
  <body>
    <div class="wrapper">
        <h2>Books filter</h2><hr><br>
        <?php if (isset($_GET['succ'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_GET['succ']; ?>
            </div>
        <?php } elseif(isset($_GET['err'])){?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_GET['err']; ?>    
        </div>
        <?php }?>

        <a href="view_user.php" class="btn btn-primary mb-3">Back to view</a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Book id</th>
                <th scope="col">Book title</th>
                <th scope="col">Book author</th>
                <th scope="col">Book number of pages</th>
                <th scope="col">Book genre</th>
                <th scope="col">Book status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <th scope="row"><?php echo $row['id']; ?></th>
                            <td><?php echo $row['nazov']; ?></td>
                            <td><?php echo $row['autor']; ?></td>
                            <td><?php echo $row['pocet_stran']; ?></td>
                            <td><?php echo $row['zaner']; ?></td>
                            <td><?php echo $row['pozicana']; ?></td>
                        </tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
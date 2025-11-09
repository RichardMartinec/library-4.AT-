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
        <h2>Books statistics</h2><hr><br>
        <?php if (isset($_GET['succ'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_GET['succ']; ?>
            </div>
        <?php } elseif(isset($_GET['err'])){?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_GET['err']; ?>    
        </div>
        <?php }?>

        <a href="view_admin.php" class="btn btn-primary mb-3">Back to view</a>
        <table class="table">
            <thead>
                <th scope="row">Number of books</th>
                <th scope="row">Number of comedies</th>
                <th scope="row">Number of fantasy</th>
                <th scope="row">Number of sci-fi</th>
                <th scope="row">Number of comics</th>
                <th scope="row">Number of detectives</th>
                <th scope="row">Number of drama</th>
            </thead>
            <tbody>
                <?php
                    $pocet_knih = 0;
                    $pocet_komedie = 0;   
                    $pocet_fantasy = 0;   
                    $pocet_scifi = 0;   
                    $pocet_komiks = 0;   
                    $pocet_detektivka = 0;
                    $pocet_drama = 0;
                    while($row = mysqli_fetch_assoc($result)){ 
                        $pocet_knih +=1;
                        if ($row['zaner'] == 'Komedia') 
                            $pocet_komedie += 1;
                        elseif ($row['zaner'] == 'Fantasy')    
                            $pocet_fantasy += 1;
                        elseif ($row['zaner'] == 'Sci-fi')    
                            $pocet_scifi += 1;
                        elseif ($row['zaner'] == 'Komiks')    
                            $pocet_komiks += 1;
                        elseif ($row['zaner'] == 'Detektivka')    
                            $pocet_detektivka += 1;
                        elseif ($row['zaner'] == 'Drama')    
                            $pocet_drama += 1;
                     } ?>
                    <tr>
                        <td><?php echo $pocet_knih; ?></td>
                        <td><?php echo $pocet_komedie; ?></td>
                        <td><?php echo $pocet_fantasy; ?></td>
                        <td><?php echo $pocet_scifi; ?></td>
                        <td><?php echo $pocet_komiks; ?></td>
                        <td><?php echo $pocet_detektivka; ?></td>
                        <td><?php echo $pocet_drama; ?></td>
                    </tr>
            </tbody>
        </table>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
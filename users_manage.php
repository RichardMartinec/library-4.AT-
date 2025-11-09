<?php include 'php/read_users.php';?>
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
        <h2>Users manage</h2><hr><br>
        <?php if (isset($_GET['succ'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_GET['succ']; ?>
            </div>
        <?php } elseif(isset($_GET['err'])){?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_GET['err']; ?>    
        </div>
        <?php }?>

       
        <a href="add_user.php" class="btn btn-primary mb-3">Add user</a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Number of users</th>
                <th scope="col">User ID</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $user_number = 0;
                    while($row = mysqli_fetch_assoc($result)){ 
                    $user_number = $user_number+1;?>
                        <tr>
                            
                            <th scope="row"><?php echo $user_number; ?></th>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><?php echo $row['role']; ?></td>
                            <td>
                                <a href="update_user.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Update</a>
                                <a href="php/delete_user.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
            </tbody>       
        </table>
        <a href="view_admin.php" class="btn btn-primary mb-3">Back to view</a>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
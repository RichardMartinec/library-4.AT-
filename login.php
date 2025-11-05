<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
  <body>
    <form action="php/input_login.php" method="POST">
        <h2>Login</h2><hr><br>   
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" 
                id="username" 
                name="username"
                placeholder="Enter Username"
                value="">

            <?php $pomoc = isset($_POST['succ']); 
            echo $pomoc;
        ?>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" 
                id="password" 
                name="password"
                placeholder="Enter Password"
                value="">
        </div>
        
        <?php if (isset($_GET['succ'])) { ?>
                            <div class="alert alert-success mt-3" role="alert">
                                <?php echo $_GET['succ']; ?>
                            </div>
                        <?php } elseif(isset($_GET['err_login'])){?>
                            <div class="alert alert-danger mt-3" role="alert">
                                <?php echo $_GET['err_login']; ?>    
                            </div>
                        <?php }?>


        <button type="submit" class="btn btn-primary" name="sent_login">Login</button>
    </form>

    <form action="php/input_register.php" method="POST">
        <h2>Register</h2><hr><br>   
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" 
                id="username" 
                name="username"
                placeholder="Enter Username"
                value="">

            <?php $pomoc = isset($_POST['succ']); 
            echo $pomoc;
        ?>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" 
                id="password" 
                name="password"
                placeholder="Enter Password"
                value="">
        </div>
        
        <?php if (isset($_GET['succ_register'])) { ?>
                            <div class="alert alert-success mt-3" role="alert">
                                <?php echo $_GET['succ_register']; ?>
                            </div>
                        <?php } elseif(isset($_GET['err_register'])){?>
                            <div class="alert alert-danger mt-3" role="alert">
                                <?php echo $_GET['err_register']; ?>    
                            </div>
                        <?php }?>


        <button type="submit" class="btn btn-primary" name="sent_register">Register</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
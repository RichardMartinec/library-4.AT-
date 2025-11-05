<?php 
      include 'php/login.php';?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Knižnica</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
  <body>
    <div class="container bg-secondary text-white p-4 rounded" style="border: 2px solid red">
        <div class="container bg-primary text-white p-4 rounded" style="border: 2px solid white">
            <div class="row bg-primary text-white p-4 rounded">
                <h2>Knižnica</h2><hr><br>
            </div>
            <div class="row g-4 bg-primary text-white p-4 rounded">
                <div class="col-md-6 bg-primary text-white p-4 rounded">
                    <form action="php/login.php" method="GET">
                        <h2>Login</h2><br>
                        <div class="mb-3">
                            <label for="login" class="form-label">Login</label>
                            <input type="text" class="form-control" id="log_in" name="log_in" value="">
                        </div>    
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" class="form-control" id="pass_word_log" name="pass_word_log" value="">
                        </div>    
                        <button type="submit" class="btn btn-secondary" name="login">Login</button>
                        <?php if (isset($_GET['succ'])) { ?>
                            <div class="alert alert-success mt-3" role="alert">
                                <?php echo $_GET['succ']; ?>
                            </div>
                        <?php } elseif(isset($_GET['err_login'])){?>
                            <div class="alert alert-danger mt-3" role="alert">
                                <?php echo $_GET['err_login']; ?>    
                            </div>
                        <?php }?>
                    </form>     
                </div>            
                <div class="col-md-6 bg-primary text-white p-4 rounded">
                    <form action="php/registration.php" method="GET">
                        <h2>Registrácia</h2><br>
                        <div class="mb-3">
                            <label for="login" class="form-label">Registrácia</label>
                            <input type="text" class="form-control" id="register_log" name="register_log" value="">
                        </div>    
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" class="form-control" id="pass_word_reg" name="pass_word_reg" value="">
                        </div>    
                        <button type="submit" class="btn btn-secondary" name="login">Registrácia</button>
                        <?php if (isset($_GET['succ_registration'])) { ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $_GET['succ_registration']; ?>
                            </div>
                        <?php } elseif(isset($_GET['err_registration'])){?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_GET['err_registration']; ?>    
                            </div>
                        <?php }?>
                    </form>
                </div>        
            </div>
        </div>    
    </div>                    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add a new user</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
  <body>
    <form action="php/add_new.php" method="POST">
        <h2>Add a new user</h2><hr><br>


    <?php if (isset($_GET['succ'])) { ?>
                            <div class="alert alert-success mt-3" role="alert">
                                <?php echo $_GET['succ']; ?>
                            </div>
                        <?php } elseif(isset($_GET['err_new'])){?>
                            <div class="alert alert-danger mt-3" role="alert">
                                <?php echo $_GET['err_new']; ?>    
                            </div>
                        <?php }?>

        <a href="view_admin.php" class="btn btn-primary mb-3">Back to view</a>
        
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" 
                id="username" 
                name="username"
                placeholder="Insert username"
                value="<?php if(isset ($_GET['username'])){
                        echo $_GET['username'];}?>">
        </div>
     
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" 
                id="password" 
                name="password"
                placeholder="Insert password"
                value="<?php if(isset ($_GET['password'])){
                        echo $_GET['password'];}?>">
        </div>

       <div class="mb-3">
            <label for="role" class="form-label">Role</label>
             <select class="form-select" id="role" name="role">
                        <option value=""disabled>– Vyber rolu –</option>
                        <option value="user">user</option>
                        <option value="admin">admin</option>
                    </select>
        </div>

        <button type="submit" class="btn btn-primary" name="save_user">Save</button>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
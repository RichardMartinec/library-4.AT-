<?php include 'php/user_update.php';?>
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
    <form action="php/user_update.php" method="POST">
        <h2>Update user</h2><hr><br>       
       
        <a href="users_manage.php" class="btn btn-primary mb-3">Back to view</a>

        <?php if(isset($_GET['err'])) { ?>
           <div class="alert alert-danger" role="alert">
                <?php echo $_GET['err'];?>
            </div> 
        <?php } ?>

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" 
                id="username" 
                name="username"
                placeholder="Insert username"
                value="<?php 
                    if (isset($_GET['username'])) echo $_GET['username'];
                    else if (isset($row['username'])) echo ($row['username']); 
                ?>">
        </div>
     
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" 
                id="password" 
                name="password"
                placeholder="Insert password"
                value="<?php 
                    if (isset($_GET['password'])) echo $_GET['password'];
                    else if (isset($row['password'])) echo ($row['password']); 
                ?>">
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
             <select class="form-select" id="role" name="role">
                <option value="" disabled <?php if (empty($row['role'])) echo 'selected'; ?>>– Vyber rolu –</option>
                <option value="user"    <?php if ($row['role'] == 'user') echo 'selected'; ?>>user</option>
                <option value="admin"    <?php if ($row['role'] == 'admin') echo 'selected'; ?>>admin</option>
            </select>
        </div>

        <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>"><br>

        <button type="submit" class="btn btn-primary" name="update_user">Save</button>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
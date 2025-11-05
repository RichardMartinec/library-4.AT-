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
    <form action="php/add.php" method="POST">
        <h2>Add new book</h2><hr><br>

        <?php if(isset($_GET['err'])) { ?>
           <div class="alert alert-danger" role="alert">
                <?php echo $_GET['err'];?>
            </div> 
        <?php } ?>


        <a href="view_admin.php" class="btn btn-primary mb-3">Back to view</a>
        
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" 
                id="title" 
                name="nazov"
                placeholder="Insert title"
                value="<?php if(isset ($_GET['nazov'])){
                        echo $_GET['nazov'];}?>">
        </div>
     
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" 
                id="author" 
                name="autor"
                placeholder="Insert author"
                value="<?php if(isset ($_GET['autor'])){
                        echo $_GET['autor'];}?>">
        </div>

        <div class="mb-3">
            <label for="pages" class="form-label">Number of pages</label>
            <input type="numbers" class="form-control" 
                id="pages" 
                name="pocet_stran"
                placeholder="Insert number of pages"
                value="<?php if(isset ($_GET['pocet_stran'])){
                        echo $_GET['pocet_stran'];}?>">
        </div>        

        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control" 
                id="genre" 
                name="zaner"
                placeholder="Insert genre"
                value="<?php if(isset ($_GET['zaner'])){
                        echo $_GET['zaner'];}?>">
        </div>

        <button type="submit" class="btn btn-primary" name="save_book">Save</button>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
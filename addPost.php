<?php 
  require('config/config.php');
  require('config/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Blog</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
  <?php require('frontend/navbar.php'); ?>
  <div class="container">
    <h1>Add New Post</h1>
    <form method="POST" action="action.php">
      <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" class="form-control" id="title">
      </div>
      <div class="form-group">
        <label for="author">Author</label>
        <input name="author"  type="text" class="form-control" id="exampleInputEmail1">
      </div>
      <div class="form-group">
        <label for="body">Body</label>
        <input name="body"  type="text" class="form-control" id="body">
      </div>
      <input type="submit" class="btn btn-primary" value="Submit">
    </form>
  </div>
</body>
</html>
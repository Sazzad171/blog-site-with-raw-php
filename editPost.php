<?php 
  require('config/config.php');
  require('config/db.php');

   // get id
   $id = mysqli_real_escape_string($con, $_GET['id']);

   // create query
   $query = 'select * from posts where id='.$id;
 
   // get result
   $result = mysqli_query($con, $query);
 
   // fetch data
   $post = mysqli_fetch_assoc($result);
   // var_dump($posts);
 
   // free result
   mysqli_free_result($result);
 
   // mysqli close
   mysqli_close($con);
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
    <form method="POST" action="updateAction.php">
      <div class="form-group">
        <label for="title">Title</label>
        <input name="title" value="<?php echo $post['title']; ?>" type="text" class="form-control" id="title">
      </div>
      <div class="form-group">
        <label for="author">Author</label>
        <input name="author" value="<?php echo $post['author']; ?>"  type="text" class="form-control" id="exampleInputEmail1">
      </div>
      <div class="form-group">
        <label for="body">Body</label>
        <input name="body" value="<?php echo $post['body']; ?>"  type="text" class="form-control" id="body">
      </div>
      <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
      <input type="submit" class="btn btn-primary" value="Submit">
    </form>
  </div>
</body>
</html>
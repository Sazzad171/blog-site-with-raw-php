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
    <h1>This is full Post</h1>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"> <?php echo $post['title']; ?> </h5>
          <h6 class="card-subtitle mb-2 text-muted">Written by <?php echo $post['author']; ?> </h6>
          <p class="card-text"> <?php echo $post['body']; ?> </p>
          <p> <?php echo $post['created_at']; ?> </p>
        </div>
      </div>
      <a href="<?php echo ROOT_URL; ?>" class="btn btn-default">Go Back</a>
      <a href="<?php echo ROOT_URL; ?>editPost.php?id=<?php echo $post['id']; ?>" class="btn btn-success">Edit Post</a>

      <form method="POST" action="deleteAction.php">
        <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
        <input type="submit" name="delete" value="Delete" class="btn btn-danger">
      </form>
  </div>
</body>
</html>
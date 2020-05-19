<?php 
  require('config/config.php');
  require('config/db.php');

  // create query
  $query = 'SELECT * FROM posts ORDER BY created_at DESC';

  // get result
  $result = mysqli_query($con, $query);

  // fetch data
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
    <h1>All Posts</h1>
    <?php foreach($posts as $post) : ?>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"> <?php echo $post['title']; ?> </h5>
          <h6 class="card-subtitle mb-2 text-muted">Written by <?php echo $post['author']; ?> </h6>
          <p class="card-text"> <?php echo $post['body']; ?> </p>
          <p> <?php echo $post['created_at']; ?> </p>
          <a href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>" class="card-link"> <?php  ?> See more... </a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>
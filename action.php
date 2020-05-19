<?php 
  require('config/config.php');
  require('config/db.php');

  // get form data
  $title = mysqli_real_escape_string($con, $_POST['title']);
  $author = mysqli_real_escape_string($con, $_POST['author']);
  $body = mysqli_real_escape_string($con, $_POST['body']);

  $query = "insert into posts(title, author, body) values('$title', '$author', '$body')";

  if(mysqli_query($con, $query)) {
    header('Location: '.ROOT_URL.'');
  }
  else {
    echo 'Error: '. mysqli_error($con);
  }
?>
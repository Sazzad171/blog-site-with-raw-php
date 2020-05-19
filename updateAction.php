<?php 
  require('config/config.php');
  require('config/db.php');

  // get form data
  $update_id = mysqli_real_escape_string($con, $_POST['update_id']);
  $title = mysqli_real_escape_string($con, $_POST['title']);
  $author = mysqli_real_escape_string($con, $_POST['author']);
  $body = mysqli_real_escape_string($con, $_POST['body']);

  $query = "update posts set
            title='$title',
            author='$author',
            body='$body'
            where id={$update_id}";

  if(mysqli_query($con, $query)) {
    header('Location: '.ROOT_URL.'');
  }
  else {
    echo 'Error: '. mysqli_error($con);
  }
?>
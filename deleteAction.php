<?php 
  require('config/config.php');
  require('config/db.php');

  // get form data
  $delete_id = mysqli_real_escape_string($con, $_POST['delete_id']);

  $query = "delete from posts where id = {$delete_id}";

  if(mysqli_query($con, $query)) {
    header('Location: '.ROOT_URL.'');
  }
  else {
    echo 'Error: '. mysqli_error($con);
  }
?>
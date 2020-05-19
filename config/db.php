<?php 
  // create connection
  $con = mysqli_connect('localhost', 'root', '', 'simple_blog');

  // check connection
  if(mysqli_connect_errno()) {
    // connection failed
    echo 'Failed to connect mysql'. mysqli_connect_errno();
  }
?>
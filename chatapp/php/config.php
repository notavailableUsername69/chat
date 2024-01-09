<?php
    $conn = mysqli_connect('localhost','root','','chat') or die("Try again!");

  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
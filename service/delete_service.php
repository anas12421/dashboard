<?php
require '../db_connect.php';
  $id= $_GET['id'];

  $delete = "DELETE FROM services WHERE id = $id";

  mysqli_query($db_connect, $delete);
  header("location:service.php")
  
?>
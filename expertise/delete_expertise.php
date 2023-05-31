<?php
require '../db_connect.php';
  $id= $_GET['id'];

  $delete = "DELETE FROM expertise WHERE id = $id";

  mysqli_query($db_connect, $delete);
  header("location:expertise_info.php")
  
?>
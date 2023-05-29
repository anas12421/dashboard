<?php
require '../db_connect.php';
  $id= $_GET['id'];

  $delete = "DELETE FROM contact WHERE id = $id";

  mysqli_query($db_connect, $delete);
  header("location:contact_info.php");
  
?>